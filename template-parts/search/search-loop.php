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
