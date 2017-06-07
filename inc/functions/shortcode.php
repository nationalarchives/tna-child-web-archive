<?php

/* A to Z Shortcode */
function a_z_shortcode(){
	echo "<ul id='a-z-menu'>";
		foreach (range('A', 'Z') as $letter)
		{
			echo sprintf('<li><a href="#%s">%s</a></li>',strtolower($letter),$letter);
		}
		echo "<li><a href='#0-9'>0-9</a></li>";
	echo "</ul>";
	echo "<div class='clearfix'></div>";
}

//checks for Shortcode A-Z then runs the auto_id_h2 function
function check_az_shortcode(){
	if (function_exists('has_shortcode')) {
		global $post;
		if ( has_shortcode( $post->post_content, 'a-z' ) ) {
			add_filter( 'the_content', 'auto_id_h2' );
		}
	}
	return false;
}