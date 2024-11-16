<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php
  if (defined('PAGE_DEBUG_MODE') && PAGE_DEBUG_MODE) {
    get_template_part('template-parts/components/page-helper-button', null, ['text' => 'content single']);
  }
  ?>

  <?php get_template_part('template-parts/content/content-header', 'single') ?>

  <div class="entry-content">
    <?php the_content();

    get_template_part('/template-parts/components/post-tags-getter'); ?>

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
