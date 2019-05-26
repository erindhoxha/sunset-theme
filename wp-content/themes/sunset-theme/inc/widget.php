<?php

/*

@package sunset-theme

======================
    ADMIN WIDGETS AREA
======================

*/
function my_widgets()
{
register_sidebar( array(
'name' => 'my_calendar',
'id' => 'my_cal_1',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h2 class="">',
'after_title' => '</h2>',
) );
}

add_action('widgets_init', 'my_widgets');

function themeName_customize_register( $wp_customize ) {

    // Add Settings
    $wp_customize->add_setting('customizer_setting_one', array(
        'transport'         => 'refresh',
        'height'         => 325,
    ));
    $wp_customize->add_setting('customizer_setting_two', array(
        'transport'         => 'refresh',
        'height'         => 325,
    ));

    // Add Section
    $wp_customize->add_section('image', array(
        'title'             => __('Images', 'name-theme'), 
        'priority'          => 70,
    ));    

    // Add Controls
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_setting_two_control', array(
        'label'             => __('Slider Image #1', 'name-theme'),
        'section'           => 'image',
        'settings'          => 'customizer_setting_one',    
    )));
 
}
add_action('customize_register', 'themeName_customize_register');