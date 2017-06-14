<?php
function auto_id_h2( $content ) {
		$content = preg_replace_callback( '/(\<h[2](.*?))\>(.*)(<\/h[2]>)/i', function ( $h2 ) {
			if ( ! stripos( $h2[0], 'id=' ) ) {
				$h2[0] = $h2[1] . $h2[2] . ' id="' . sanitize_title( $h2[3] ) . '" class="h2JumpLinks">' . $h2[3] . $h2[4];
			}
			return $h2[0];
		}, $content );
		return $content;
}