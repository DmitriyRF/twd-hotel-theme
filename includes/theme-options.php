<?php
//DEFAULTS
$theme = get_template_directory_uri();
if (class_exists('Kirki')) {
	Kirki::add_config( 'twd', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod',
	) );
	
	/***********************/
	/*HEADER
	/***********************/
	
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
	
	// Kirki::add_field( 'silicon-blogger', array(
	// 			'type'        => 'typography',
	// 			'settings'    => 'title_tagline_description_text',
	// 			'label'       => esc_attr__( 'Tagline - Typography', 'silicon-blogger' ),
	// 			'section'     => 'title_tagline',
	// 			'default'     => array(
	// 				'font-family'    => 'Open Sans',
	// 				'variant'        => 'regular',
	// 				'font-size'      => '13px',
	// 				'line-height'    => '22px',
	// 				'letter-spacing' => '0',
	// 				'subsets'        => array( 'latin-ext' ),
	// 				'color'          => '#999',
	// 				'text-transform' => 'none',
	// 				'text-align'     => 'false'
	// 			),
	// 			'priority'    => 16,
	// 			'output'      => array(
	// 				array(
	// 					'element' => 'p.logo_description',
	// 				),
	// 			),
	// 		) );
	
	
			Kirki::add_panel( 'header', array(
			  'priority'    => 1,
			  'title'       => esc_html__( 'TWD', 'twd' ),
			  'description' => __( 'Settings for front page', 'twd' ),
			));
	
			/*MENU SETTINGS*/	
			Kirki::add_section( 'header_settings', array(
				'title'          => __( 'Header', 'twd' ),
				'description'    => __( 'Header settings', 'twd' ),
				'panel'          => 'header', 
				'priority'       => 1,
				'capability'     => 'edit_theme_options',
			) );
			
			Kirki::add_field( 'twd', array(
				'type'        => 'typography',
				'settings'    => 'logo_settings',
				'label'       => esc_attr__( 'Logo Typography', 'twd' ),
				'section'     => 'header_settings',
				'default'     => array(
					'font-family'    => 'Gentium Book Basic',
					'variant'        => 'regular',
					'font-size'      => '60px',
					'line-height'    => '50px',
					'letter-spacing' => '2px',
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
		
	/***********************/
	/*Typogaphy
	/***********************/
	/*GENERAL TYPOGRAPHY*/
	// Kirki::add_section( 'general_typography', array(
	// 	'title'          => __( 'General Typography', 'silicon-blogger' ),
	// 	'description'    => __( 'General Typography', 'silicon-blogger' ),
	// 	'panel'          => 'typography', // Not typically needed.
	// 	'priority'       => 1,
	// 	'capability'     => 'edit_theme_options',
	// 	'theme_supports' => '', // Rarely needed.
	// ) );
	
	// Kirki::add_field( 'silicon-blogger', array(
	// 	'type'        => 'typography',
	// 	'settings'    => 'general_typography_body',
	// 	'label'       => esc_attr__( 'Text Typography', 'silicon-blogger' ),
	// 	'section'     => 'general_typography',
	// 	'default'     => array(
	// 		'font-family'    => 'Open Sans',
	// 		'variant'        => '400',
	// 		'font-size'      => '14px',
	// 		'line-height'    => '24px',
	// 		'letter-spacing' => '0',
	// 		'subsets'        => array( 'latin-ext' ),
	// 		'color'          => '#777',
	// 		'text-transform' => 'none',
	// 		'text-align'     => 'left'
	// 	),
	// 	'priority'    => 10,
	// 	'output'      => array(
	// 		array(
	// 			'element' => 'body',
	// 		),
	// 	),
	// ) );
	
	// Kirki::add_field( 'silicon-blogger', array(
	// 	'type'        => 'typography',
	// 	'settings'    => 'general_typography_h1',
	// 	'label'       => esc_attr__( 'H1 Heading', 'silicon-blogger' ),
	// 	'section'     => 'general_typography',
	// 	'default'     => array(
	// 		'font-family'    => 'Merriweather',
	// 		'variant'        => '700',
	// 		'font-size'      => '34px',
	// 		'line-height'    => '1.3',
	// 		'letter-spacing' => '0',
	// 		'subsets'        => array( 'latin-ext' ),
	// 		'color'          => false,
	// 	),
	// 	'priority'    => 10,
	// 	'output'      => array(
	// 		array(
	// 			'element' => 'h1',
	// 		),
	// 	),
	// ) );
	
	// Kirki::add_field( 'silicon-blogger', array(
	// 	'type'        => 'typography',
	// 	'settings'    => 'general_typography_h2',
	// 	'label'       => esc_attr__( 'H2 Heading', 'silicon-blogger' ),
	// 	'section'     => 'general_typography',
	// 	'default'     => array(
	// 		'font-family'    => 'Merriweather',
	// 		'variant'        => '700',
	// 		'font-size'      => '28px',
	// 		'line-height'    => '1.3',
	// 		'letter-spacing' => '0',
	// 		'subsets'        => array( 'latin-ext' ),
	// 		'color'          => false,
	// 	),
	// 	'priority'    => 10,
	// 	'output'      => array(
	// 		array(
	// 			'element' => 'h2',
	// 		),
	// 	),
	// ) );
	
	// Kirki::add_field( 'silicon-blogger', array(
	// 	'type'        => 'typography',
	// 	'settings'    => 'general_typography_h3',
	// 	'label'       => esc_attr__( 'H3 Heading', 'silicon-blogger' ),
	// 	'section'     => 'general_typography',
	// 	'default'     => array(
	// 		'font-family'    => 'Merriweather',
	// 		'variant'        => '700',
	// 		'font-size'      => '24px',
	// 		'line-height'    => '1.3',
	// 		'letter-spacing' => '0',
	// 		'subsets'        => array( 'latin-ext' ),
	// 		'color'          => false,
	// 	),
	// 	'priority'    => 10,
	// 	'output'      => array(
	// 		array(
	// 			'element' => 'h3',
	// 		),
	// 	),
	// ) );
	
	// Kirki::add_field( 'silicon-blogger', array(
	// 	'type'        => 'typography',
	// 	'settings'    => 'general_typography_h4',
	// 	'label'       => esc_attr__( 'H4 Heading', 'silicon-blogger' ),
	// 	'section'     => 'general_typography',
	// 	'default'     => array(
	// 		'font-family'    => 'Merriweather',
	// 		'variant'        => '700',
	// 		'font-size'      => '18px',
	// 		'line-height'    => '1.3',
	// 		'letter-spacing' => '0',
	// 		'subsets'        => array( 'latin-ext' ),
	// 		'color'          => false,
	// 	),
	// 	'priority'    => 10,
	// 	'output'      => array(
	// 		array(
	// 			'element' => 'h4',
	// 		),
	// 	),
	// ) );
	
	
	// Kirki::add_field( 'silicon-blogger', array(
	// 	'type'        => 'typography',
	// 	'settings'    => 'general_typography_h5',
	// 	'label'       => esc_attr__( 'H5 Heading', 'silicon-blogger' ),
	// 	'section'     => 'general_typography',
	// 	'default'     => array(
	// 		'font-family'    => 'Merriweather',
	// 		'variant'        => '700',
	// 		'font-size'      => '16px',
	// 		'line-height'    => '1.3',
	// 		'letter-spacing' => '0',
	// 		'subsets'        => array( 'latin-ext' ),
	// 		'color'          => false,
	// 	),
	// 	'priority'    => 10,
	// 	'output'      => array(
	// 		array(
	// 			'element' => 'h5',
	// 		),
	// 	),
	// ) );
		
	// Kirki::add_field( 'silicon-blogger', array(
	// 		'type'        => 'typography',
	// 		'settings'    => 'general_typography_h6',
	// 		'label'       => esc_attr__( 'H6 Heading', 'silicon-blogger' ),
	// 		'section'     => 'general_typography',
	// 		'default'     => array(
	// 			'font-family'    => 'Merriweather',
	// 			'variant'        => '700',
	// 			'font-size'      => '14px',
	// 			'line-height'    => '1.3',
	// 			'letter-spacing' => '0',
	// 			'subsets'        => array( 'latin-ext' ),
	// 			'color'          => false,
	// 		),
	// 		'priority'    => 10,
	// 		'output'      => array(
	// 			array(
	// 				'element' => 'h6',
	// 			),
	// 		),
	// 	) );
		
}
?>