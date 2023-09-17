<!-- search -->
<form class="search" method="get" action="<?php echo esc_url(home_url()); ?>" role="search">
  <span class="sr-only"><?php echo _x('Search for:', 'lable', 'tailpress'); ?></span>
  <input class="search-input" type="search" name="s" placeholder="<?php echo esc_attr_x('Search', 'placeholder', 'tailpress'); ?>" value="<?php the_search_query(); ?>" aria-label="Search">
  <button class="search-submit" type="submit" role="button"><?php echo esc_attr_x('Search', 'submit button', 'tailpress'); ?></button>
</form>
<!-- /search -->
