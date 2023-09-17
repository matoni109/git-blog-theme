<article id="post-<?php the_ID(); ?>" <?php post_class('mb-4 md:mb-8'); ?>>

  <header class="entry-header mb-1 py-4 border-t border-gray-200">
    <?php the_post_thumbnail('large', ['class' => 'rounded object-center object-scale-down', 'alt' => get_the_title()]); ?>
    <?php the_title(sprintf('<h2 class="entry-title text-xl md:text-3xl font-extrabold leading-tight mb-1 pt-3"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
  </header>

  <div class="entry-summary">
    <?php html5wp_excerpt('html5wp_index'); ?>
    <p class="text-small font-bold pt-2 capitalize"><?php the_author() ?></p>
    <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="font-mono text-sm text-gray-700"><?php echo get_the_date(); ?></time>
  </div>

</article>
