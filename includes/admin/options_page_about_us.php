<?php


function twd_theme_options_page(){


	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die(
			'<h1>' . __( 'Cheatin&#8217; uh?' ) . '</h1>' .
			'<p>' . __( 'Sorry, you are not allowed to edit theme options .' ) . '</p>',
			403
		);
	}
	$theme_options 										= get_option('twd_opts');
	$title 												= __( 'TWD Theme Settings' );
	
?>
	<div class="wrap">
		<h1><?php echo esc_html( $title ); ?></h1>
		<form method="post" action="admin-post.php">
			<input type="hidden" name="action" value="twd_save_options">
			<?php wp_nonce_field('twd_options_verify');?>

			<h2 class="title"> <?php _e('About us settings', 'twd');?> </h2>
			<p> <?php _e( 'This option allows you to customize the section for the main page about the company.
									You can customize the description of the company, as well as the picture for this section.'); ?> </p>
			<?php 

				if( isset( $_GET['status'] ) && $_GET['status'] == 1 ){
				?>
						<div id="message" class="updated notice notice-success is-dismissible">
							<p>Success!</p>
							<button type="button" class="notice-dismiss">
								<span class="screen-reader-text">Dismiss this notice.</span>
							</button>
						</div>
				<?php
				}

			?>

			<table class="form-table">
				<tr>
					<th scope="row">
						<label for="input_header_about_us" class="" ><?php _e('Header for description') ?></label>
					</th>
					<td>
						<input id="input_header_about_us" class="" size="50" value="<?php echo $theme_options['about_us_header'];?>" name="twd_header_ubout_us" type="text"></input>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="input_header_2_about_us" class="" ><?php _e('Description for header', 'twd');?></label>
					</th>
					<td>
						<input id="input_header_2_about_us" class="" size="50" value="<?php echo $theme_options['about_us_header_2'];?>" name="twd_header_2_about_us" type="text">
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="textarea_about_us_text" class="" ><?php _e('Description for company', 'twd');?></label>
					</th>
					<td>
						<textarea id="textarea_about_us_text" class="large-text code" name="twd_text_about_us" rows="10" cols="50"><?php echo stripslashes_deep($theme_options['about_us_text']);?></textarea>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="image_image_about_us" class="" ><?php _e('Image for half screen section', 'twd');?></label>
					</th>
					<td>
						<div class="input-group">
							<span class="input-group-btn">
								<button id="button_image_image_about_us" class="input-group-button" type="button"><?php _e('Upload image', 'twd'); ?></button>
							</span>
							<input id="image_image_about_us" class="input-group-text" size="50" value="<?php echo $theme_options['about_us_img'];?>" name="twd_image_about_us" type="text">
						</div>
					</td>
				</tr>

			</table>

			<?php do_settings_sections( 'twd_theme_options' ); ?>

			<?php submit_button(); ?>
		</form>
	</div>


<?php
}
?>