<?php
function yoobee_customizer_settings($wp_customize)
{
$wp_customize->add_setting('header_color', array(
'default' => '#000000',
'transport' => 'refresh',
));

$wp_customize->add_section('yoobee_color_header_section', array(
'title' => 'Header Color',
'priority' => 30,
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'my-header_color', array(
'label' => 'Header Color',
'section' => 'yoobee_color_header_section',
'settings' => 'header_color',
)));
}
// https://codex.wordpress.org/Theme_Customization_API
add_action('customize_register', 'yoobee_customizer_settings');

function mytheme_customize_css()
{
echo '<style>h1{color:'.get_theme_mod('header_color', '#000000').';}</style>';
}

add_action('wp_head', 'mytheme_customize_css');