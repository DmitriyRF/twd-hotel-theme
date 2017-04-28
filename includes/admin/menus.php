<?php



function twd_admin_menus(){

	add_menu_page(

		'TWD theme options', //The _text_ to be displayed in the title tags of the page when the menu is selected
		'TWD options', //The _text_ to be used for the menu
		'edit_theme_options', //The _capability_ required for this menu to be displayed to the user.
		'twd_theme_options', // The _slug name_ to refer to this menu by (should be unique for this menu).
		'twd_theme_options_page' //The _function_ to be called to output the content for this page.

	);

	add_submenu_page(

		'twd_theme_options',
		
        'About us elements',
        'About us section',
        'manage_options',
        'twd_about_us_options',
        'twd_about_us_options_page'

	);


}