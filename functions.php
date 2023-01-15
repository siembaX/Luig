<?php
function add_css() 
     {

     wp_register_style('font', get_template_directory_uri() . '/fonts/beyond_the_mountains-webfont.css', array(), 1, 'all');
     wp_enqueue_style('font');

     wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 1, 'all');
     wp_enqueue_style('bootstrap');

     wp_register_style('swiper', get_template_directory_uri() . '/assets/plugin-frameworks/swiper.css', array(), 1, 'all');
     wp_enqueue_style('swiper');

     wp_register_style('ionicons', get_template_directory_uri() . '/assets/css/ionicons.css', array(), 1, 'all');
     wp_enqueue_style('ionicons');

    wp_register_style('css', get_template_directory_uri() . '/assets/css/styles.css', array(), 1, 'all');
    wp_enqueue_style('css');



    


    }   
    add_action('wp_enqueue_scripts', 'add_css');


function add_script()

    {

     wp_deregister_script('jquery');

     wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.3.js', array(), 1,1,1,);
     wp_enqueue_script( 'jquery');

     wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), 1,1,1);
     wp_enqueue_script( 'bootstrap');

     wp_register_script('swiper', get_template_directory_uri() . '/assets/js/swiper.js', array(), 1,1,1,);
     wp_enqueue_script( 'swiper');

     wp_register_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), 1,1,1,);
     wp_enqueue_script( 'scripts');


    }
    add_action('wp_enqueue_scripts', 'add_script');






