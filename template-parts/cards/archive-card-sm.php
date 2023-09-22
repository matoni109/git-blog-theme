<article id="post-<?php the_ID(); ?>" <?php post_class('flex flex-col py-6 border-t border-gray-200 md:mb-8'); ?>>

  <header class="entry-header">
    <?php the_post_thumbnail('large', ['class' => 'rounded object-cover object-scale-down pb-2 tease-thumbnail tease-thumbnail__img', 'loading' => 'lazy', 'alt' => get_the_title()]); ?>
  </header>

  <div class="entry-summary">

    <?php the_title(sprintf('<h2 class="entry-title text-xl md:text-3xl font-extrabold leading-tight mb-1 pt-1"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

    <?php html5wp_excerpt('html5wp_index'); ?>

    <p class="text-small font-bold pt-2 capitalize"><?php the_author() ?></p>

    <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="font-mono text-sm text-gray-700"><?php echo get_the_date(); ?>
    </time>
  </div>

</article>
