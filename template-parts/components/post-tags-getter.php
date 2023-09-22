<?php

/**
 * Component for post tags output
 *
 * To be used inside posts
 *
 */

$tags = get_tags(array(
  'taxonomy' => 'post_tag',
  'orderby' => 'name',
  'hide_empty' => true
));


if (wp_get_post_terms($post->ID, 'post_tag', ['fields' => 'ids'])) {

?>
  <div class="post-tags font-mono my-4 md:mt-6">
    <div class="flex flex-nowrap items-start">
      <span class="post-tags-label flex-shrink-0 inline-block mt-2">Tags:</span>
      <!-- tags -->
      <ul class="flex flex-wrap inline-block shrink list-none text-primary mt-2 mb-0 ml-4">
        <?php
        $tags = get_the_tags(); // Get tags for the current post

        if ($tags) {
          $tag_names = array();

          foreach ($tags as $tag) {
            $tag_link = get_tag_link($tag->term_id);

            $tag_names[] = '<li><a href="' . esc_html($tag_link) . '" class="hover:underline capitalize" rel="tag" title="' . esc_html($tag->name) . ' Tag"><p class="break-words ' . esc_html($tag->slug) . '">' . esc_html($tag->name) . '</p></a></li>';
          }

          $tags_string = implode('<li><p style="color: black;">,</p></li><li><p style="color: transparent;">_</p></li>', $tag_names);

          echo $tags_string;
        }
        ?>
      </ul>
      <!-- /tags -->
    </div>
  </div>
<?php }
?>
