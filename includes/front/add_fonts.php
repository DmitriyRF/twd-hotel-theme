<?php


function twd_add_fonts(){
	wp_enqueue_style( 'twd-google-fonts', twd_fonts_url(), array(), false ,'all');
}


//Separate function
function twd_fonts_url() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = 'latin,latin-ext';

    $fonts[] = 'Gentium+Book+Basic:400,400i,700,700i';
    $fonts[] = 'Roboto:100,400,500,700';
    if ( $fonts ) {
        $fonts_url = add_query_arg( array(
            'family' => urlencode( implode( '|', $fonts ) ),
            'subset' => urlencode( $subsets ),
        ), 'https://fonts.googleapis.com/css' );
    }
    return $fonts_url;
}