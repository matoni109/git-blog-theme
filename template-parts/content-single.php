<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <h3>content single</h3>
  <?php get_template_part('template-parts/content/content-header', 'single') ?>

  <div class="entry-content">
    <?php the_content(); ?>

    <?php
    wp_link_pages(
      array(
        'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'tailpress') . '</span>',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
        'pagelink'    => '<span class="screen-reader-text">' . __('Page', 'tailpress') . ' </span>%',
        'separator'   => '<span class="screen-reader-text">, </span>',
      )
    );
    ?>
  </div>

</article>
