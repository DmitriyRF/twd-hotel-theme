<?php

function twd_admin_init(){

	
	include( 'enqueue_admin.php');// include( get_template_directory() . '/includes/admin/enqueue.php');

	add_action('admin_enqueue_scripts', 'twd_admin_enqueue');//include( 'enqueue.php');

	add_action('admin_post_twd_save_options', 'twd_save_about_us_options');

}