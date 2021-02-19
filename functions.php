<?php

function custom_theme_support(){
    add_theme_support('html',array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
}

add_action( 'after_setup_theme', 'custom_theme_support' );

// function wpbeg_script(){
    
// }