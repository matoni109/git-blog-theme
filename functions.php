<?php

/**
 * Theme setup.
 */
function git_blog_theme_setup()
{
  add_theme_support('title-tag');

  register_nav_menus(
    array(
      'primary' => __('Primary Menu', 'tailpress'),
    )
  );

  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );

  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');

  add_theme_support('align-wide');
  add_theme_support('wp-block-styles');

  add_theme_support('editor-styles');
  add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'git_blog_theme_setup');

/**
 * Remove <p> tags inside contact-form-7.
 */
add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Enqueue theme assets.
 */
function git_blog_theme_enqueue_scripts()
{
  $theme = wp_get_theme();

  wp_enqueue_style('tailpress', git_blog_theme_asset('css/app.css'), array(), $theme->get('Version'));
  wp_enqueue_script('tailpress', git_blog_theme_asset('js/app.js'), array(), $theme->get('Version'));
}

add_action('wp_enqueue_scripts', 'git_blog_theme_enqueue_scripts');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function git_blog_theme_asset($path)
{
  if (wp_get_environment_type() === 'production') {
    return get_stylesheet_directory_uri() . '/' . $path;
  }

  return add_query_arg('time', time(),  get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function git_blog_theme_nav_menu_add_li_class($classes, $item, $args, $depth)
{
  if (isset($args->li_class)) {
    $classes[] = $args->li_class;
  }

  if (isset($args->{"li_class_$depth"})) {
    $classes[] = $args->{"li_class_$depth"};
  }

  return $classes;
}

add_filter('nav_menu_css_class', 'git_blog_theme_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function git_blog_theme_nav_menu_add_submenu_class($classes, $args, $depth)
{
  if (isset($args->submenu_class)) {
    $classes[] = $args->submenu_class;
  }

  if (isset($args->{"submenu_class_$depth"})) {
    $classes[] = $args->{"submenu_class_$depth"};
  }

  return $classes;
}


/**
 * Gets post from loop.
 *
 * @param int  $amount.
 * @param mixed $callback.
 * @return void
 */
function git_blog_theme_posts_from_loop($amount, $callback)
{
  global $wp_query;

  $count = 0;

  while (($count < $amount) && ($wp_query->current_post + 1 < $wp_query->post_count)) {
    $wp_query->the_post();

    $callback();

    $count++;
  }
}

add_filter('nav_menu_submenu_css_class', 'git_blog_theme_nav_menu_add_submenu_class', 10, 3);

class LTM_Menu_Walker extends Walker_Nav_Menu
{
  public function end_el(&$output, $item, $depth = 0, $args = array())
  {
    if ($args->is_mobile_menu == false && in_array('menu-item-has-children', $item->classes ?? [])) {
      $output .= '<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
      <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" /></svg>';
    }
  }
}

// add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

/**
 * Pagination for blog posts
 *
 */
// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
  global $wp_query;

  $big = 999999999;

  printf(
    paginate_links(array(
      'base' => str_replace($big, '%#%', get_pagenum_link($big)),
      'format' => '?paged=%#%',
      'current' => max(1, get_query_var('paged')),
      'total' => $wp_query->max_num_pages
    ))
  );
}

/**
 * Pagination for blog posts
 *
 */
// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function git_blog_theme_pagination()
{
  $allowed_tags = [
    'span' => [
      'class' => [],
      'aria-current' => [],
    ],
    'button' => [
      'class' => [],
      'id' => [],
    ],
    'a' => [
      'class' => [],
      'href' => [],
    ],
    'svg' => [
      'class' => [],
      'href' => [],
      'viewBox' => [],
      'fill' => [],
      'aria-hidden' => []
    ],
    'path' => [
      'class' => [],
      'href' => [],
      'fill-rule' => [],
      'd' => [],
      'clip-rule' => []
    ]
  ];

  $args = [
    'before_page_number' => '<span class="hidden md:block relative rounded-md inline-flex items-center mx-0.5 px-4 py-2 font-semibold text-gray-600 ring-1 ring-inset ring-gray-300 hover:bg-gray-100 focus:z-20 focus:outline-offset-0">',

    'after_page_number' => '</span>',

    'aria_current' => 'page',

    'prev_text' => '<span class="md:hidden rounded-md mx-0.5 px-4 py-2 font-semibold text-gray-400 hover:border-gray-300 ring-1 ring-inset ring-gray-300 hover:bg-gray-100 focus:z-20 focus:outline-offset-0">Previous</span><span class="hidden md:block inline-flex items-center rounded-md mx-0.5 px-3 py-2 font-semibold text-gray-400 hover:border-gray-300  ring-1 ring-inset ring-gray-300 hover:bg-gray-100 focus:z-20 focus:outline-offset-0"><span class="sr-only">Previous</span><svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" /></svg></span>',

    'next_text' => '<span class="md:hidden rounded-md mx-0.5 px-4 py-2 font-semibold text-gray-400 hover:border-gray-300 ring-1 ring-inset ring-gray-300 hover:bg-gray-100 focus:z-20 focus:outline-offset-0">Next</span><span class="hidden md:block inline-flex items-center rounded-md mx-0.5 px-3 py-2 font-semibold text-gray-400 hover:border-gray-300 ring-1 ring-inset ring-gray-300 hover:bg-gray-100 focus:z-20 focus:outline-offset-0"><span class="sr-only">Next</span><svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" /></svg></span>'
  ];

  printf('<nav class="flex justify-between md:flex-wrap md:items-center md:justify-center border-t border-gray-200 py-3 text-small" aria-label="Pagination">%s</nav>', wp_kses(paginate_links($args), $allowed_tags));
}


// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
  return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
  return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
  global $post;
  if (function_exists($length_callback)) {
    add_filter('excerpt_length', $length_callback);
  }
  if (function_exists($more_callback)) {
    add_filter('excerpt_more', $more_callback);
  }
  $output = get_the_excerpt();
  $output = apply_filters('wptexturize', $output);
  $output = apply_filters('convert_chars', $output);
  $output = '<p>' . $output . '</p>';
  echo $output;
}

// Remove Admin bar
function remove_admin_bar()
{
  return false;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
  global $post;
  return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar($avatar_defaults)
{
  $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
  $avatar_defaults[$myavatar] = "Custom Gravatar";
  return $avatar_defaults;
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
  return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
  global $post;
  if (is_home()) {
    $key = array_search('blog', $classes);
    if ($key > -1) {
      unset($classes[$key]);
    }
  } elseif (is_page()) {
    $classes[] = sanitize_html_class($post->post_name);
  } elseif (is_singular()) {
    $classes[] = sanitize_html_class($post->post_name);
  }

  return $classes;
}

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar

// Remove Filters
// remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether
