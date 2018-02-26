<?php
ob_start ("ob_gzhandler");

add_action( 'wp_loaded', 'ImportAllStyles' );
add_action( 'wp_loaded', 'ImportAllScripts' );


//Add all styles here
function ImportAllStyles(){
    if(!is_admin()){
        //To enqueue style.css
        wp_enqueue_style( 'style', get_stylesheet_uri() );

    }else{
        wp_enqueue_style( 'astyle', get_template_directory_uri().'/admin/script.js' );
    }
}

//Add all scripts here
function ImportAllScripts(){
    if(!is_admin()){
        //To enqueue available necessary wordpress libraries
        wp_enqueue_script('json2');
        wp_enqueue_script('jquery');
        //To enqueue script.js
        wp_enqueue_script( 'script', get_template_directory_uri().'/script.js' );

    }else{
        wp_enqueue_script( 'ascript', get_template_directory_uri().'/admin/script.js' );
    }
}

?>
