<?php

function min_wordpress_version_for_twd_theme(){
	if (version_compare(get_bloginfo( 'version' ), '4.7', '<')){
		wp_die( __('You must have a minimum WordPress version of 4.7 to use this theme!', 'twd') );
	}
}