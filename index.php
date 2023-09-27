<?php

/**
 * Index template file.
 */
get_header();
?>

<div class="container mx-auto my-8">
  <main role="main">
    <section>

      <?php
      if (is_home() && !is_front_page()) {
        get_template_part('template-parts/home/home-header');
      }
      ?>

      <!-- index-items-section -->
      <?php if (have_posts() && is_home()) : ?>
        <?php get_template_part('template-parts/search/search-loop'); ?>
      <?php elseif (have_posts()) : ?>
        <!-- This section should not be reached in this theme but just in case -->
        <div class="index-items">
          <?php
          while (have_posts()) :
            the_post();
          ?>
            <div class="index-item">
              <?php get_template_part('template-parts/content', get_post_format()); ?>
            </div>
          <?php endwhile; ?>
        </div>
      <?php else : ?>
        <div class="text-left md:tracking-wide text-inherit">
          Sorry, but nothing is currently matching your content type.
        </div>
      <?php endif; ?>

    </section>
  </main>
</div>

<?php get_footer();
