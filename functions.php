<?php
function add_files() {
    // リセットCSS
    wp_enqueue_style('reset-style','https://unpkg.com/ress/dist/ress.min.css');
    // Google Fonts
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');
    // メインのCSSファイル
    wp_enqueue_style('main-style',get_stylesheet_uri());
    // JavaScriptファイル
    wp_enqueue_script('main-script',get_theme_file_uri().'/js/script.js',array(),'',true);
    if(is_front_page()) {
        wp_enqueue_script('slide-script',get_theme_file_uri().'/js/slideshow.js',array(),'',true);
    }
}
add_action('wp_enqueue_scripts','add_files');

function theme_setup() {
    // titleタグ
    add_theme_support('title-tag');
    // メニュー
    register_nav_menus(
        array(
            'main-menu' => 'メインメニュー'
        )
    );
}
add_action('after_setup_theme','theme_setup');
?>