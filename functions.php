<?php
//All the global variables
global $wp_version;

//GZIP Handler
ob_start ("ob_gzhandler");


//Action Hooks
add_action( 'wp_loaded', 'ImportAllStyles' );
add_action( 'wp_loaded', 'ImportAllScripts' );


//All The Functions 

//Add all styles here
function ImportAllStyles(){
    if(!is_admin()){
        //To enqueue style.css
        wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/main.css' );

    }else{
        wp_enqueue_style( 'astyle', get_template_directory_uri().'/assets/admin/js/style.css' );
    }
}

//Add all scripts here
function ImportAllScripts(){
    if(!is_admin()){
        //To enqueue available necessary wordpress libraries
        wp_enqueue_script('json2');
        wp_enqueue_script('jquery');
        //To enqueue script.js
        wp_enqueue_script( 'script', get_template_directory_uri().'/assets/js/script.js' );

    }else{
        wp_enqueue_script( 'ascript', get_template_directory_uri().'/assets/admin/js/script.js' );
    }
}

//Basic Theme Supports

//Allows to set featured image
add_theme_support( 'post-thumbnails' );

//enables Theme_Logo support for a theme.
add_theme_support( 'custom-logo' );

//Backward compatibility
wp_insert_term( 'post-format-aside', 'post_format' );

//To Allow Automatic Feed Links
if ( version_compare( $wp_version, '3.0', '>=' ) ) :
	add_theme_support( 'automatic-feed-links' ); 
else :
	automatic_feed_links();
endif;




?>
