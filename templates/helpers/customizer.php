<?php
/*
Theme Name: Customizer Theme
Description: Customize Themes
*/

// Wp_Customize_Control

function fn_customizer_settings($wp_customizer){

    // add a customizer setting
    // include new section
    $wp_customizer->add_section("header", array(
        "title" => __("Header Settings", "Daily"),
        "Priority" => 70
    ));

    $wp_customizer->add_setting("header_image", array(
        "capability" => "edit_theme_options"
    ));

    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, "header_image", array(
        "label" => __("Header Image", "Daily"),
        "section" => "header"
    )));

    // adding-header text

$wp_customizer->add_setting("header_text_field", array(
    "capability" => "edit_theme_options",
    "default" => "Simplicity"
));

// adding text control
$wp_customizer->add_control("header_text_control", array(
    "label" => __("Header Text", "Daily"),
    "description" => "change Header Text",
    "section"=> "header",
    "settings" => "header_text_field"
    ));

        // adding-header-description-field

$wp_customizer->add_setting("header_desc_field", array(
    "capability" => "edit_theme_options",
    "default" => "The Power of Wordpress"
));

// adding header-description field
$wp_customizer->add_control("header_description_control", array(
    "label" => __("Header Description", "Daily"),
    "description" => "change Header Description",
    "section"=> "header",
    "settings" => "header_desc_field"
    ));

}



add_action("customize_register", "fn_customizer_settings");


?>