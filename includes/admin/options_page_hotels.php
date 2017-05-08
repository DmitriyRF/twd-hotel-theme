<?php


Function twd_hotels_options_page(){

	include(get_template_directory() . '/includes/classes/class-twd-hotels-table.php' );
	require_once (  dirname( dirname( __FILE__ ) ) . '/admin/hotels_data.php');
	$title 												= __( 'Hotels' );
	$new_hotel_title									= __( 'Add New' );

			if ( $_GET['page'] == 'twd_hotels_options' && isset( $_GET['action'] ) && $_GET['action'] == 'delete' ) {

					wpdb_delete_hotel( $_GET['hotel'] );
			}
				?>

			<div class="wrap">
				<h1><?php echo esc_html( $title ); ?>
					<a href="<?php echo admin_url( 'admin.php?page=twd_add_hotel_options' ); ?>" class="page-title-action"><?php echo esc_html( $new_hotel_title ); ?></a>
				</h1>

				<?php 

					if( isset( $_GET['status'] ) && $_GET['status'] == 1 ){
					?>
							<div id="message" class="updated notice notice-success is-dismissible">
								<p>New holes was adding successful!</p>
								<button type="button" class="notice-dismiss">
									<span class="screen-reader-text">Dismiss this notice.</span>
								</button>
							</div>
					<?php
					}
					  echo '<style type="text/css">';
					  echo '.wp-list-table .column-hotel_id { width: 7%; }';
					  echo '.wp-list-table .column-hotel_name { width: 13%; }';
					  echo '.wp-list-table .column-hotel_description { width: 60%; }';
					  echo '</style>';


					$HotelListTable = new Twd_Hotels_List_Table();	
					$HotelListTable->prepare_items();
  					$HotelListTable->display();


				?>
			</div>
				<?php


	
}