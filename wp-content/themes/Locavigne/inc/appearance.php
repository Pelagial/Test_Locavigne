<?php
/**
* Agencie appearance features
*/

/**
* Table of Contents:
*  Appearance features
**********************************************************************************/

/**
*  Sets up theme defaults and registers support for various WordPress features.
**********************************************************************************/

/** Customize theme appearance feature */
add_action('customize_register', function(WP_Customize_Manager $manager){

/** Customize page title for theme */
    $manager->add_section('agencia_appearance', [
        'title' => __('Theme appearance')
    ]);

/** Clean url of logo for theme */    
    $manager->add_setting('logo', [
        'sanitize_callback' => 'esc_url_raw'
    ]);

/** Customize control to upload logo for theme */      
    $manager->add_control(new WP_Customize_Image_Control($manager, 'logo', [
        'label' => __('Logo', 'agencia'),
        'section' => ('agencia_appearance')
    ]));

});