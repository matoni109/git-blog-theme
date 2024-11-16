  <?php

  /**
   * Blog Post Header.
   *
   *
   *
   */

  ?>
  <header class="entry-header mb-4">
    <div class="mb-2">
      <?php get_template_part('template-parts/components/card-tags-category-getter', null, ['category_tags_array' => ['category']]); ?>
    </div>
    <?php the_title(sprintf('<h1 class="entry-title text-2xl lg:text-5xl font-extrabold leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>
    <div class="post-header py-4">
      <div class="col-span-12 lg:col-span-10 lg:col-start-2">
        <div class="font-mono text-gray-500 text-small pb-1 mb-2">Author</div>
        <div class="flex flex-row items-center justify-between">
          <div class="flex flex-wrap ">
            <a class="flex items-center text-blue-600 text-lg font-semibold mb-2 mr-4 lg:mr-5" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
              <?php echo get_avatar(get_the_author_meta("ID"), 40, null, null, ['class' => 'block h-auto rounded-full mr-2', 'loading' => 'lazy']);
              ?><p class="text-black hover:text-primary hover:underline hover:underline-offset-2"><?php the_author() ?></p>
            </a>
          </div>
          <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="block border-l pl-4 font-mono text-gray-500 text-end text-xs md:text-small"><?php echo get_the_date(); ?></time>
        </div>
        <div class="border-t border border-indigo-600 mt-4"></div>
      </div>
    </div>
  </header>
