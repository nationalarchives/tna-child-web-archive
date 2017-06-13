<?php

/* A to Z Shortcode */
function a_z_shortcode() {
	$render_string = '';
	$render_string .= '<ul id="a-z-menu">';
	foreach ( range( 'A', 'Z' ) as $letter ) {
		$render_string .= sprintf( "<li><a href='#%s'>%s</a></li>", strtolower( $letter ), $letter );
	}
	$render_string .= '<li><a href="#0-9">0-9</a></li>';
	$render_string .= '</ul>';
	$render_string .= '<div class="clearfix"></div>';

	return $render_string;
}

//checks for Shortcode A-Z then runs the auto_id_h2 function
function check_az_shortcode() {
	if ( function_exists( 'has_shortcode' ) ) {
		global $post;
		if ( has_shortcode( $post->post_content, 'a-z' ) ) {
			add_filter( 'the_content', 'auto_id_h2' );
		}
	}
	return false;
}