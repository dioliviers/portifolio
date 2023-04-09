<?php 
   
    function theme_load_scripts(){
        wp_enqueue_style( 'wpdevs-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
    }
    add_action( 'wp_enqueue_scripts', 'theme_load_scripts' );


?>