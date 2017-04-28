<?php

function min_wordpress_version_for_twd_theme(){
	if ( version_compare(get_bloginfo( 'version' ), '4.7', '<' )){
		wp_die( __( 'You must have a minimum WordPress version of 4.7 to use this theme!', 'twd' ) );
	}




	$theme_options					=	get_option( 'twd_theme_options' );

	if( ! $theme_options ){
		$opts 						=	array(
			'about_us_header'		=>	'',
			'about_us_header_2'		=>	'',
			'about_us_text'			=>	'',
			'about_us_img'			=>	''
		);

		add_option('twd_theme_options', $opts);

	}

}