<?php

/**
 * Component to display the names of the last 4 posts
 */

$args = array(
  'post_type' => 'post',
  'posts_per_page' => 4,
  'order' => 'DESC',
  'orderby' => 'date',
);

$recent_posts = new WP_Query($args);

if ($recent_posts->have_posts()) :
?>
  <!-- Last 4 Posts -->
  <div id="recent-posts" class="my-8">
    <h2 class="font-extrabold leading-tight text-xl md:text-2xl lg:text-3xl pt-3 pb-4 border-slate-800 border-t-4">Latest posts</h2>
    <span class="latest-items grid md:grid-flow-col md:gap-1 lg:gap-3 md:grid-cols-4">
      <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
        <div class="px-2 mx-1">
          <?php get_template_part('template-parts/cards/main-card', 'sm', ['type' => 'latest'])
          ?>
        </div>
      <?php endwhile; ?>
    </span>
  </div>
  <!-- /Last 4 Posts -->
<?php
  // Restore original post data
  wp_reset_postdata();
endif;
?>
