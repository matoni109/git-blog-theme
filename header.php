<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

  <?php do_action('git_blog_theme_site_before'); ?>

  <div id="page" class="min-h-screen flex flex-col">

    <?php do_action('git_blog_theme_header'); ?>

    <div class="bg-gray-800 py-3 text-xs">
      <div class="container mx-auto">
        <a href="#" class="text-white">Back to GitHub.com</a>
      </div>
    </div>
    <header>
      <!-- TODO: come back to fix below logo stuff-->
      <div class="mx-auto container">
        <div class="lg:flex lg:justify-between lg:items-center border-b py-6">
          <div class="flex justify-between items-center">
            <div>
              <?php if (has_custom_logo()) { ?>
                <?php the_custom_logo(); ?>
              <?php } else { ?>
                <a href="<?php echo get_bloginfo('url'); ?>" class="flex items-center font-extrabold text-lg font-mono">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/github-mark.svg" class="w-8 mr-4">
                  <?php echo get_bloginfo('name'); ?>
                </a>

                <p class="text-sm font-light text-gray-600">
                  <?php echo get_bloginfo('description'); ?>
                </p>

              <?php } ?>
            </div>

            <div class="lg:hidden">
              <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
                <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                    <g id="icon-shape">
                      <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
                    </g>
                  </g>
                </svg>
              </a>
            </div>
          </div>

          <?php
          wp_nav_menu(array(
            'container_id'    => 'primary-menu',
            'container_class' => 'hidden mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
            'menu_class'      => 'flex flex-col lg:flex-row lg:-mx-4',
            'theme_location'  => 'primary',
            'li_class_0'      => 'pt-4 lg:pt-0 text-xl lg:text-base lg:mx-4 lg:relative group hover:text-primary',
            'li_class_1'      => 'pt-4 lg:pt-0 lg:hover:italic lg:text-gray-700 hover:text-primary',
            'submenu_class'   => 'lg:hidden lg:group-hover:block lg:shadow-behind lg:absolute lg:left-1/2 lg:top-6 lg:transform lg:-translate-x-1/2 lg:rounded lg:w-48 lg:max-w-xl lg:bg-white lg:p-4 lg:block lg:border',
            'fallback_cb'     => false,
          ));
          ?>
        </div>

      </div>
    </header>

    <div id="content" class="site-content flex-grow">

      <?php if (is_front_page()) { ?>
        <!-- Start introduction
			<div class="container mx-auto">
				<div class="px-12 py-16 my-12 rounded-xl bg-gradient-to-r from-blue-50 from-10% via-sky-100 via-30% to-blue-200 to-90%">
                    <div class="mx-auto max-w-screen-md">
                        <h1 class="text-3xl lg:text-6xl tracking-tight font-extrabold text-gray-800 mb-6">Start building your next <a href="https://tailwindcss.com" class="text-secondary">Tailwind CSS</a> flavoured WordPress theme
                            with <a href="https://tailpress.io" class="text-primary">TailPress</a>.</h1>
                        <p class="text-gray-600 text-xl font-medium mb-10">TailPress is your go-to starting
                            point for developing WordPress themes with Tailwind CSS and comes with basic block-editor support out
                            of the box.</p>
                        <a href="https://github.com/jeffreyvr/tailpress"
                            class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">View
                            on GitHub</a>
                    </div>
                </div>
			</div>
			End introduction -->
      <?php } ?>

      <?php do_action('git_blog_theme_content_start'); ?>

      <main>
