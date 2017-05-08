<?php



function twd_admin_menus(){

	add_menu_page(

		'TWD theme options', //The _text_ to be displayed in the title tags of the page when the menu is selected
		'TWD', //The _text_ to be used for the menu
		'edit_theme_options', //The _capability_ required for this menu to be displayed to the user.
		'twd_theme_options', // The _slug name_ to refer to this menu by (should be unique for this menu).
		'twd_theme_options_page' //The _function_ to be called to output the content for this page.

	);

	add_submenu_page(

		'twd_theme_options',
		
        'About us elements',
        'About us',
        'manage_options',
        'twd_theme_options',
        'twd_theme_options_page'

	);	

	$hook = add_submenu_page(

		'twd_theme_options',
		
        'Hotels',
        'Hotels',
        'manage_options',
        'twd_hotels_options',
        'twd_hotels_options_page'

	);

	add_submenu_page(

		'twd_theme_options',
		
        'Add hotel',
        'Add hotel',
        'manage_options',
        'twd_add_hotel_options',
        'twd_add_hotel_options_page'

	);

	add_submenu_page(

		'twd_theme_options',
		
        'Contsct form 7',
        'Subscribe',
        'manage_options',
        'twd_subscribe_options',
        'twd_subscribe_options_page'

	);

	add_action( "load-$hook", 'add_options' );
 
	function add_options() {

		$option = 'per_page';
	  	$args = array(
	         'label' => 'Hotels',
	         'default' => 5,
	         'option' => 'hotels_per_page'
	         );

	  add_screen_option( $option, $args );  	
	}
}