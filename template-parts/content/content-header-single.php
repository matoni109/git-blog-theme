<?php

/**
 * Dynamic Header for Posts and Pages
 *
 *
 */
if (is_single()) : // Check if it's a single post
?>

  <?php get_template_part('template-parts/post/post-header');
  ?>

<?php else : // For all other cases (pages)
?>
  <header class="entry-header mb-4">
    <?php the_title(sprintf('<h1 class="entry-title text-2xl lg:text-5xl font-extrabold leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>
    <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
  </header>
<?php endif; ?>
