<?php
/**
 * Title: single
 * Slug: blue-note/single
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-large","tagName":"header"} <?php echo __('/', 'blue-note');?>-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"8.13rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:ironnysh<?php echo __('/', 'blue-note');?>meta-block-sidebar <?php echo __('/', 'blue-note');?>-->

<!-- wp:post-content <?php echo __('/', 'blue-note');?>-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo __('Author: ', 'blue-note');?><<?php echo __('/', 'blue-note');?>p>
<!-- <?php echo __('/', 'blue-note');?>wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"showBio":false} <?php echo __('/', 'blue-note');?>-->

<!-- wp:paragraph -->
<p><?php echo __('/', 'blue-note');?><<?php echo __('/', 'blue-note');?>p>
<!-- <?php echo __('/', 'blue-note');?>wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('Tags: ', 'blue-note');?><<?php echo __('/', 'blue-note');?>p>
<!-- <?php echo __('/', 'blue-note');?>wp:paragraph -->

<!-- wp:post-terms {"term":"post_tag"} <?php echo __('/', 'blue-note');?>--><<?php echo __('/', 'blue-note');?>div>
<!-- <?php echo __('/', 'blue-note');?>wp:group -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"<?php echo __('/', 'blue-note');?>>
<!-- <?php echo __('/', 'blue-note');?>wp:separator -->

<!-- wp:post-navigation-link {"type":"previous","label":"\u003cem\u003ePrevious\u003c<?php echo __('/', 'blue-note');?>em\u003e","linkLabel":true,"arrow":"arrow"} <?php echo __('/', 'blue-note');?>-->

<!-- wp:post-navigation-link {"type":"previous","label":"","showTitle":true,"style":{"typography":{"textTransform":"uppercase","fontWeight":"600"}}} <?php echo __('/', 'blue-note');?>--><<?php echo __('/', 'blue-note');?>div>
<!-- <?php echo __('/', 'blue-note');?>wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"<?php echo __('/', 'blue-note');?>>
<!-- <?php echo __('/', 'blue-note');?>wp:separator -->

<!-- wp:post-navigation-link {"textAlign":"right","label":"\u003cem\u003eNext\u003c<?php echo __('/', 'blue-note');?>em\u003e","linkLabel":true,"arrow":"arrow"} <?php echo __('/', 'blue-note');?>-->

<!-- wp:post-navigation-link {"textAlign":"right","label":"","showTitle":true,"style":{"typography":{"textTransform":"uppercase","fontWeight":"600"}}} <?php echo __('/', 'blue-note');?>--><<?php echo __('/', 'blue-note');?>div>
<!-- <?php echo __('/', 'blue-note');?>wp:column --><<?php echo __('/', 'blue-note');?>div>
<!-- <?php echo __('/', 'blue-note');?>wp:columns -->

<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-comments-form <?php echo __('/', 'blue-note');?>-->

<!-- wp:comments-title {"showPostTitle":false,"showCommentsCount":false} <?php echo __('/', 'blue-note');?>-->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-author-name <?php echo __('/', 'blue-note');?>-->

<!-- wp:comment-date <?php echo __('/', 'blue-note');?>-->

<!-- wp:comment-edit-link <?php echo __('/', 'blue-note');?>--><<?php echo __('/', 'blue-note');?>div>
<!-- <?php echo __('/', 'blue-note');?>wp:group -->

<!-- wp:comment-content <?php echo __('/', 'blue-note');?>-->

<!-- wp:comment-reply-link <?php echo __('/', 'blue-note');?>-->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"><<?php echo __('/', 'blue-note');?>div>
<!-- <?php echo __('/', 'blue-note');?>wp:spacer -->
<!-- <?php echo __('/', 'blue-note');?>wp:comment-template -->

<!-- wp:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous <?php echo __('/', 'blue-note');?>-->

<!-- wp:comments-pagination-next <?php echo __('/', 'blue-note');?>-->
<!-- <?php echo __('/', 'blue-note');?>wp:comments-pagination --><<?php echo __('/', 'blue-note');?>div>
<!-- <?php echo __('/', 'blue-note');?>wp:group --><<?php echo __('/', 'blue-note');?>div>
<!-- <?php echo __('/', 'blue-note');?>wp:comments --><<?php echo __('/', 'blue-note');?>div>
<!-- <?php echo __('/', 'blue-note');?>wp:column -->

<!-- wp:column {"width":"33.33%","style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"tagName":"aside","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained"}} -->
<aside class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"22px","textTransform":"uppercase","fontWeight":"700"}}} -->
<h2 class="wp-block-heading" style="font-size:22px;font-weight:700;text-transform:uppercase"><?php echo __('Latest Post', 'blue-note');?><<?php echo __('/', 'blue-note');?>h2>
<!-- <?php echo __('/', 'blue-note');?>wp:heading -->

<!-- wp:latest-posts <?php echo __('/', 'blue-note');?>--><<?php echo __('/', 'blue-note');?>div>
<!-- <?php echo __('/', 'blue-note');?>wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"22px","textTransform":"uppercase"}}} -->
<h2 class="wp-block-heading" style="font-size:22px;text-transform:uppercase"><strong><?php echo __('Subscribe', 'blue-note');?> to our newsletter<<?php echo __('/', 'blue-note');?>strong><<?php echo __('/', 'blue-note');?>h2>
<!-- <?php echo __('/', 'blue-note');?>wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('Get new content delivered directly to your inbox. Never miss a new post!', 'blue-note');?><<?php echo __('/', 'blue-note');?>p>
<!-- <?php echo __('/', 'blue-note');?>wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo __('Subscribe', 'blue-note');?><<?php echo __('/', 'blue-note');?>a><<?php echo __('/', 'blue-note');?>div>
<!-- <?php echo __('/', 'blue-note');?>wp:button --><<?php echo __('/', 'blue-note');?>div>
<!-- <?php echo __('/', 'blue-note');?>wp:buttons --><<?php echo __('/', 'blue-note');?>div>
<!-- <?php echo __('/', 'blue-note');?>wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"22px","textTransform":"uppercase","fontWeight":"700"}}} -->
<h2 class="wp-block-heading" style="font-size:22px;font-weight:700;text-transform:uppercase"><?php echo __('Categories', 'blue-note');?><<?php echo __('/', 'blue-note');?>h2>
<!-- <?php echo __('/', 'blue-note');?>wp:heading -->

<!-- wp:categories {"showPostCounts":true} <?php echo __('/', 'blue-note');?>--><<?php echo __('/', 'blue-note');?>div>
<!-- <?php echo __('/', 'blue-note');?>wp:group --><<?php echo __('/', 'blue-note');?>aside>
<!-- <?php echo __('/', 'blue-note');?>wp:group --><<?php echo __('/', 'blue-note');?>div>
<!-- <?php echo __('/', 'blue-note');?>wp:column --><<?php echo __('/', 'blue-note');?>div>
<!-- <?php echo __('/', 'blue-note');?>wp:columns --><<?php echo __('/', 'blue-note');?>div>
<!-- <?php echo __('/', 'blue-note');?>wp:group --><<?php echo __('/', 'blue-note');?>main>
<!-- <?php echo __('/', 'blue-note');?>wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} <?php echo __('/', 'blue-note');?>-->