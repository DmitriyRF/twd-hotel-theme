<?php

class paste_shortcode_widget extends WP_Widget{          // The example widget class

	
 	/*
	 * Register widget with WordPress.
	 */
 	public function __construct() {

 		$widget_ops = array(

 			'classname'   => 'paste_shortcode_widget',

 			'description' => esc_html__( "TWD-Widget for pusting in front page instagram shortcode", 'twd' )

 			);

 		parent::__construct( 
 			'paste_shortcode_widget', 
 			esc_html__( '[TWD] Shortcode widget ', 'twd' ), 
 			$widget_ops
 			);

 	}      

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		// echo $args['before_widget'];
		?>
            <div class="container">
            <?php if ( ! empty( $instance['use_title_icon'] ) && $instance['use_title_icon'] =='on' ) { ?>
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="text-center">
                        <?php echo ( $instance['icon_code'] )?>
                        </div>
                        <h1 class="h1-section"><?php echo esc_attr( $instance['title'] )?></h1>
                    </div>
                </div>
            <?php }?>
                <div class="row">
                    <div class="col-xs-12"> 
                        <?php echo do_shortcode($instance['short_code']);?>
                    </div>
                </div> 
            </div>
		 <?php //echo $args['after_widget'];
	}


	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 *
	 * htmlentities 
	 * html_entity_decode 
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = array();
		$instance['use_title_icon'] = ( ! empty( $new_instance['use_title_icon'] ) ) ? strip_tags( $new_instance['use_title_icon'] ) : '';
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';		
		$instance['icon_code'] = ( ! empty( $new_instance['icon_code'] ) ) ? ($new_instance['icon_code']) : '';
		$instance['short_code'] = ( ! empty( $new_instance['short_code'] ) ) ? htmlentities($new_instance['short_code']) : '';
		return $instance;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {

		$defaults = array(
			'use_title_icon'	=> 'on',
			'title' 			=> '',
			'icon_code' 		=> '',
			'short_code'  		=> ''
			);


		// Merge the user-selected arguments with the defaults.

		$instance = wp_parse_args( (array) $instance, $defaults );

		// Extract the array to allow easy use of variables.

		extract( $instance );

		// Loads the widget form.
		// 
		// 
		?>	
		<h4><?php echo __( 'Title controls', 'twd' ) ?></h4>
		<hr/>

		<p class="use_title_icon-controls">
			<label for="<?php echo esc_attr( $this->get_field_id( 'use_title_icon' ) ); ?>">
				<?php _e( 'Use tittle', 'twd' ); ?>
			</label>
			<input 
				type="checkbox"
				value="on" 
				name="<?php echo esc_attr( $this->get_field_name( 'use_title_icon' ) ); ?>"
				id="<?php echo esc_attr( $this->get_field_id( 'use_title_icon' ) ); ?>"
				class="onoffswitch-checkbox"
				<?php checked( $instance['use_title_icon'], 'on' ); ?>>
		</p>

		<p class="title-controls">
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
				<?php esc_html_e( 'Title: ', 'twd' ) ?>
			</label>
			<input 
				type="text" 
				value="<?php echo esc_attr( $instance['title'] ); ?>"
				name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
				id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
				class="widefat"/>
		</p>

		<p class="icon_code-controls">
			<label for="<?php echo esc_attr( $this->get_field_id( 'icon_code' ) ); ?>">
				<?php esc_html_e( 'Icon html code with markup: ', 'twd' ) ?>
			</label>
			<input 
				type="text" 
				value="<?php echo esc_attr( $instance['icon_code'] ); ?>"
				name="<?php echo esc_attr( $this->get_field_name( 'icon_code' ) ); ?>"
				id="<?php echo esc_attr( $this->get_field_id( 'icon_code' ) ); ?>"
				class="widefat"/>
		</p>

		<p class="short_code-controls">
			<label for="<?php echo esc_attr( $this->get_field_id( 'short_code' ) ); ?>">
				<?php esc_html_e( 'Short code will use: ', 'twd' ) ?>
			</label>
			<input 
				type="text" 
				value="<?php echo esc_attr( $instance['short_code'] ); ?>"
				name="<?php echo esc_attr( $this->get_field_name( 'short_code' ) ); ?>"
				id="<?php echo esc_attr( $this->get_field_id( 'short_code' ) ); ?>"
				class="widefat"/>
		</p>

	<?php 
}

}//class Paste_instagram_widget









