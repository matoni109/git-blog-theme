<?php get_header(); ?>

<div class="container mx-auto my-8">

  <main role="main">
    <section>
      <h3>index</h3>
      <!-- index-items-section -->
      <?php if (have_posts()) : ?>
        <span class="search-items grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
          <?php
          while (have_posts()) :
            the_post();
          ?>
            <span class="search-item">
              <?php get_template_part('template-parts/content', get_post_format()); ?>
            </span>
          <?php endwhile; ?>
        </span>
        <!-- /index-items-section -->
        <?php get_template_part('pagination'); ?>
      <?php else : ?>
        <span class="text-left md:tracking-wide text-inherit">Sorry, but nothing is currently matching your content type.</span>
      <?php endif; ?>
    </section>
  </main>
</div>
<?php get_footer(); ?>
