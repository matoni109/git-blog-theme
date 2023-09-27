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
          <?php if (have_posts()) :

            get_template_part('template-parts/search/search-loop')
          ?>

          <?php else : ?>
            <span class="text-left md:tracking-wide text-inherit">Sorry, but nothing matched your search terms. Please try again with some different keywords.</span>
          <?php endif; ?>
        </section>
      </main>
    </div>
  </div>
</div>
<?php get_footer();
