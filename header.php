<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('/images/favicon.png')); ?>" type="image/png">
    <?php wp_head(); ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JWQVKQDXHL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-JWQVKQDXHL');
    </script>
    <!-- Google tag (gtag.js) -->
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <div id="topBox">
            <div class="topBoxItem">
                <h1><a href="<?php echo esc_url(home_url('/')); ?>">○○皮膚科</a></h1>
            </div>
            <div class="topBoxItem">
                <p>お問い合わせ・ご予約は<br><span>0985-××-××××</span></p>
            </div>
        </div>
        <nav id="spnav">
            <div id="hamburgerbox">
                <button id="hamburgericon">
                    <span class=""></span>
                </button>
            </div>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu'
                )
            );
            ?>
        </nav>
        <nav id="pcnav">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu'
                )
            );
            ?>
        </nav>
    </header>