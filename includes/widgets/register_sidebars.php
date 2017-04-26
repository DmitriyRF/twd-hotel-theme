<?php


function twd_register_sidebars() {
	register_sidebar( array(
		'name'          => __( 'Sidebar for Instagram', 'twd' ),
		'id'            => 'sidebar-for-shotrcode',
		'description'   => __( 'Add widgets for shotrcode here to appear in your sidebar.', 'twd' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}