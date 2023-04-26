<?php
// 初期設定
// ナビ設定
    function menu(){
        register_nav_menus( array(
            'nav' => 'global navi',
        ));
    }
    // グローバルメニューのliのid,classを削除
    add_filter('nav_menu_css_class', 'wp_navtag_remove', 100, 1); //liのclassを強制的に全削除
    add_filter('nav_menu_item_id', 'wp_navtag_remove', 100, 1); //liのidを強制的に削除
    add_filter('page_css_class', 'wp_navtag_remove', 100, 1); //これはテーマによって記述しなくても良い場合がありますが、念の為記述しておいてください
    function wp_navtag_remove($var) {
    return is_array($var) ? array_intersect($var, array('l-header__nav-item')) : ''; // 'l-header__nav-item'のところは残したいclassを記入
    }
    add_action('init', 'menu');
//　アイキャッチ画像設定
    add_theme_support('post-thumbnails');
// ウィジェットの機能追加
add_theme_support('widgets');


// CSS JS 読み込み
    function main_style(){
        // googleFonts
        wp_enqueue_style(
            'style_googlefonts',
            'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&family=Noto+Serif:ital,wght@0,700;1,400&display=swap',
            array(),
            '6.4.0',
            'all'
        );
        // CSS読み込み
        wp_enqueue_style(
            'main-style',
            get_template_directory_uri().'/style.css',
            array(),
            '1.0',
            'all'
        );
    // JS読み込み
        wp_enqueue_script(
            'main-script',
            get_template_directory_uri().'/js/script.js',
            array(),
            '1.0',
            'all'
        );
        // FontAwesome
        wp_enqueue_script(
            'script_fontawesome',
            'https://kit.fontawesome.com/094ceafde6.js',
            array()
        );
    }
    add_action('wp_enqueue_scripts', 'main_style');

?>
