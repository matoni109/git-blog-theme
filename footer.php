</main>

<?php do_action('git_blog_theme_content_end'); ?>

</div>

<?php do_action('git_blog_theme_content_after'); ?>

<footer id="colophon" class="mt-6" role="contentinfo">
  <?php do_action('git_blog_theme_footer'); ?>

  <div class="container mx-auto text-gray-500 text-xs md:text-small">
    <?php
    get_template_part('template-parts/footer/footer-top');
    ?>
  </div>

  <div class="bg-gray-50 text-gray-500">
    <div class="container mx-auto text-center text-xs md:text-small">
      <?php
      get_template_part('template-parts/footer/footer-bottom');
      ?>
    </div>
  </div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>
