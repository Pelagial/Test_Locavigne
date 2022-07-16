<?php
/**
* Agencie menus features
*/

/**
* Table of Contents:
*  Menus features
**********************************************************************************/

/**
*  Sets up theme menus features.
**********************************************************************************/

/** Customize theme main menus feature */
add_action('after_setup_theme', function(){
    register_nav_menu('header', __('Main navigation', 'agencia'));
});

/** Customize theme side menus feature */
add_action('widgets_init', function(){
    register_sidebar([
        'id' => 'footer',
        'name' => __('Footer', 'agencia'),
        'before_title' => '<div class="footer__title">',
        'after_title' => '</div>',
        'before_widget' => '<div class="footer__col">',
        'after_widget' => '</div>',
    ]);
});