<?php


Function twd_edit_hotel_options_page(){

	
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die(
			'<h1>' . __( 'Cheatin&#8217; uh?' ) . '</h1>' .
			'<p>' . __( 'Sorry, you are not allowed to edit theme options .' ) . '</p>',
			403
			);
	}
	$theme_options 										= get_option('twd_opts');
	$title 												= __( 'Edit Hotel' );

	require_once (  dirname( dirname( __FILE__ ) ) . '/admin/hotels_data.php');



	if ($_GET['page'] == 'twd_edit_hotel_options' && isset( $_GET['action'] ) && $_GET['action'] == 'edit' ) {

		$hotel 		= wpdb_get_hotel( preg_replace( '![^0-9]+!', '', $_GET['hotel'] ) );

		?>

		<div class="wrap">
			<h1><?php echo esc_html( $title ); ?></h1>
			<form method="post" action="admin-post.php">
				<input type="hidden" name="action" value="twd_edit_hotel">
				<?php wp_nonce_field('twd_edit_hotel_verify');?>

				<h2 class="title"> <?php _e('Edit a hotel and update on this site.', 'twd');?> </h2>

				<table class="form-table">
					<tr>
						<th scope="row">
							<label for="input_hotel_id"  ><?php _e('Hotel id') ?></label>
						</th>
						<td>
							<input id="input_hotel_id" readonly size="50" name="input_hotel_id" type="text" value="<?php echo( preg_replace( '![^0-9]+!', '', $_GET['hotel'] ) ); ?>"></input>
						</td>					

					</tr>
					<tr>
						<th scope="row">
							<label for="input_hotel_name"  ><?php _e('Hotel Name') ?></label>
						</th>
						<td>
							<input id="input_hotel_name"  size="50" name="input_hotel_name" type="text" value="<?php echo _e($hotel->hotel_name,'twd'); ?>"></input>
						</td>					

					</tr>
					<tr>
						<th scope="row">
							<label for="textarea_hotel_description"  ><?php _e('Description for hotel', 'twd');?></label>
						</th>
						<td>
							<textarea id="textarea_hotel_description" class="large-text code" name="textarea_hotel_description" rows="10" cols="50"><?php echo _e($hotel->hotel_description,'twd'); ?></textarea>
						</td>
					</tr>					
					<tr>
						<th scope="row">
							<label  ><?php _e('"What to love?" hotel section', 'twd');?></label>
						</th>
						<td>
							<table class="form-table table_love_fact">
								<?php 
								$any_facts =  explode('| ', $hotel->hotel_loves);
								$f_num = 0;
								foreach ($any_facts as $fact) {
									if( $fact != '' ){
										$f_num++;
										?>
										<tr>
											<th>
												<label for="input_love_fact_<?php echo $f_num+1; ?>"  ><?php _e('Fact <?php echo $f_num+1; ?>', 'twd');?></label>
											</th>
											<td>
												<input id="input_love_fact_<?php echo $f_num+1; ?>"  size="50" name="input_love_fact[]" type="text" value="<?php echo $fact; ?>">
											</td>
										</tr>
										<?php
									}
								}
								?>
							</table>
							<input type="button" id="add_love_fact" value="<?php _e('Add fact', 'twd');?>" />
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label  ><?php _e('Images for slider', 'twd');?></label>
						</th>
						<td>
							<table class="form-table table_add_image">
	                            <?php
	                                $any_images =  explode('| ', $hotel->hotel_image_url);
	                            ?>
								<?php 
								$f_num = 0;
								foreach ($any_images as $image) {
									if( $image != ''){
										$f_num++;
										?>                                    
										<tr>
											<td>
												<div class="input-group">
													<span class="input-group-btn">
														<button class="button_image_about_us input-group-button" type="button"><?php _e('Upload image', 'twd'); ?></button>
													</span>
													<input id="image_slider_<?php echo $f_num; ?>" class="input-group-text" size="50" name="image_slider[]" type="text" value="<?php echo $image; ?>">
												</div>
											</td>
										</tr>

										<?php 
									}
								}
								?> 
							</table>
							<input type="button" id="add_image" value="<?php _e('Add image', 'twd');?>" />
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label  ><?php _e('Amenities hotel section', 'twd');?></label>
						</th>
						<td>
							<table class="form-table table_amenities">
								    <?php 
                                        $any_amenities =  explode('| ', $hotel->hotel_amenities);
                                        $f_num = 0;
                                        foreach ($any_amenities as $amenite) {
                                            if( $amenite != '' ){
                                                $f_num++;
                                    ?>
                                            <tr>
                                            	<th>
                                            		<label for="input_amenities_<?php echo $f_num; ?>"  ><?php _e('Amenities', 'twd');?></label>
                                            	</th>
                                            	<td>
                                            		<input id="input_amenities_<?php echo $f_num; ?>"  size="50" name="input_amenities[]" type="text" value="<?php echo $amenite; ?>">
                                            	</td>
                                            </tr>
                                     <?php
                                            }
                                        }
                                     ?>
							</table>
							<input type="button" id="add_amenity" value="<?php _e('Add amenity', 'twd');?>" />
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label  ><?php _e('Contacts', 'twd');?></label>
						</th>
						<td>
							<table class="form-table">
							<?php  $any_contacts =  explode('| ', $hotel->hotel_contacts);?>
								<tr>
									<th>
										<label for="input_contact_country"  ><?php _e('Country', 'twd');?></label>
									</th>
									<td>
										<input id="input_contact_country"  size="50" name="input_contact[]" type="text" value="<?php echo $any_contacts[0]; ?>">
									</td>
								</tr>
								<tr>
									<th>
										<label for="input_contact_city"  ><?php _e('City', 'twd');?></label>
									</th>
									<td>
										<input id="input_contact_city"  size="50" name="input_contact[]" type="text" value="<?php echo $any_contacts[1]; ?>">
									</td>
								</tr>
								<tr>
									<th>
										<label for="input_contact_phone"  ><?php _e('Phone', 'twd');?></label>
									</th>
									<td>
										<input id="input_contact_phone"  size="50" name="input_contact[]" type="text" value="<?php echo $any_contacts[2]; ?>">
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>

				<?php do_settings_sections( 'twd_theme_options' ); ?>

				<?php submit_button(); ?>
			</form>
		</div>

		<?php

	}
}