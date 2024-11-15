<?php

/**
 * Front Page template file.
 *
 * Wordpress Will look here first
 * Remove or re-name this file if you want to
 * go through the index loop.
 */

get_header(); ?>



<div class="container mx-auto my-8">
  <?php
  if (defined('PAGE_DEBUG_MODE') && PAGE_DEBUG_MODE) {
    get_template_part('template-parts/components/page-helper-button', null, ['text' => 'front page']);
  }
  ?>
  <div class="mx-auto">
    <div class="px-4">


      <!--
        <?php get_template_part("template-parts/components/you-tube-tutorial-loop") ?>
      -->

    </div>
    <?php get_template_part("template-parts/components/latest-posts") ?>

  </div>
</div>
<?php
get_footer();
