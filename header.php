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
    <?php get_template_part('template-parts/navigation/navigation-bar') ?>

    <div id="content" class="site-content flex-grow">



      <?php if (is_front_page()) { ?>

        <!--  Start introduction -->

        <div class="container mx-auto">
          <?php
          if (defined('PAGE_DEBUG_MODE') && PAGE_DEBUG_MODE) {
            get_template_part('template-parts/components/page-helper-button', null, ['text' => 'header']);
          }
          ?>
          <div class="px-12 py-16 my-12 rounded-xl bg-gradient-to-r from-gray-50 from-10% via-gray-100 via-30% to-gray-200 to-90%">
            <div class="mx-auto max-w-screen-md">
              <h1 class="text-3xl lg:text-6xl tracking-tight font-extrabold text-gray-800 mb-6">Start building your next <a href="https://tailwindcss.com" class="text-secondary">Tailwind CSS</a> flavoured WordPress theme
                with <a href="https://tailpress.io" class="text-primary">TailPress</a>.</h1>
              <p class="text-gray-600 text-xl font-medium mb-10">github blog theme, built using Tailpress, Tailwind CSS. Find this block in <code>header.php</code> and start building on top of this bootstrapped theme.</p>
              <a href="https://github.com/jeffreyvr/tailpress" class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">View
                on GitHub</a>
            </div>
          </div>
        </div>

        <!-- End introduction -->
      <?php } ?>

      <?php do_action('git_blog_theme_content_start'); ?>

      <main>
