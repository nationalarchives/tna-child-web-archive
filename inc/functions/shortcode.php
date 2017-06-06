<?php

/* A to Z Shortcode */
function a_z_shortcode(){
	echo '<ul id="a-z-menu">';
		foreach (range('A', 'Z') as $letter)
		{
			echo "<li>$letter</li>";
		}
		echo "<li>0-9</li>";
	echo "</ul>";
	echo "<div class='clearfix'></div>";
}