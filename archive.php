<?php get_header(); ?>
<div class="container mx-auto my-8">
  <div class="mx-auto">
    <div class="px-4">
      <!-- archive header -->

      <?php get_template_part('template-parts/archive-header') ?>
      <main role="main">
        <section>
          <!-- archive-items-section -->
          <?php if (have_posts()) : ?>

            <!-- single archive-item-->
            <?php git_blog_theme_posts_from_loop(1, function () {

              get_template_part('template-parts/search-card');
            }); ?>


            <span class="search-items grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

              <?php
              while (have_posts()) :
                the_post(); ?>
                <span class="search-item">
                  <?php get_template_part('template-parts/search-card')
                  ?>
                </span>
              <?php endwhile; ?>
            </span>
            <!-- /archive-items-section -->
            <?php get_template_part('pagination'); ?>
          <?php else : ?>
            <span class="text-left md:tracking-wide text-inherit text-gray-700">Sorry, but nothing matched your archive. Please try again with some different archive type.
            </span>
          <?php endif; ?>
        </section>
      </main>
    </div>
  </div>
</div>
<?php get_footer(); ?>
