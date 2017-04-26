<?php

function twd_shortcode_handler( $atts, $content = 'twd text') {
	$atts = shortcode_atts( array(
		'var' => 'some vars', 
		), $array );
	return '<h1>' . do_shortcode( $content ) .'</h1>';
}


?>