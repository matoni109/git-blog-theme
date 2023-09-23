<header class="page-header">
  <div class="">
    <div id="archive-type" class="mb-6 pb-3">
      <?php
      // category title : custom post type archive title
      if (is_archive()) {
        printf(
          '<h5 class="font-mono">%s</h5>',
          print_archive_page_type()
        );
      }

      if (!empty(single_term_title('', false))) {
        printf(
          '<h2 class="entry-results capitalize py-2 text-xxl md:text-4xl lg:text-5xl font-bold leading-tight">%s</h2>',
          single_term_title('', false)
        );
      }

      if (!empty(get_the_archive_description())) {
        the_archive_description('<div class="archive-description line-clamp-3 text-small  text-gray-700">', '</div>');
      }
      ?>

    </div>
  </div>
</header>
