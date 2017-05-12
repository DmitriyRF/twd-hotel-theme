<?php

function twd_admin_init(){

	
	include( 'enqueue_admin.php');// include( get_template_directory() . '/includes/admin/enqueue.php');

	add_action('admin_enqueue_scripts', 'twd_admin_enqueue');//include( 'enqueue.php');

	add_action('admin_post_twd_save_options', 'twd_save_about_us_options');

	add_action('admin_post_twd_add_hotel', 'twd_save_new_hotel');

	add_action('admin_post_twd_edit_hotel', 'twd_edit_current_hotel');

}



// function twd_disable_edit_hotel_page()
// {
// 	remove_submenu_page( 'twd_theme_options', 'twd_edit_hotel_options' );
// }