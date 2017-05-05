<?php
/*
Plugin Name: Redirect Plugin
*/

function my_custom_redirect () {
	global $post;
	if ( is_page() || is_object( $post ) ) {
		if ( $redirect = get_post_meta($post-&gt;ID, 'redirect', true ) ) {
                        wp_redirect( $redirect );
                        exit;
                }
        }
}
add_action( 'get_header', 'my_custom_redirect' );