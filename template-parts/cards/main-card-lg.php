<?php

/**
 * Dynamic Large Card.
 *
 * Also takes $args to include or remove content
 *
 */
// Set defaults.

$args = wp_parse_args(
  $args,
  array(
    'type' => ''
  )
);
$type = $args['type'];

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('flex flex-col md:flex-row-reverse p-2 py-6 border-t border-gray-200 md:mb-2'); ?>>

  <header class="entry-header basis-1/2 pb-3 md:pb-1 lg:px-3">
    <?php the_post_thumbnail('large', ['class' => 'rounded object-cover object-scale-down tease-thumbnail tease-thumbnail__img', 'alt' => get_the_title(), 'loading' => 'lazy']); ?>
  </header>

  <div class="entry-summary md:px-3 basis-1/2">

    <?php if ($type != "archive") : ?>
      <?php get_template_part('template-parts/components/card-tags-category-getter'); ?>
    <?php endif; ?>

    <?php the_title(sprintf('<h2 class="entry-title text-xl md:text-3xl font-extrabold leading-tight mb-1 pt-1"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

    <?php html5wp_excerpt('html5wp_custom_post'); ?>

    <div class="flex items-center pt-2">
      <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
        <?php
        echo get_avatar(get_the_author_meta("ID"), 30, null, null, ['class' => 'rounded-full mr-4', 'loading' => 'lazy']);
        ?>
      </a>

      <span class="flex flex-col pt-2">
        <p class="text-small font-bold capitalize">
          <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
            <?php the_author() ?>
          </a>
        </p>

        <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="font-mono text-sm text-gray-700">
          <?php echo get_the_date(); ?>
        </time>
      </span>
    </div>

  </div>

</article>
