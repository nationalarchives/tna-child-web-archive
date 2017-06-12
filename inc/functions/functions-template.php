<?php
function auto_id_h2( $content ) {
	if ( function_exists( 'preg_replace_callback' ) ) {
		$content = preg_replace_callback( '/(\<h[2](.*?))\>(.*)(<\/h[2]>)/i', function ( $matches ) {
			if ( ! stripos( $matches[0], 'id=' ) ) :
				$matches[0] = $matches[1] . $matches[2] . ' id="' . sanitize_title( $matches[3] ) . '" class="h2JumpLinks">' . $matches[3] . $matches[4];
			endif;

			return $matches[0];
		}, $content );

		return $content;
	}
	return false;
}

