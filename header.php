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
        <a href="/" class="text-white">Back to enceladus.digital</a>
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
          <div class="px-12 py-16 my-12 rounded-xl bg-gradient-to-r from-pink-50 from-10% via-pink-100 via-30% to-gray-200 to-90%">
            <div class="mx-auto max-w-screen-md">
              <h1 class="text-3xl lg:text-6xl tracking-tight font-extrabold text-gray-800 mb-6">A digital agency returning <a href="#" class="text-secondary">Your Website</a> and brand to orbit. Take off again with <a href="./" class="text-primary">Enceladus Digital</a>.
              </h1>
              <p class="text-gray-600 text-xl font-medium mb-10">From optimising your website’s speed to crafting strategies that drive search rankings, we’re here to get your site ready for takeoff.</p>
              <p class="text-gray-600 text-xl font-medium mb-10">Let’s make your website not just perform, but thrive in the competitive digital landscape.</p>
              <a href="/services" class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">View
                our services</a>
            </div>
          </div>
        </div>

        <!-- End introduction -->

      <?php } ?>

      <?php do_action('git_blog_theme_content_start'); ?>

      <main>
