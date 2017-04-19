<?php

// set up
	load_theme_textdomain( 'twd' );
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'twd' ),
		'social' => __( 'Social Links Menu', 'twd' ),
	) );


// include
include(get_template_directory() . '/includes/start/theme_support.php');
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/front/add_fonts.php');
include(get_template_directory() . '/includes/plugins/require_plugins.php');
include(get_template_directory() . '/includes/customizer/theme-options.php');



// action & filter hooks
add_action('after_setup_theme', 	'twd_theme_support');//includes/start/theme_support.php
add_action('wp_enqueue_scripts', 	'twd_enqueue_script');//includes/front/enqueue.php
add_action('wp_enqueue_scripts', 	'twd_add_fonts');//includes/front/add_fonts.php
add_action('tgmpa_register', 		'twd_register_required_plugins' );//includes/plugins/require_plugins.php





// shortcondes



?>