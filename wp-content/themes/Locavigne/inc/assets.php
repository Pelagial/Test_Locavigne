<?php
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/sass/style_main.css');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/main_script.js');
});