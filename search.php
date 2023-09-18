<?php get_header(); ?>
<div class="container mx-auto my-8">
  <div class="max-w-screen-lg mx-auto">
    <div class="md:-mx-8 px-4">
      <!-- results return -->
      <div id="results" class="mb-6 pb-3">
        <h6 class="font-mono"><?php echo get_bloginfo('name'); ?> Search</h6>
        <h3 class="entry-results text-2xl md:text-3xl font-bold leading-tight">
          <?php echo sprintf(__('%s Search Results for: ', 'tailpress'), $wp_query->found_posts); ?>
          <span class="text-gradient-purple-coral"><?php echo get_search_query(); ?></span>
        </h3>

      </div>
      <!-- /results return -->

      <main role="main">

        <!-- search-items-section -->
        <section>

          <?php if (have_posts()) : ?>
            <?php
            while (have_posts()) :
              the_post();
              get_template_part('template-parts/search-card')
            ?>
            <?php endwhile; ?>
            <?php get_template_part('pagination'); ?>
          <?php else : ?>
            <?php get_template_part('searchform'); ?>
          <?php endif; ?>

        </section>
        <!-- /search-items-section -->
      </main>
    </div>
  </div>
</div>
<?php get_footer(); ?>
