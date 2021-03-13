<?php

//テーマサポート
function hamburger_setup(){
    //HTML5有効化
    add_theme_support('html5',array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support( 'menus' );//カスタムメニューの有効化 
    add_theme_support( 'title-tag' );//タイトルタグの自動出力
    add_theme_support( 'post-thumbnails' );// アイキャッチ
    add_theme_support( 'automatic-feed-links' );// RSSフィード

	// ナビゲーションメニュー
    register_nav_menus( array(
        'category_nav' => 'category_navigation',
        'footer-nav' => 'footer_navigation',
      ) );



}

add_action( 'after_setup_theme', 'hamburger_setup' );


//css, js呼び出し
function hamburger_script(){
    
    //font
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css',array(),'5.6.1', 'all' );

    //css
    wp_enqueue_style('main_style', get_template_directory_uri().'/css/style.css', array(),'1.0.0','all' );
    wp_enqueue_style('reset_style', get_template_directory_uri() .'/css/reset.css', array(), '1.0.0','all' );

    //jquary
    wp_enqueue_script('jquery2','https://code.jquery.com/jquery-3.5.1.min.js', array(), '3.5.1',true);

    //my_javascript
    wp_enqueue_script('javascript', get_template_directory_uri(). '/js/javascript.js', array(), '1.0.0','all');
}
add_action( 'wp_enqueue_scripts', 'hamburger_script' );



