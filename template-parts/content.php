<article id="post-<?php the_ID(); ?>" <?php post_class('mb-12'); ?>>

  <?php get_template_part('template-parts/content/content-header') ?>
  <?php
  if (defined('PAGE_DEBUG_MODE') && PAGE_DEBUG_MODE) {
    get_template_part('template-parts/components/page-helper-button', null, ['text' => 'content']);
  }
  ?>
  <div class="entry-content">
    <?php
    /* translators: %s: Name of current post */
    the_content(
      sprintf(
        __('Continue reading %s', 'tailpress'),
        the_title('<span class="screen-reader-text">"', '"</span>', false)
      )
    );

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
