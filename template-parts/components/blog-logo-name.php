<div class="">
  <?php if (has_custom_logo()) { ?>
    <?php the_custom_logo(); ?>
  <?php } else { ?>
    <div class="flex flex-col items-start">
      <a href="<?php echo get_bloginfo('url'); ?>" class="flex items-center font-extrabold text-lg font-mono mb-1">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/github-mark.svg" class="object-scale-down w-8 mr-4">
        <?php echo get_bloginfo('name'); ?>
      </a>

      <p class="text-sm font-light text-gray-600">
        <?php echo get_bloginfo('description'); ?>
      </p>
    </div>
  <?php } ?>
</div>
