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
  // $allowed_html_tags = allowed_tags();
  // echo $allowed_html_tags;
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
    ]
  ];

  $args = [
    'before_page_number' => '<span class="relative rounded-md inline-flex items-center mx-0.5 px-4 py-2 text-sm font-semibold text-gray-600 ring-1 ring-inset ring-gray-300 hover:bg-gray-100 focus:z-20 focus:outline-offset-0">',
    'after_page_number' => '</span>',
    'aria_current' => 'page',

    'prev_text' => '<span class="rounded-md mx-0.5 px-4 py-2.5 font-semibold text-gray-400 hover:border-gray-300 hover:text-gray-700 text-xs md:text-small text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-100 focus:z-20 focus:outline-offset-0">Previous</span>',

    'next_text' => '<span class="rounded-md mx-0.5 px-4 py-2.5 font-semibold text-gray-400 hover:border-gray-300 hover:text-gray-700 text-xs md:text-small text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-100 focus:z-20 focus:outline-offset-0">Next</span>'
  ];

  printf('<nav class="items-center justify-between -space-x-px " aria-label="Pagination">%s</nav>', wp_kses(paginate_links($args), $allowed_tags));
}
