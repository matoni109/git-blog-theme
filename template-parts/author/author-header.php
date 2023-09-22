<?php

/**
 * Author Header Template Part.
 *
 * @package Aquila
 */

$author_email = get_the_author_meta('user_email');
$has_avatar   = aquila_has_gravatar($author_email);
$avatar       = get_avatar(get_the_author_meta("ID"), 30, null, null,  ['class'   => 'w-24 h-24 rounded-full', 'alt' => get_the_author(), 'loading' => 'lazy']);

?>
<header class="page-header mb-4">
  <span class="flex sm:flex-row flex-col justify-between content-center">
    <!--author-col-one-->
    <div class="author-col-one text-left ml-0">
      <p class="font-light mb-2">Posts by</p>
      <?php
      if (!empty(get_the_author())) {
        printf(
          '<h1 class="inline-block capitalize text-xxl md:text-4xl lg:text-5xl font-bold">%s</h1>',
          get_the_author()
        );
      }
      ?>
    </div>

    <!--author-col-two-->
    <div class="author-col-two mb-3 lg:mb-0">

      <!-- #author-avatar -->
      <div id="author-avatar" class="author-avatar flex items-start pt-3 sm:pt-0">
        <?php
        if (!empty($has_avatar)) {
          echo wp_kses_post($avatar);
        } else {
          printf(
            '<span id="author-firstname" class="hidden">%1$s</span><span id="author-lastname" class="hidden">%2$s</span><div id="author-profile-img" class="w-24 h-24 rounded-full bg-primary flex items-center justify-center" alt="' . esc_html(get_the_author()) . '"><span class="text-white text-4xl absolute inset-center"></span></div>',
            esc_html(get_the_author_meta('first_name')),
            esc_html(get_the_author_meta('last_name'))
          );
        }
        ?>
      </div>
    </div>
  </span>

  <?php
  // If a user has filled out their description, show a bio on their entries.
  if (get_the_author_meta('description')) : ?>
    <div id="author-description" class="mb-8 mt-3 lg:mt-6">
      <p class="text-left break-words indent-8"><?php echo nl2br(get_the_author_meta('description')); ?></p>
    </div>
  <?php endif; ?>

</header>
