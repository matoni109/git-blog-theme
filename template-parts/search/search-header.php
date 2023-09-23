<header>
  <div class="px-4">
    <div id="results" class="mb-6 pb-3">
      <h6 class="font-mono"><?php echo get_bloginfo('name'); ?> Search</h6>
      <h2 class="entry-results text-xxl md:text-4xl lg:text-5xl font-bold leading-tight">
        <?php echo sprintf(__('%s Search Results for: ', 'tailpress'), $wp_query->found_posts); ?>
        <span class="text-gradient-purple-coral"><?php echo get_search_query(); ?></span>
      </h2>
    </div>
  </div>
</header>
