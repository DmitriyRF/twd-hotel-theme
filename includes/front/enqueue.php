<?php

function twd_function_enqueue_script(){

	    if( is_front_page() && !is_home()) {

        //wp_enqueue_style( $handle, $src, $deps, $ver, $media );
        wp_enqueue_style( 'bootstrap-css',      TWD_ASSETS . '/bootstrap/css/bootstrap.css', array(), false, 'all' );
        wp_enqueue_style( 'font-awesome-css',   TWD_ASSETS . '/font-awesome/css/font-awesome.min.css', array(), false, 'all' );
        wp_enqueue_style( 'twd-style-css',      TWD_ASSETS . '/twd/twd-style.css', array(), false, 'all' );

		//wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
        wp_enqueue_script( 'bootstrap-js',      TWD_ASSETS . '/bootstrap/js/bootstrap.js', array(), null, true );
        wp_enqueue_script( 'parallax-js',       TWD_ASSETS . '/parallax/parallax.js', array(), null, true );
        wp_enqueue_script( 'twd-script-js',     TWD_ASSETS . '/twd/twd-script.js', array(), null, true );

		// <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        // wp_enqueue_style( 'twd-google-fonts', twd_fonts_url(), array(), false ,'all');
    
    }
	
}