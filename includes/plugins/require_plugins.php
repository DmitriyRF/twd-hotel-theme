<?php

require_once get_template_directory() . '/includes/tgmpa/class-tgm-plugin-activation.php';

function twd_register_required_plugins() {
	$plugins = array(
		array(
			'name'      => 'Kirki Toolkit',
			'slug'      => 'kirki',
			'required'  => false,
		),
		array(
			'name'      => 'Flamingo',
			'slug'      => 'flamingo',
			'required'  => false,
		),
		array(
			'name'      => 'Contact Form 7 ',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
		array(
			'name'      => 'Instagram Feed ',
			'slug'      => 'instagram-feed',
			'required'  => false,
		)
	);
	$config = array(
		'id'           => 'twd',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);
	tgmpa( $plugins, $config );
}
