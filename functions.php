<?php

require_once 'src/setThemeGlobals.php';
require_once 'src/identifyEnvironmentFromIP.php';

// For Breadcrumbs and URLs
$environment = identifyEnvironmentFromIP( $_SERVER['SERVER_ADDR'], $_SERVER['REMOTE_ADDR'] );
setThemeGlobals( $environment );

// Dequeue parent styles for re-enqueuing in the correct order
function dequeue_parent_style() {
	wp_dequeue_style( 'tna-styles' );
	wp_deregister_style( 'tna-styles' );
}

add_action( 'wp_enqueue_scripts', 'dequeue_parent_style', 9999 );
add_action( 'wp_head', 'dequeue_parent_style', 9999 );

// Enqueue styles in correct order
function tna_child_styles() {
	wp_register_style( 'tna-parent-styles', get_template_directory_uri() . '/css/base-sass.css.min', array(),
		EDD_VERSION, 'all' );
	wp_register_style( 'tna-child-styles', get_stylesheet_directory_uri() . '/css/main.min.css', array(), '0.1', 'all' );
	wp_enqueue_style( 'tna-parent-styles' );
	wp_enqueue_style( 'tna-child-styles' );
}

add_action( 'wp_enqueue_scripts', 'tna_child_styles' );


function tna_child_scripts() {
	wp_register_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array(),
		EDD_VERSION, true );
	wp_enqueue_script( 'scripts' );
}
add_action( 'wp_enqueue_scripts', 'tna_child_scripts' );


//Include functions
include 'inc/functions/functions-template.php';
include 'inc/functions/shortcode.php';

//Add shortcode
add_shortcode( 'a-z', 'a_z_shortcode' );

//Add actions
add_action( 'wp', 'check_az_shortcode' );

//Add filter
add_filter( 'the_content', 'auto_id_h2' );