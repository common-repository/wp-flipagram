<?php
/*
Plugin Name: Flipagram
Plugin URI:  https://wordpress.org/plugins/wp-flipagram/
Description: Embed visual stories from flipagram.com into your WordPress site.
Version:     1.2
Author:      Rami Yushuvaev
Author URI:  https://GenerateWP.com/
Text Domain: wp-flipagram
*/



/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Include plugin files
 */
include_once ( plugin_dir_path( __FILE__ ) . 'includes/i18n.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/embed.php' );
