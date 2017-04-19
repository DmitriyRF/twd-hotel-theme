<?php

function twd_enqueue_script(){        


        wp_register_style( 'bootstrap-css',      get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css', array(), false, 'all' );
        wp_register_style( 'font-awesome-css',   get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css', array(), false, 'all' );
        wp_register_style( 'twd-style-css',      get_template_directory_uri() . '/assets/twd/twd-style.css', array(), false, 'all' );

		wp_register_script( 'jquery-easing', 	'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js');
		wp_register_script( 'bootstrap-js',     get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.js', array(), null, true );
        wp_register_script( 'parallax-js',      get_template_directory_uri() . '/assets/parallax/parallax.js', array(), null, true );
        wp_register_script( 'twd-script-js',    get_template_directory_uri() . '/assets/twd/twd-script.js', array(), null, true );

	if( is_front_page() && !is_home()) {

		wp_enqueue_style( 'bootstrap-css' );
		wp_enqueue_style( 'font-awesome-css' );
		wp_enqueue_style( 'twd-style-css' );
		
		wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-easing');
        wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('parallax-js');
        wp_enqueue_script('twd-script-js');
    }
	
}