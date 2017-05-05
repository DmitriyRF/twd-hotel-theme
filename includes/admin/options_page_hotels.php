<?php


Function twd_hotels_options_page(){


	require_once('hotels_data.php');


				?>
			<div class="wrap">
				<h1><?php echo esc_html( $title ); ?></h1>

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


					$HotelListTable = new Twd_Hotels_List_Table();

				?>
			</div>
				<?php


	
}