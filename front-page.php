<?php get_header(); ?>

<div class="container mx-auto my-8">
  <div class="mx-auto">
    <div class="px-4">
      <h3>front page</h3>
      <?php if (have_posts()) : ?>

        <div class="max-w-screen-lg mx-auto">
          <div class="md:flex md:-mx-8">

            <div class="md:w-1/2 px-4">
              <?php git_blog_theme_posts_from_loop(1, function () {

                get_template_part('template-parts/large-post');
              }); ?>
            </div>


            <div class="md:w-1/2 px-4">
              <?php git_blog_theme_posts_from_loop(3, function () {

                get_template_part('template-parts/small-post');
              }); ?>
            </div>
          </div>
        </div>

      <?php endif; ?>

    </div>
  </div>
</div>
<?php
get_footer();
