<?php
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
 * Flipagram embed
 * Register embed handler.
 *
 * @since 1.0
 */
function flipagram_embed_handler( $matches, $attr, $url, $rawattr ) {

	$embed = sprintf(
		'<iframe src="https://flipagram.com/%1$s/embed" width="560" height="560" frameborder="0"></iframe>',
		esc_attr( $matches[1] )
	);

	return apply_filters( 'embed_flipagram', $embed, $matches, $attr, $url, $rawattr );

}

function flipagram_embed() {

	wp_embed_register_handler(
		'flipagram',
		'#https://flipagram.com/(.*)#i',
		'flipagram_embed_handler'
	);

}

add_action( 'init', 'flipagram_embed' );
