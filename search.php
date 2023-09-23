<?php

/**
 * Search Page template file.
 *
 */

get_header();

?>

<div class="container mx-auto my-8">
  <div class="mx-auto">
    <div class="px-4">
      <!-- old layout
    <div class="max-w-screen-lg mx-auto">
      <div class="md:-mx-8 px-4">
     -->

      <!-- results header -->
      <?php get_template_part('template-parts/search/search-header') ?>

      <main role="main">
        <section>
          <!-- search-items-section -->
          <?php if (have_posts()) : ?>
            <span class="search-items grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
              <?php
              while (have_posts()) :
                the_post(); ?>
                <span class="search-item">
                  <?php get_template_part('template-parts/cards/main-card', 'sm', ['type' => 'search'])
                  ?>
                </span>
              <?php endwhile; ?>
            </span>
            <!-- /search-items-section -->
            <?php get_template_part('pagination'); ?>
          <?php else : ?>
            <span class="text-left md:tracking-wide text-inherit">Sorry, but nothing matched your search terms. Please try again with some different keywords.</span>
          <?php endif; ?>
        </section>
      </main>
    </div>
  </div>
</div>
<?php get_footer();
