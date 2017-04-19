<?php

function twd_theme_support(){

	$defaults_background = array(
	    'default-image' => '',
	    'default-preset' => 'default',
	    'default-position-x' => 'left',
	    'default-position-y' => 'top',
	    'default-size' => 'auto',
	    'default-repeat' => 'repeat',
	    'default-attachment' => 'scroll',
	    'default-color' => '',
	    'wp-head-callback' => '_custom_background_cb',
	    'admin-head-callback' => '',
	    'admin-preview-callback' => '',
	);

	$defaults_header = array(
	    'default-image' => '',
	    'random-default' => false,
	    'width' => 0,
	    'height' => 0,
	    'flex-height' => false,
	    'flex-width' => false,
	    'default-text-color' => '',
	    'header-text' => true,
	    'uploads' => true,
	    'wp-head-callback' => '',
	    'admin-head-callback' => '',
	    'admin-preview-callback' => '',
	    'video' => false,
	    'video-active-callback' => 'is_front_page',
	);

	$defaults_logo = array(
	    'height'      => 100,
	    'width'       => 400,
	    'flex-height' => true,
	    'flex-width'  => true,
	    'header-text' => array( 'site-title', 'site-description' ),
	);

	$defaults_html5 = array( 
		'comment-list', 
		'comment-form', 
		'search-form', 
		'gallery', 
		'caption'
	);

	$defaults_post_format = array( 
		'aside',
		'gallery',
		'link',
		'image',
		'quote',
		'status',
		'video',
		'audio',
		'chat'
	);

	$defaults_post_thumbnails = array( 
		'post', 
		'movie' 
	);

	add_theme_support( 'custom-background', $defaults_background );
	add_theme_support( 'custom-header', $defaults_header );
	add_theme_support( 'custom-logo', $defaults_logo );
	add_theme_support( 'html5', $defaults_html5 );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'post-formats', $defaults_post_format );
	add_theme_support( 'post-thumbnails', $defaults_post_thumbnails );
	add_theme_support( 'menus');
	


}