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
include(get_template_directory() . '/includes/front/activate.php');
include(get_template_directory() . '/includes/plugins/require_plugins.php');
include(get_template_directory() . '/includes/customizer/theme_options.php');
include(get_template_directory() . '/includes/widgets/register_sidebars.php');
include(get_template_directory() . '/includes/widgets/register_widgets.php');
include(get_template_directory() . '/includes/admin/menus.php');
include(get_template_directory() . '/includes/admin/init.php');

include(get_template_directory() . '/includes/admin/options_page.php');
include(get_template_directory() . '/process/save_options.php');

include(get_template_directory() . '/includes/shortcode/twd_shortcode_handler.php');


// action & filter hooks
add_action('after_setup_theme', 	'twd_theme_support');//includes/start/theme_support.php
add_action('wp_enqueue_scripts', 	'twd_enqueue_script');//includes/front/enqueue.php
add_action('wp_enqueue_scripts', 	'twd_add_fonts');//includes/front/add_fonts.php
add_action('after_switch_theme', 	'min_wordpress_version_for_twd_theme');//includes/front/activate.php
add_action('tgmpa_register', 		'twd_register_required_plugins');//includes/plugins/require_plugins.php
add_action('widgets_init', 			'twd_register_sidebars');//includes/widgets/register_sidebars.php
add_action('widgets_init', 			'twd_register_widgets');//includes/widgets/register_widgets.php
add_action('admin_menu',			'twd_admin_menus');//includes/admin/menus.php'
add_action('admin_init',			'twd_admin_init');//includes/admin/init.php'

add_action('after_setup_theme', function(){
	if ( ! is_admin() && ! current_user_can('manage_options') )// tolbar only for administrators
		show_admin_bar( false );
});


// shortcondes
add_shortcode( 'twd', 'twd_shortcode_handler' );//includes/shortcode/twd_shortcode_handler.php

?>