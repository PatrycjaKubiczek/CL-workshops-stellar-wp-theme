<?php

add_theme_support ('post-thumbnails');
add_theme_support ('custom-logo', array(
    'height' => 150,
    'width' => 150, 
    'flex-width' => true,
) );


function register_my_menu() {
    register_nav_menu('main-menu', __('Menu główne' ));
}

add_action('init', 'register_my_menu' );

function register_my_widget(){
    register_sidebar  ( array(
        'name' => 'Widżety w stopce po lewej',
        'id' => 'footer_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'));
    
     register_sidebar  ( array(
        'name' => 'Widżety w stopce po prawej',
        'id' => 'footer_2',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'));
}

add_action('init', 'register_my_widget');