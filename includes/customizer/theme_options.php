<?php
//DEFAULTS
$theme = get_template_directory_uri();
if (class_exists('Kirki')) {
	Kirki::add_config( 'twd_config', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod',
	) );
	

		Kirki::add_panel( 'header_id', array(
		  'priority'    => 1,
		  'title'       => esc_html__( 'TWD', 'twd' ),
		  'description' => __( 'Settings for front page', 'twd' ),
		));
	//----------------------------------------------------------------------------------
			Kirki::add_section( 'header_settings', array(
				'title'          => __( 'Header', 'twd' ),
				'description'    => __( 'Header settings', 'twd' ),
				'panel'          => 'header_id', 
				'priority'       => 1,
				'capability'     => 'edit_theme_options',
			) );

				Kirki::add_field( 'twd_config ', array(
					'type'        => 'typography',
					'settings'    => 'logo_settings',
					'label'       => esc_attr__( 'Logo Typography', 'twd' ),
					'section'     => 'header_settings',
					'default'     => array(
						'font-family'    => 'Gentium Book Basic", Georgia, seri',
						'variant'        => 'regular',
						'font-size'      => '60px',
						'line-height'    => '50px',
						'letter-spacing' => '2px',
						'font-style'	 =>	'normal',
						'subsets'        => array( 'latin-ext' ),
						'color'          => false,
						'text-transform' => 'none',
						'text-align'     => 'center'
					),
					'priority'    => 3,
					'output'      => array(
						array(
							'element' => '#masthead h2.h2-logo',
						),
					),
				) );
				Kirki::add_field( 'twd_config', array(
					'type'     => 'text',
					'settings' => 'senter_text_name',
					'label'    => __( 'Company name', 'twd' ),
					'section'  => 'header_settings',
					'default'  => esc_attr__( 'DIGITAL MARKETING AGENCY FOR HOTELS', 'twd' ),
					'priority' => 10,
				) );
				Kirki::add_field( 'twd_config', array(
					'type'     => 'text',
					'settings' => 'senter_text_description',
					'label'    => __( 'Company description', 'twd' ),
					'section'  => 'header_settings',
					'default'  => esc_attr__( 'Company description', 'twd' ),
					'priority' => 11,
				) );
	//----------------------------------------------------------------------------------
			Kirki::add_section( 'section_settings', array(
				'title'          => __( 'Sections', 'twd' ),
				'description'    => __( 'Header and color section', 'twd' ),
				'panel'          => 'header_id', 
				'priority'       => 1,
				'capability'     => 'edit_theme_options',
			) );			
				Kirki::add_field( 'twd_config', array(
				    'type'        => 'multicolor',
				    'settings'    => 'about_us_colors',
				    'label'       => esc_attr__( 'About us colors', 'twd' ),
				    'section'     => 'section_settings',
				    'priority'    => 12,
				    'choices'     => array(
				        'f_text'    	=> esc_attr__( 'Text', 'twd' ),
				        'f_background'  => esc_attr__( 'Fond text', 'twd' ),
				        'f_section'  	=> esc_attr__( 'Fond section', 'twd' ),
				    ),
				    'default'     => array(
				        'f_text'    => '#333333',
				        'f_background'   => '#ffffff',
				        'f_section'  => '#efefef',
				    ),
				) );
				Kirki::add_field( 'twd_config', array(
					'type'     => 'text',
					'settings' => 'hotels_header',
					'label'    => __( 'Hotel section header', 'twd' ),
					'section'  => 'section_settings',
					'default'  => esc_attr__( 'Two', 'twd' ),
					'priority' => 13,
				) );
				Kirki::add_field( 'twd_config', array(
					'type'     => 'text',
					'settings' => 'hotels_header_description',
					'label'    => __( 'Hotel section description', 'twd' ),
					'section'  => 'section_settings',
					'default'  => esc_attr__( 'Lorem', 'twd' ),
					'priority' => 13,
				) );

				Kirki::add_field( 'twd_config', array(
				    'type'        => 'multicolor',
				    'settings'    => 'hotels_colors',
				    'label'       => esc_attr__( 'Hotel colors', 'twd' ),
				    'section'     => 'section_settings',
				    'priority'    => 14,
				    'choices'     => array(
				        'h_text'    	=> esc_attr__( 'Text', 'twd' ),
				        'h_background'  => esc_attr__( 'Bgrndtxt', 'twd' ),
				        'h_background_in'  	=> esc_attr__( 'Bgrndtxtin', 'twd' ),
				        'h_section'  	=> esc_attr__( 'Bgrndsctn', 'twd' ),
				    ),
				    'default'     => array(
				        'h_text'    => '#333333',
				        'h_background'   => '#efefef',
				        'h_background_in'   => '#02bbbd',
				        'h_section'  => '#ffffff',
				    ),
				) );
				Kirki::add_field( 'twd_config', array(
					'type'     => 'text',
					'settings' => 'our_service_header',
					'label'    => __( 'Service section header', 'twd' ),
					'section'  => 'section_settings',
					'default'  => esc_attr__( 'Three', 'twd' ),
					'priority' => 15,
				) );
				Kirki::add_field( 'twd_config', array(
					'type'     => 'text',
					'settings' => 'our_service_description',
					'label'    => __( 'Service section header', 'twd' ),
					'section'  => 'section_settings',
					'default'  => esc_attr__( 'Three description', 'twd' ),
					'priority' => 15,
				) );
				Kirki::add_field( 'twd_config', array(
					'type'        => 'image',
					'settings'    => 'our_service_image',
					'label'       => __( 'Service background image', 'twd' ),
					'description' => __( 'Choose service background image', 'twd' ),
					'help'        => __( 'This is some extra help text.', 'twd' ),
					'section'     => 'section_settings',
					'default'     => '',
					'priority'    => 16,
				) );
				Kirki::add_field( 'twd_config', array(
					'type'     => 'text',
					'settings' => 'subscribe_header',
					'label'    => __( 'Subscribe section header', 'twd' ),
					'section'  => 'section_settings',
					'default'  => esc_attr__( 'Four', 'twd' ),
					'priority' => 17,
				) );

				Kirki::add_field( 'twd_config', array(
					'type'     => 'text',
					'settings' => 'subscribe_description',
					'label'    => __( 'Subscribe section description', 'twd' ),
					'section'  => 'section_settings',
					'default'  => esc_attr__( 'Four', 'twd' ),
					'priority' => 17,
				) );
				Kirki::add_field( 'twd_config', array(
				    'type'        => 'multicolor',
				    'settings'    => 'subscribe_colors',
				    'label'       => esc_attr__( 'Subscribe colors', 'twd' ),
				    'section'     => 'section_settings',
				    'priority'    => 18,
				    'choices'     => array(
				        's_text'    	=> esc_attr__( 'Text', 'twd' ),
				        's_background'  => esc_attr__( 'Bgrndsctn', 'twd' ),
				    ),
				    'default'     => array(
				        's_text'    => '#333333',
				        's_background'   => '#ffffff',
				    ),
				) );
				Kirki::add_field( 'twd_config', array(
					'type'     => 'text',
					'settings' => 'footer_header',
					'label'    => __( 'Footer section header', 'twd' ),
					'section'  => 'section_settings',
					'default'  => esc_attr__( '', 'twd' ),
					'priority' => 19,
				) );
	//----------------------------------------------------------------------------------
			Kirki::add_section( 'services_settings', array(
				'title'          => __( 'OUR SERVICES', 'twd' ),
				'description'    => __( 'Header and description of services', 'twd' ),
				'panel'          => 'header_id', 
				'priority'       => 1,
				'capability'     => 'edit_theme_options',
			) );				
				Kirki::add_field( 'twd_config', array(
					'type'     => 'text',
					'settings' => 'services_name_1',
					'label'    => __( 'Servise one', 'twd' ),
					'section'  => 'services_settings',
					'default'  => esc_attr__( 'CONTENT CREATION', 'twd' ),
					'priority' => 11,
				) );
				Kirki::add_field( 'twd_config', array(
					'type'        => 'image',
					'settings'    => 'services_image_1',
					'label'       => __( 'Service image', 'twd' ),
					'description' => __( 'Choose service one image 256px', 'twd' ),
					'help'        => __( 'This is some extra help text.', 'twd' ),
					'section'     => 'services_settings',
					'default'     => '',
					'priority'    => 12,
				) );
				Kirki::add_field( 'twd_config', array(
					'type'        => 'repeater',
					'label'       => esc_attr__( 'Items service one', 'twd' ),
					'section'     => 'services_settings',
					'priority'    => 12,
					'row_label' => array(
						'type'  => 'field',
						'value' => esc_attr__('New item', 'twd' ),
						'field' => 'link_text',
					),
					'settings'    => 'services_text_li_1',
					'default'     => array(
						array(
							'link_text' => esc_attr__( 'Item service one', 'twd' ),
						),
					),
					'fields' => array(
						'link_text' => array(
							'type'        => 'text',
							'label'       => esc_attr__( 'Service item', 'twd' ),
							'default'     => '',
						),
					)
				) );
				Kirki::add_field( 'twd_config', array(
					'type'     => 'text',
					'settings' => 'services_name_2',
					'label'    => __( 'Servise two', 'twd' ),
					'section'  => 'services_settings',
					'default'  => esc_attr__( 'DATA AND ANALYTICS', 'twd' ),
					'priority' => 13,
				) );
				Kirki::add_field( 'twd_config', array(
					'type'        => 'image',
					'settings'    => 'services_image_2',
					'label'       => __( 'Service image', 'twd' ),
					'description' => __( 'Choose service two image 256px', 'twd' ),
					'help'        => __( 'This is some extra help text.', 'twd' ),
					'section'     => 'services_settings',
					'default'     => '',
					'priority'    => 14,
				) );
				Kirki::add_field( 'twd_config', array(
					'type'        => 'repeater',
					'label'       => esc_attr__( 'Items service two', 'twd' ),
					'section'     => 'services_settings',
					'priority'    => 14,
					'row_label' => array(
						'type'  => 'field',
						'value' => esc_attr__('New item', 'twd' ),
						'field' => 'link_text',
					),
					'settings'    => 'services_text_li_2',
					'default'     => array(
						array(
							'link_text' => esc_attr__( 'Item service two', 'twd' ),
						),
					),
					'fields' => array(
						'link_text' => array(
							'type'        => 'text',
							'label'       => esc_attr__( 'Service item', 'twd' ),
							'default'     => '',
						),
					)
				) );
				Kirki::add_field( 'twd_config', array(
					'type'     => 'text',
					'settings' => 'services_name_3',
					'label'    => __( 'Servise three', 'twd' ),
					'section'  => 'services_settings',
					'default'  => esc_attr__( 'ACCOUNT MANAGEMENT', 'twd' ),
					'priority' => 15,
				) );
				Kirki::add_field( 'twd_config', array(
					'type'        => 'image',
					'settings'    => 'services_image_3',
					'label'       => __( 'Service image', 'twd' ),
					'description' => __( 'Choose service three image 256px', 'twd' ),
					'help'        => __( 'This is some extra help text.', 'twd' ),
					'section'     => 'services_settings',
					'default'     => '',
					'priority'    => 16,
				) );
				Kirki::add_field( 'twd_config', array(
					'type'        => 'repeater',
					'label'       => esc_attr__( 'Items service three', 'twd' ),
					'section'     => 'services_settings',
					'priority'    => 16,
					'row_label' => array(
						'type'  => 'field',
						'value' => esc_attr__('New item', 'twd' ),
						'field' => 'link_text',
					),
					'settings'    => 'services_text_li_3',
					'default'     => array(
						array(
							'link_text' => esc_attr__( 'Item service three', 'twd' ),
						),
					),
					'fields' => array(
						'link_text' => array(
							'type'        => 'text',
							'label'       => esc_attr__( 'Service item', 'twd' ),
							'default'     => '',
						),
					)
				) );
				Kirki::add_field( 'twd_config', array(
					'type'     => 'text',
					'settings' => 'services_name_4',
					'label'    => __( 'Servise four', 'twd' ),
					'section'  => 'services_settings',
					'default'  => esc_attr__( 'INSTAGRAM ADVERTISING', 'twd' ),
					'priority' => 17,
				) );
				Kirki::add_field( 'twd_config', array(
					'type'        => 'image',
					'settings'    => 'services_image_4',
					'label'       => __( 'Service image', 'twd' ),
					'description' => __( 'Choose service four image 256px', 'twd' ),
					'help'        => __( 'This is some extra help text.', 'twd' ),
					'section'     => 'services_settings',
					'default'     => '',
					'priority'    => 18,
				) );
				Kirki::add_field( 'twd_config', array(
					'type'        => 'repeater',
					'label'       => esc_attr__( 'Items service four', 'twd' ),
					'section'     => 'services_settings',
					'priority'    => 19,
					'row_label' => array(
						'type'  => 'field',
						'value' => esc_attr__('New item', 'twd' ),
						'field' => 'link_text',
					),
					'settings'    => 'services_text_li_4',
					'default'     => array(
						array(
							'link_text' => esc_attr__( 'Item service four', 'twd' ),
						),
					),
					'fields' => array(
						'link_text' => array(
							'type'        => 'text',
							'label'       => esc_attr__( 'Service item', 'twd' ),
							'default'     => '',
						),
					)
				) );
			
		// Kirki::add_field( 'silicon-blogger', array(
		// 			'type'        => 'typography',
		// 			'settings'    => 'title_tagline_text',
		// 			'label'       => esc_attr__( 'Site Title - Typography', 'silicon-blogger' ),
		// 			'section'     => 'title_tagline',
		// 			'default'     => array(
		// 				'font-family'    => 'Dosis',
		// 				'variant'        => '900',
		// 				'font-size'      => '32px',
		// 				'line-height'    => '32px',
		// 				'letter-spacing' => '2px',
		// 				'subsets'        => array( 'latin-ext' ),
		// 				'color'          => '#000000',
		// 				'text-transform' => 'none',
		// 				'text-align'     => false
		// 			),
		// 			'priority'    => 15,
		// 			'output'      => array(
		// 				array(
		// 					'element' => 'h3.logo_name',
		// 				),
		// 			),
		// 		) );
			
		// 	Kirki::add_field( 'silicon-blogger', array(
		// 		'type'        => 'multicolor',
		// 		'settings'    => 'header_menu_links',
		// 		'label'       => esc_attr__( 'Menu colors', 'silicon-blogger' ),
		// 		'section'     => 'menu_settings',
		// 		'priority'    => 4,
		// 		'choices'     => array(
		// 			'link'    => esc_attr__( 'Color', 'silicon-blogger' ),
		// 			'hover'   => esc_attr__( 'Hover', 'silicon-blogger' ),
		// 			'active'  => esc_attr__( 'Active', 'silicon-blogger' ),
		// 		),
		// 		'default'     => array(
		// 			'link'    => '#999999',
		// 			'hover'   => '#000000',
		// 			'active'  => '#000000',
		// 		),
		// 		'output'      => array(
		// 			array(
		// 				'choice'    => 'link',
		// 				'element'   => '#masthead ul li a',
		// 				'property'  => 'color',
		// 			),
		// 			array(
		// 				'choice'    => 'hover',
		// 				'element'   => '#masthead ul li a:hover',
		// 				'property'  => 'color',
		// 			),
		// 			array(
		// 				'choice'    => 'active',
		// 				'element'   => '#masthead ul li a:active, #masthead ul li.current-menu-item a, #masthead ul li.current-menu-parent > a',
		// 				'property'  => 'color',
		// 			),
		// 		),
		// 	) );
		
}
?>