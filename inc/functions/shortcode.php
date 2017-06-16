<?php

/* A to Z Shortcode */
function a_z_shortcode() {
    $template = '<ul id="a-z-menu">%s</ul><div class="clearfix"></div>';
    $list_items = '';
	foreach ( range( 'A', 'Z' ) as $letter ) {
		$list_items .= sprintf( "<li><a href='#%s'>%s</a></li>", strtolower( $letter ), $letter );
	}
	return sprintf($template, $list_items);
}

//Enqueue js for shortcode when used on a page
function tna_child_scripts() {
	if( function_exists('wp_register_script') ){
		wp_register_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.min.js', array(),
			EDD_VERSION, true );
		wp_enqueue_script( 'scripts' );
	}
}


//checks for Shortcode A-Z then runs the auto_id_h2 function
function check_az_shortcode() {
	if ( function_exists( 'has_shortcode' ) ) {
		global $post;
		if ( has_shortcode( $post->post_content, 'a-z' ) ) {
			add_filter( 'the_content', 'auto_id_h2' );
			add_action( 'wp_enqueue_scripts', 'tna_child_scripts' );
		}
	}
	return false;
}



'<ul id="a-z-menu">%s</ul><div class="clearfix"></div>';