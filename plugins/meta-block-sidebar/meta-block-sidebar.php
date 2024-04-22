<?php

/**
 * Plugin Name:       Meta Block Sidebar
 * Description:       A custom block that displays the person's team name and the year they joined the company.
 * Requires at least: 6.4.1
 * Requires PHP:      7.0
 * Version:           1.0.1
 * Author:            Ronny Shani
 * Text Domain:       meta-block-sidebar
 *
 * @package           create-block
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it also registers all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function meta_block_sidebar_meta_block_sidebar_block_init() {
	register_block_type(__DIR__ . '/build');
}
add_action('init', 'meta_block_sidebar_meta_block_sidebar_block_init');

/**
 * Register the custom post meta fields.
 */
function meta_block_sidebar_register_post_meta_fields() {
	register_post_meta(
		'post',
		'team',
		array(
			'show_in_rest' => true,
			'single'       => true,
			'type'         => 'string',
		)
	);
	register_post_meta(
		'post',
		'joined',
		array(
			'show_in_rest' => true,
			'single'       => true,
			'type'         => 'string',
		)
	);
}
add_action('init', 'meta_block_sidebar_register_post_meta_fields');
