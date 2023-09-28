<?php

/**
 * Component for category and tags output
 *
 * To be used inside cards
 */

// Check if $args is defined, and if not, initialize it as an empty array.
if (!isset($args)) {
  $args = array();
}

// Merge the provided $args with the default array.
$args = wp_parse_args(
  $args,
  array('category_tags_array' => ['category', 'post_tag'])
);
$types = $args['category_tags_array'];

$the_post_id = get_the_ID();
$article_terms = wp_get_post_terms($the_post_id, $types);

if (!empty($article_terms) && is_array($article_terms)) {
?>
  <!-- Tags -->
  <div class="flex flex-wrap">
    <?php foreach ($article_terms as $key => $article_term) { ?>
      <a class="category-item pr-1" href="<?php echo esc_url(get_term_link($article_term)); ?>">
        <p class="capitalize font-bold text-gradient-purple-coral">
          <?php echo esc_html($article_term->name); ?>
        </p>
      </a>
    <?php } ?>
  </div>
  <!-- /Tags -->
<?php } // End of if condition
?>
