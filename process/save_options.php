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
