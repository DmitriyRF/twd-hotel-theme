<?php


function twd_admin_enqueue(){

	if( ! isset($_GET['page']) || 
		$_GET['page'] != 'twd_theme_options' &&
		$_GET['page'] != 'twd_subscribe_options' &&
		$_GET['page'] != 'twd_edit_hotel_options' &&
		$_GET['page'] != 'twd_add_hotel_options'){
		return;
	}

	wp_register_style( 'admin-style-css',      get_template_directory_uri() . '/assets/admin/admin-style.css', array(), false, 'all' );
	wp_enqueue_style( 'admin-style-css' );
	

	wp_register_script( 'option-theme-js',     get_template_directory_uri() . '/assets/admin/option-theme.js', array(), false, true );

	wp_enqueue_script('jquery');
	wp_enqueue_media();
	wp_enqueue_script('option-theme-js');

}