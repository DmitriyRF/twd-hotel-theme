<?php


Function twd_add_hotel_options_page(){

	
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die(
			'<h1>' . __( 'Cheatin&#8217; uh?' ) . '</h1>' .
			'<p>' . __( 'Sorry, you are not allowed to edit theme options .' ) . '</p>',
			403
		);
	}
	$theme_options 										= get_option('twd_opts');
	$title 												= __( 'Add New Hotel' );

	?>

		<div class="wrap">
			<h1><?php echo esc_html( $title ); ?></h1>
			<form method="post" action="admin-post.php">
				<input type="hidden" name="action" value="twd_add_hotel">
				<?php wp_nonce_field('twd_add_hotel_verify');?>

				<h2 class="title"> <?php _e('Create a brand new hotel and add them to this site.', 'twd');?> </h2>

				<table class="form-table">
					<tr>
						<th scope="row">
							<label for="input_hotel_name"  ><?php _e('Hotel Name') ?></label>
						</th>
						<td>
							<input id="input_hotel_name"  size="50" name="input_hotel_name" type="text"></input>
						</td>					

					</tr>
					<tr>
						<th scope="row">
							<label for="textarea_hotel_description"  ><?php _e('Description for hotel', 'twd');?></label>
						</th>
						<td>
							<textarea id="textarea_hotel_description" class="large-text code" name="textarea_hotel_description" rows="10" cols="50"></textarea>
						</td>
					</tr>					
					<tr>
						<th scope="row">
							<label  ><?php _e('"What to love?" hotel section', 'twd');?></label>
						</th>
						<td>
							<table class="form-table table_love_fact">
								<tr>
									<th>
										<label for="input_love_fact_1"  ><?php _e('Fact 1', 'twd');?></label>
									</th>
									<td>
										<input id="input_love_fact_1"  size="50" name="input_love_fact[]" type="text">
									</td>
								</tr>
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
								<tr>
									<td>
										<div class="input-group">
											<span class="input-group-btn">
												<button class="button_image_about_us input-group-button" type="button"><?php _e('Upload image', 'twd'); ?></button>
											</span>
											<input id="image_slider_1" class="input-group-text" size="50" name="image_slider[]" type="text">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="input-group">
											<span class="input-group-btn">
												<button class="button_image_about_us input-group-button" type="button"><?php _e('Upload image', 'twd'); ?></button>
											</span>
											<input id="image_slider_2" class="input-group-text" size="50" name="image_slider[]" type="text">
										</div>
									</td>
								</tr>
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
								<tr>
									<th>
										<label for="input_amenities_1"  ><?php _e('Amenities', 'twd');?></label>
									</th>
									<td>
										<input id="input_amenities_1"  size="50" name="input_amenities[]" type="text">
									</td>
								</tr>
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
								<tr>
									<th>
										<label for="input_contact_country"  ><?php _e('Country', 'twd');?></label>
									</th>
									<td>
										<input id="input_contact_country"  size="50" name="input_contact[]" type="text">
									</td>
								</tr>
								<tr>
									<th>
										<label for="input_contact_city"  ><?php _e('City', 'twd');?></label>
									</th>
									<td>
										<input id="input_contact_city"  size="50" name="input_contact[]" type="text">
									</td>
								</tr>
								<tr>
									<th>
										<label for="input_contact_phone"  ><?php _e('Phone', 'twd');?></label>
									</th>
									<td>
										<input id="input_contact_phone"  size="50" name="input_contact[]" type="text">
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