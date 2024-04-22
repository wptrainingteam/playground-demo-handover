<?php

/**
 * Render.php
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

global $post;
$teamName = get_post_meta($post->ID, 'team', true);
$joinedDate = get_post_meta($post->ID, 'joined', true);

?>
<dl <?php echo get_block_wrapper_attributes();
    ?>>
  <dt>Team</dt>
  <dd>
    <?php if (!empty($teamName)) {
      echo esc_html($teamName);
    } else {
      echo esc_html_e("Lumon Industries");
    }
    ?></dd>
  <dt>Joined</dt>
  <dd>
    <?php if (!empty($joinedDate)) {
      echo esc_html($joinedDate);
    } else {
      echo esc_html_e("No date available");
    }
    ?>
  </dd>
</dl>