<?php 
/**
 * Agencie supports
 */

/**
 * Table of Contents:
 *  Theme Support
 *  Theme Filter
 **********************************************************************************/

/**
 *  Sets up theme defaults and registers support for various WordPress features.
 **********************************************************************************/
defined ('ABSPATH') or die('');

add_action('after_setup_theme', function(){
    /** Theme supports title-tag */
    add_theme_support('title-tag');

    /** Theme supports menus */
    add_theme_support('menus');

    /** Theme supports html5 */
    add_theme_support('html5');

    /** Theme supports post-thumbnails */
    add_theme_support('post-thumbnails');
});

/**
 *  Sets up theme filter for upload mimes types.
 **********************************************************************************/
add_filter('upload_mimes', function($mimes){
    /** Theme filter SVG */
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});