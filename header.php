<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/website#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            global $page, $paged;
            if(is_front_page()){
                echo bloginfo('name');
            } else if(is_page()){
                echo bloginfo('name'); 
                echo wp_title('|',true, 'left');
            }
        ?>
    </title>
    <meta name="description"
          content="<?php echo bloginfo('description'); ?>">
    <meta name="keywords" content="ポートフォリオ,フロントエンドエンジニア,web">
	<meta property="og:locale" content="ja_JP">
	<meta property="og:url" content="<?php echo esc_url(home_url()); ?>">
	<meta property="og:type" content="website"><!-- 他に blog article 等がある-->
	<meta property="og:title" content="<?php echo bloginfo('name'); ?>">
	<meta property="og:description" content="<?php echo bloginfo('description'); ?>">
	<meta property="og:site_name" content="<?php echo bloginfo('name'); ?>">
	<meta property="og:image" content="画像URL"><!-- Facebook 投稿時は1200px × 630px がちょうど良い -->
<!-- twitter OGP -->
	<meta name="twitter:card" content="summary"><!-- 投稿時のカードの種類 4種類 summary が一般的な使い方だが用途によって変わる　summary_large_image,app,player -->
	<meta name="twitter:site" content=""> <!-- @から始まる、作成者のTwiterユーザーのID　-->
<!-- Facebook OGP-->
	<meta property="fb:app_id" content=""> <!-- Facebook for developrs にて取得可能なOGP設定や Facebook用アプリを作成する際に必要なIDを記入 -->
<!-- アイコン設定 -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_theme_file_uri('/images/icon/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php  echo esc_url(get_theme_file_uri('/images/icon/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(get_theme_file_uri('/images/icon/favicon-16x16.png')); ?>">
    <link rel="manifest" href="<?php echo esc_url(get_theme_file_uri('/images/icon/site.webmanifest')); ?>">
    <link rel="mask-icon" href="<?php echo esc_url(get_theme_file_uri('/images/icon/safari-pinned-tab.svg')); ?>" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
	<meta name="robots" content="noindex">
    <?php wp_head(); ?>
</head>
<body>
    <header class="l-header">
        <div class="l-header__inner" id="js-header">
            <a class="l-header__logo" href="<?php echo esc_url(home_url()); ?>">
                <h1 class="c-logo">
                    <img class="c-logo__img" src="<?php echo esc_url(get_theme_file_uri('/images/logo.png')); ?>" alt="ロゴマーク">
                </h1>
            </a>
            <button class="l-header__hamburger" id="js-hamburger">
                <span class="l-header__hamburger-line js-hamburgerLine"></span>
                <span class="l-header__hamburger-line js-hamburgerLine"></span>
                <span class="l-header__hamburger-line js-hamburgerLine"></span>
            </button>
            <nav class="l-header__nav" id="js-header__nav">
                <ul class="l-header__nav-list u-bold">
                    <?php
                        wp_nav_menu(
                            array(
                                'Theme_location' => 'global__nav',
                                'menu_class' => 'l-header__nav-list u-bold',
                                'contanier' => false,
                            )
                        );
                    ?>
                </ul>
            </nav>
        </div>
    </header>