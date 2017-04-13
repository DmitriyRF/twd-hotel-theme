<?php
// define var
/*framework prefix is TWD*/  
// define("TWD_TITLE", "Sauron");
//
// define("TWD_SLUG", "sauron");
// define("TWD_VAR", "sauron");
/*translation text domain*/

// define("TWD_META", "_".TWD_SLUG."_meta");
// define("TWD_OPT", TWD_VAR."_options");
// define("TWD_VERSION", wp_get_theme()->get( 'Version' ) );

// define("TWD_LOGO_SHOW", true);
// define("TWD_HOMEPAGE", "https://web-dorado.com");
/*directories*/  
define("TWD_DIR", get_template_directory());
define("TWD_URL", get_template_directory_uri());

define("TWD_IMG", TWD_URL.'/images');
define("TWD_ASSETS", TWD_URL.'/assets');
define("TWD_INC", TWD_URL.'/includes');

load_theme_textdomain("twd", TWD_DIR.'/languages' );


// set up


// include
include(TWD_DIR . '/includes/front/enqueue.php');
include(TWD_DIR . '/includes/plugins/require_plugins.php');


// action & filter hooks
add_action('wp_enqueue_scripts', 'twd_function_enqueue_script');//enqueue.php
add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );//require_plugins.php





// shortcondes


/*
/////////////////////////////////////////////////////////////////////
////////   ////////////   ///           ///   ///////     ///////////
////////       ///         ///    //    //    ///    //   ///////////
////////       ///          /// //  // //     ///    //   ///////////
////////       ///           ///      //      ///////     ///////////
/////////////////////////////////////////////////////////////////////
*/
 ?>