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

    <!-- Above Navbar header -->
    <div class="bg-gray-800 py-3 text-xs">
      <div class="container mx-auto">
        <a href="#" class="text-white">Back to GitHub.com</a>
      </div>
    </div>
    <!-- Navbar goes here -->
    <nav class="border-b">
      <div class="mx-auto container px-4">
        <div class="flex items-center justify-between">
          <div class="flex grow items-center justify-between space-x-7 py-4 md:py-6">
            <div class="flex items-center px-2">
              <!-- Website Logo -->
              <?php get_template_part('template-parts/components/blog-logo-name') ?>
            </div>
            <!-- Primary Navbar items -->
            <?php
            wp_nav_menu(array(
              'container_id'    => 'primary-menu',
              'container_class' => 'md:bg-transparent md:block flex-1',
              'menu_class'      => 'hidden md:flex items-center justify-end space-x-6',
              'theme_location'  => 'primary',
              'li_class_0'      => 'flex items-center text-large relative group hover:text-primary',
              'li_class_1'      => 'pt-0 hover:italic text-gray-700 hover:text-primary',
              'submenu_class'   => 'md:hidden md:group-hover:block shadow-behind absolute left-1/2 top-6 transform -translate-x-1/2 rounded w-48 max-w-xl bg-white p-4 block border',
              'fallback_cb'     => false,
              'walker' => new LTM_Menu_Walker(),
              'is_mobile_menu' => false,
            ));
            ?>
            <!-- Additional primary inline Navbar items -->
            <span class="hidden md:hidden lg:inline">
              <?php get_template_part('template-parts/components/contact-us-button') ?>
            </span>
            <span class="hidden md:inline">
              <?php get_template_part('template-parts/components/search-icon') ?>
            </span>
            <!-- Secondary Navbar items -->
            <div class="hidden md:flex items-center space-x-3">

            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
              <?php get_template_part('template-parts/components/hamburger-menu') ?>
              <?php get_template_part('template-parts/components/search-icon') ?>
            </div>
          </div>
        </div>
        <!-- mobile menu -->
        <div id="mobile-menu" class="mobile-menu">
          <?php
          wp_nav_menu(array(
            'container_id'    => 'mobile-list-menu',
            'container_class' => 'hidden md:hidden mt-4 p-4',
            'menu_class'      => 'flex flex-col',
            'theme_location'  => 'primary',
            'li_class_0'      => 'pt-4 text-xl group',
            'li_class_1'      => 'pt-4',
            'fallback_cb'     => false,
            'walker' => new LTM_Menu_Walker(),
            'is_mobile_menu' => true,
          ));
          ?>
          <!-- Additional mobile inline menu items -->
          <?php get_template_part('template-parts/components/contact-us-mobile-button') ?>
        </div>

        <?php get_search_form(); ?>
      </div>
    </nav>

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
