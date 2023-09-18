<!-- search -->
<div class="z-40 bg-white header-search my-0.5 p-4 js-header-search rounded absolute right-0">
  <form role="search" method="get" class="search" action="<?php echo esc_url(home_url()); ?>">
    <span class="sr-only"><?php echo _x('Search for:', 'lable', 'tailpress'); ?></span>
    <div class="flex flex-row flex-items-center">

      <input id="search-input" class="outline-slate-300 outline outline-1 focus:outline-none focus:ring focus:border-blue-500 rounded-md search-field form-control flex-auto p-2 mr-2" type="search" name="s" placeholder="<?php echo esc_attr_x('Search ...', 'placeholder', 'tailpress'); ?>" value="<?php the_search_query(); ?>" aria-label="Search">

      <div class="ml-2">
        <button type="submit" class="text-blue-500 ring-1 ring-inset ring-gray-300 rounded-md bg-gray-50 px-3.5 py-2.5 text-sm font-semibold hover:ring-0 hover:text-white shadow-sm hover:bg-blue-600 search-submit"><?php echo esc_attr_x('Search', 'submit button', 'tailpress'); ?>
        </button>
      </div>
    </div>
  </form>
</div>
<!-- /search -->
