<?php

/**
 * Dynamic single page.
 *
 * Also takes $args to include or remove content
 *
 */

// Check if $args is defined, and if not, initialize it as an empty array.
if (!isset($args)) {
  $args = array();
}

// Merge the provided $args with the default array.
$args = wp_parse_args($args, array('type' => ''));
$type = $args['type'];

get_header(); ?>

<div class="container my-8 mx-auto">
  <h3>single php</h3>
  <?php if (have_posts()) : ?>

    <?php
    while (have_posts()) :
      the_post();
      get_template_part('template-parts/content', 'single');

      get_template_part('pagination');

      // If comments are open or we have at least one comment, load up the comment template.
      if (comments_open() || get_comments_number()) :
        comments_template();
      endif;
    ?>

    <?php endwhile; ?>

  <?php endif; ?>

</div>

<?php
get_footer();
