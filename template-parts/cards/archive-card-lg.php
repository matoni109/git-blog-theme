<article id="post-<?php the_ID(); ?>" <?php post_class('flex flex-col md:flex-row-reverse p-2 py-6 border-t border-gray-200 md:mb-2'); ?>>

  <header class="entry-header basis-1/2 pb-3 md:pb-1 lg:px-3">
    <?php the_post_thumbnail('large', ['class' => 'rounded object-cover object-scale-down tease-thumbnail tease-thumbnail__img', 'alt' => get_the_title(), 'loading' => 'lazy']); ?>
  </header>

  <div class="entry-summary md:px-3 basis-1/2">

    <?php the_title(sprintf('<h2 class="entry-title text-xl md:text-3xl font-extrabold leading-tight mb-1 pt-1"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

    <?php html5wp_excerpt('html5wp_custom_post'); ?>

    <div class="flex items-center pt-2">

      <?php echo get_avatar(get_the_author_meta("ID"), 30, null, null, array('class' => 'rounded-full mr-4')); ?>

      <span class="flex flex-col pt-2">
        <p class="text-small font-bold capitalize"><?php the_author() ?></p>

        <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="font-mono text-sm text-gray-700"><?php echo get_the_date(); ?>
        </time>
      </span>

    </div>

  </div>

</article>