<?php



function twd_save_about_us_options(){

	if( ! current_user_can( 'edit_theme_options' ) ){
		wp_die("You are not allowed to be on this page!");
	}

	check_admin_referer('twd_options_verify');

	$opts 								= get_option('twd_opts');
	$opts['about_us_header']			= sanitize_text_field($_POST['twd_header_ubout_us']);
	$opts['about_us_header_2']			= sanitize_text_field($_POST['twd_header_2_about_us']);
	$opts['about_us_text']				= sanitize_text_field($_POST['twd_text_about_us']);
	$opts['about_us_img']				= esc_url_raw($_POST['twd_image_about_us']);


	update_option( 'twd_opts', $opts);
	wp_redirect( admin_url( 'admin.php?page=twd_theme_options&status=1' ) );


}


function twd_save_new_hotel(){

	if( ! current_user_can( 'edit_theme_options' ) ){
		wp_die("You are not allowed to be on this page!");
	}

	check_admin_referer('twd_add_hotel_verify');
	require_once (  dirname( dirname( __FILE__ ) ) . '/includes/admin/hotels_data.php');

	wpdb_insert_hotel(		$_POST['input_hotel_name'], 
							$_POST['textarea_hotel_description'], 
							implode("| ", $_POST['input_love_fact'] ), 
							implode("| ", $_POST['image_slider']	), 
							implode("| ", $_POST['input_amenities']	), 
							implode("| ", $_POST['input_contact']	));

	wp_redirect( admin_url( 'admin.php?page=twd_hotels_options&status=1' ) );

}
