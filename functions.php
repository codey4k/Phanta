<?php

    function linkes(){
        //add Css
        wp_enqueue_style('style', get_stylesheet_uri());
        
        //add Javacript
        wp_register_script('new-script', get_bloginfo('template_directory'). '/js/script.js', array(),'1', true);
        wp_enqueue_script('new-script');
    }
    
    add_action('wp_enqueue_scripts', 'linkes');
    
    //delete bar wordpress
    add_filter( 'show_admin_bar', '__return_false' );