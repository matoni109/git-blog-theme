<?php

/**
 * Component for category and tags output
 *
 * To be used inside cards
 *
 */

$the_post_id = get_the_ID();
$article_terms = wp_get_post_terms($the_post_id, ['category', 'post_tag']);

if (empty($article_terms) || !is_array($article_terms)) {
  return;
}

?>
<!-- tags -->
<div class="flex flex-wrap">
  <?php
  foreach ($article_terms as $key => $article_term) {
  ?>
    <a class="category-item pr-1" href="<?php echo esc_url(get_term_link($article_term)); ?>">
      <p class="capitalize font-bold text-gradient-purple-coral">
        <?php echo esc_html($article_term->name); ?>
      </p>
    </a>
  <?php
  }
  ?>
</div>
<!-- /tags -->
