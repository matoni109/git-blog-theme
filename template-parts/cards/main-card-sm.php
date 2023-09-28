<?php

/**
 * Dynamic Small Card.
 *
 * Also takes $args to include or remove content
 *
 */
// https://make.wordpress.org/core/2020/07/17/passing-arguments-to-template-files-in-wordpress-5-5/

$args = wp_parse_args(
  $args,
  array(
    'type' => ''
  )
);
$type = $args['type'];

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('flex flex-col py-6 border-t border-gray-200'); ?>>

  <header class="entry-header">
    <?php the_post_thumbnail('large', ['class' => 'rounded object-cover object-scale-down pb-2 tease-thumbnail tease-thumbnail__img', 'loading' => 'lazy', 'alt' => get_the_title()]); ?>
  </header>

  <div class="entry-summary">

    <?php if ($type != "archive") : ?>
      <?php get_template_part('template-parts/components/card-tags-category-getter', null, ['category_tags_array' => ['category']]); ?>
    <?php endif; ?>

    <?php the_title(sprintf('<h2 class="entry-title text-xl md:text-3xl font-extrabold leading-tight mb-3 pt-1"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

    <?php html5wp_excerpt('html5wp_index'); ?>

    <div class="pt-3">

      <?php if ($type != "author") : ?>

        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
          <p class="text-small font-bold capitalize"><?php the_author() ?></p>
        </a>

      <?php endif; ?>

      <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="font-mono text-sm text-gray-700"><?php echo get_the_date(); ?>
      </time>
    </div>

  </div>

</article>
