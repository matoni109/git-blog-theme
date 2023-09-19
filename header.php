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
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/github-mark.svg" class="object-scale-down w-8 mr-4">
                  <?php echo get_bloginfo('name'); ?>
                </a>

                <p class="text-sm font-light text-gray-600">
                  <?php echo get_bloginfo('description'); ?>
                </p>

              <?php } ?>
            </div>

            <!-- Mobile Navigation -->

            <div class="lg:hidden">
              <div class="flex flex-row">
                <a id="primary-menu-toggle" href="#" aria-label="Toggle navigation">
                  <button class="hamburger flex items-center space-x-2 focus:outline-none">
                    <span class="invisible">🔥</span>
                    <div class="w-6 flex items-center justify-center relative">
                      <span class="line-1-closed transform transition w-full h-0.5 bg-current absolute"></span>

                      <span class="line-2-closed transform transition w-full h-0.5 bg-current absolute"></span>

                      <span class="line-3-closed transform transition w-full h-0.5 bg-current absolute"></span>
                    </div>
                  </button>
                </a>

                <a id="primary-search-toggle" class="ml-4" href="#search" aria-label="Search toggle">
                  <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 50 50">
                    <path d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z"></path>
                  </svg>
                  <span class="screen-reader-text">Search</span>
                </a>
              </div>
            </div>
          </div>

          <div class="visible lg:invisible">
            <?php
            wp_nav_menu(array(
              'container_id'    => 'primary-menu',
              'container_class' => 'hidden mt-4 p-4',
              'menu_class'      => 'flex flex-col',
              'theme_location'  => 'primary',
              'li_class_0'      => 'pt-4 text-xl group',
              'li_class_1'      => 'pt-4',
              'fallback_cb'     => false,
              'walker' => new LTM_Menu_Walker(),
              'is_mobile_menu' => true,
            ));
            ?>

            <a href="#" aria-label="Contact Us Link">
              <button id="primary-menu-button" class="hidden w-full rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold ring-1 ring-inset ring-gray-300">Contact Us</button>
            </a>

          </div>

          <!-- Desktop Navigation -->

          <?php
          wp_nav_menu(array(
            'container_id'    => 'primary-menu',
            'container_class' => 'hidden lg:bg-transparent lg:block',
            'menu_class'      => 'flex flex-row -mx-4',
            'theme_location'  => 'primary',
            'li_class_0'      => 'flex items-center text-large mx-4 relative group hover:text-primary',
            'li_class_1'      => 'pt-0 hover:italic text-gray-700 hover:text-primary',
            'submenu_class'   => 'lg:hidden lg:group-hover:block shadow-behind absolute left-1/2 top-6 transform -translate-x-1/2 rounded w-48 max-w-xl bg-white p-4 block border',
            'fallback_cb'     => false,
            'walker' => new LTM_Menu_Walker(),
            'is_mobile_menu' => false,
          ));
          ?>

        </div>
        <?php get_search_form(); ?>
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
