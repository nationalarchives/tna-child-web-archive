<?php

/* A to Z Shortcode */
function a_z_shortcode(){
	echo '<ul id="a-z-menu">';
		foreach (range('A', 'Z') as $letter)
		{
			echo "<li><a>$letter</a></li>";
		}
		echo "<li><a>0-9</a></li>";
	echo "</ul>";
	echo "<div class='clearfix'></div>";
}