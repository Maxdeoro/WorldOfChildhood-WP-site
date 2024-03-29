<?php
    add_action('wp_enqueue_scripts', 'childhood_styles');
    add_action('wp_enqueue_scripts', 'childhood_scripts');

    function childhood_styles() {
        //add styles
        wp_enqueue_style('childhood-style', get_stylesheet_uri());
        
        // add extra styles
        // wp_enqueue_style('header-style', 
        //         get_template_directory_uri() . '/assets/styles/main.min.css');
        // wp_enqueue-style('animate-style', 
        // "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css");
    };

    function childhood_scripts() {
        //add scripts
        wp_enqueue_script('childhood-scripts', 
            get_template_directory_uri() . '/assets/js/main.min.js',
            array(), null, true);
    };

    add_theme_support('custom-logo');
?>