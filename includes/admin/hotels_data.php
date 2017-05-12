<?php

	

function wpdb_insert_hotel(	$f_hotel_name 				= "TWD", 
							$f_hotel_description 		= "TWD", 
							$f_hotel_loves 				= "TWD", 
							$f_hotel_image_url 			= "TWD", 
							$f_hotel_amenities			= "TWD", 
							$f_hotel_contacts 			= "TWD") {
    
    global $wpdb;
    // подготавливаем данные   

    $table_name 				= $wpdb->get_blog_prefix() . 'twd_hotels';

    // вставляем строку в таблицу
    // true or false
    $insert_return = $wpdb->insert(
         $table_name, 
         array(
        		'hotel_name' 			=> $f_hotel_name,
        		'hotel_description' 	=> $f_hotel_description,
        		'hotel_loves'			=> $f_hotel_loves,
        		'hotel_image_url' 		=> $f_hotel_image_url,
        		'hotel_amenities' 		=> $f_hotel_amenities,
        		'hotel_contacts' 		=> $f_hotel_contacts
        		), 
        array(  '%s', '%s', '%s', '%s', '%s', '%s')
    );
}

function wpdb_update_hotel(	$f_hotel_id 				= "1",
							$f_hotel_name 				= "TWD", 
							$f_hotel_description 		= "TWD", 
							$f_hotel_loves 				= "TWD", 
							$f_hotel_image_url 			= "TWD", 
							$f_hotel_amenities			= "TWD", 
							$f_hotel_contacts 			= "TWD") {


	global $wpdb;
	$table_name 				= $wpdb->get_blog_prefix() . 'twd_hotels';
	//number or 0 or false
	$update_return = $wpdb->update( 
		$table_name ,
		array( 
				'hotel_name' 			=> $f_hotel_name, 
				'hotel_description' 	=> $f_hotel_description, 
				'hotel_loves' 			=> $f_hotel_loves, 
				'hotel_image_url' 		=> $f_hotel_image_url, 
				'hotel_amenities'		=> $f_hotel_amenities,
				'hotel_contacts' 		=> $f_hotel_contacts, 
				),
		array( 'hotel_id' => $f_hotel_id ),
		array( '%s', '%s', '%s', '%s', '%s', '%s'),
		array( '%d' )
	);
}

function wpdb_get_hotel($f_hotel_id){

	global $wpdb;

	$table_name 				= $wpdb->get_blog_prefix() . 'twd_hotels';

	return $wpdb->get_row("SELECT * FROM $table_name WHERE hotel_id = $f_hotel_id");
}

function wpdb_get_all_hotels( $limit_start = 0, $limit = 0 ){

	global $wpdb;

	$table_name 				= $wpdb->get_blog_prefix() . 'twd_hotels';

	if($limit == 0 ){
		$table_object 			= $wpdb->get_results("SELECT * FROM $table_name");
	}else{
		$table_object 			= $wpdb->get_results("SELECT * FROM $table_name LIMIT $limit_start, $limit");
	}

	return $table_object;
}



function wpdb_delete_hotel($f_hotel_id){
	global $wpdb;
	$table_name 				= $wpdb->get_blog_prefix() . 'twd_hotels';

	//true or false
	$delete_return = $wpdb->delete( 
		$table_name, 
		array( 
				'hotel_id' => $f_hotel_id 
				), 
		array( '%d' ) 
	);
}
