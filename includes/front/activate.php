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

function twd_add_theme_database(){

	global $wpdb;
	$table_name = $wpdb->get_blog_prefix() . 'twd_hotels';

	if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {

		$charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		$sql = "CREATE TABLE {$table_name} (
		    hotel_id int(11) unsigned NOT NULL auto_increment,
		    hotel_name varchar(255) NOT NULL default '',
		    hotel_description TEXT NOT NULL default '',
		    hotel_loves longtext NOT NULL default '',
		    hotel_image_url longtext NOT NULL default '',
		    hotel_amenities longtext NOT NULL default '',
		    hotel_contacts longtext NOT NULL default '',
		    PRIMARY KEY  (hotel_id)
		) {$charset_collate};";

		// Создать таблицу.
		dbDelta( $sql );

	}
}