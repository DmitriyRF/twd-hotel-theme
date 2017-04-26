<?php


 
function twd_register_widgets() {// function to register twd widget

	$widgets = array(

		'shortcode'

	);

	foreach ( $widgets as $widget ) {

		require_once get_template_directory() . '/includes/widgets/widget-' . $widget . '.php';

	}

	 register_widget( 'paste_shortcode_widget' );

}             
