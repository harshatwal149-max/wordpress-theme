<?php

function rajmahal_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'rajmahal_styles');

function rajmahal_theme_setup(){
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'rajmahal_theme_setup');

function rajmahal_menu() {
    register_nav_menus(array(
        'primary' => 'Main Menu'
    ));
}

add_action('after_setup_theme', 'rajmahal_menu');




function rajmahal_widgets_init() {

    // Contact Widget
    register_sidebar(array(
        'name' => 'Footer Contact',
        'id' => 'footer_contact',
        'before_widget' => '<div class="footer-col">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    // Social Widget
    register_sidebar(array(
        'name' => 'Footer Social',
        'id' => 'footer_social',
        'before_widget' => '<div class="footer-col">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    // Newsletter Widget
    register_sidebar(array(
        'name' => 'Footer newsletter',
        'id' => 'footer_newsletter',
        'before_widget' => '<div class="footer-col">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name'=> 'Footer title',
        'id' => 'footer_title',
        'before_widget'=>'<div class="footer-col">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>',
    ));

}
add_action('widgets_init', 'rajmahal_widgets_init');

