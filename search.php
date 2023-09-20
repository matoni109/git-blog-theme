<?php get_header(); ?>
<div class="container mx-auto my-8">
  <div class="mx-auto">
    <!-- old layout
    <div class="max-w-screen-lg mx-auto">
      <div class="md:-mx-8 px-4">
     -->
    <div class="px-4">
      <!-- results return -->
      <div id="results" class="mb-6 pb-3">
        <h6 class="font-mono"><?php echo get_bloginfo('name'); ?> Search</h6>
        <h6 class="entry-results text-xxl md:text-4xl lg:text-5xl font-bold leading-tight">
          <?php echo sprintf(__('%s Search Results for: ', 'tailpress'), $wp_query->found_posts); ?>
          <span class="text-gradient-purple-coral"><?php echo get_search_query(); ?></span>
        </h6>

      </div>
      <!-- /results return -->

      <main role="main">
        <section>
          <!-- search-items-section -->
          <?php if (have_posts()) : ?>
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
<?php get_footer(); ?>
