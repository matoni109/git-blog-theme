<article <?php post_class(); ?>>
  <header>
    <?php the_post_thumbnail('large', ['class' => 'rounded object-center object-scale-down', 'alt' => get_the_title()]); ?>
    <a href="<?php the_permalink(); ?>">
      <h2 class="text-4xl my-8 font-medium"><?php the_title(); ?></h2>
    </a>
  </header>

  <div class="flex items-center text-gray-600 pb-4">

    <?php echo get_avatar(get_the_author_meta("ID"), 40, null, null, array('class' => 'rounded-full mr-4')); ?>
    <p class="capitalize"><?php the_author() ?></p>

  </div>
</article>
