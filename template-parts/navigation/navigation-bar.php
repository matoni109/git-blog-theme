<nav class="border-b">
  <div class="mx-auto container px-4 relative">
    <div class="flex items-center justify-between">
      <div class="flex grow items-center justify-between space-x-7 py-4 md:py-6">
        <div class="flex items-center px-2">
          <!-- Website Logo -->
          <?php get_template_part('template-parts/components/blog-logo-name') ?>
        </div>
        <!-- Primary Navbar items -->
        <?php
        wp_nav_menu(array(
          'container_id'    => 'primary-menu',
          'container_class' => 'md:bg-transparent md:block flex-1',
          'menu_class'      => 'hidden md:flex items-center justify-end space-x-6',
          'theme_location'  => 'primary',
          'li_class_0'      => 'flex items-center text-large relative group hover:text-primary',
          'li_class_1'      => 'pt-0 hover:italic text-gray-700 hover:text-primary',
          'submenu_class'   => 'md:hidden md:group-hover:block shadow-behind absolute left-1/2 top-6 transform -translate-x-1/2 rounded w-48 max-w-xl bg-white p-4 block border',
          'fallback_cb'     => false,
          'walker' => new LTM_Menu_Walker(),
          'is_mobile_menu' => false,
        ));
        ?>
        <!-- Additional primary inline Navbar items -->
        <span class="hidden md:hidden lg:inline">
          <?php get_template_part('template-parts/components/contact-us-button') ?>
        </span>
        <span class="hidden md:inline">
          <?php get_template_part('template-parts/components/search-icon') ?>
        </span>
        <!-- Secondary Navbar items -->
        <div class="hidden md:flex items-center space-x-3">

        </div>
        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
          <?php get_template_part('template-parts/components/hamburger-menu') ?>
          <?php get_template_part('template-parts/components/search-icon') ?>
        </div>
      </div>
    </div>
    <!-- mobile menu -->
    <div id="mobile-menu" class="mobile-menu">
      <?php
      wp_nav_menu(array(
        'container_id'    => 'mobile-list-menu',
        'container_class' => 'hidden md:hidden mt-4 p-4',
        'menu_class'      => 'flex flex-col',
        'theme_location'  => 'primary',
        'li_class_0'      => 'pt-4 text-xl group',
        'li_class_1'      => 'pt-4',
        'fallback_cb'     => false,
        'walker' => new LTM_Menu_Walker(),
        'is_mobile_menu' => true,
      ));
      ?>
      <!-- Additional mobile inline menu items -->
      <?php get_template_part('template-parts/components/contact-us-mobile-button') ?>
    </div>

    <?php get_search_form(); ?>
  </div>
</nav>
