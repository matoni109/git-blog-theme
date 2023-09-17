<?php get_header(); ?>

<div class="container mx-auto my-8">
  <h3>index</h3>
  <?php if (have_posts()) : ?>
    <?php
    while (have_posts()) :
      the_post();
    ?>

      <?php get_template_part('template-parts/content', get_post_format()); ?>

    <?php endwhile; ?>

  <?php endif;
  get_template_part('pagination');
  ?>
</div>

<?php
get_footer();
