<?php

/**
 * Dynamic Large Card.
 *
 * Also takes $args to include or remove content
 *
 */
// https://make.wordpress.org/core/2020/07/17/passing-arguments-to-template-files-in-wordpress-5-5/

$args = wp_parse_args(
  $args,
  array(
    'text' => '' // Default to an empty string if 'text' is not provided
  )
);
$text = $args['text'];

?>

<button type="button" class="rounded-md bg-white my-2 px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"><?php echo esc_html($text); ?></button>
