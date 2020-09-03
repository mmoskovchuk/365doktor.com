<?php $my_lang = pll_current_language(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo('name') . ' | ' . wp_title(); ?></title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>

    <?php if (is_front_page()) : ?>
        <link rel="alternate" hreflang="x-default" href="//365doktor.com"/>
    <?php endif; ?>

    <?php wp_head(); ?>
</head>

<?php
$url = explode('?', $_SERVER['REQUEST_URI']);
$url_rm_slash = substr($url[0], strripos($url[0], '/') + 1);
$current_page = $url_rm_slash ? $url_rm_slash : 'home';
$additional_body_class = 'page-' . $current_page;
?>

<body <?php body_class($additional_body_class); ?>>

<!--HEADER-->
<div class="header__wrap main">
    <header class="header container">
        <?php if ($my_lang == 'en') : ?>
            <a href="/" class="header__logo">
                <img src="<?php bloginfo('template_url'); ?>/img/logo.svg">
            </a>
        <?php elseif ($my_lang == 'de') : ?>
            <a href="/de/" class="header__logo">
                <img src="<?php bloginfo('template_url'); ?>/img/logo.svg">
            </a>
        <?php elseif ($my_lang == 'pl') : ?>
            <a href="/pl/" class="header__logo">
                <img src="<?php bloginfo('template_url'); ?>/img/logo.svg">
            </a>
        <?php endif; ?>
        <nav class="header__menu-wrap" id="nav">
            <?php
            $nav_args = array(
                'theme_location' => 'nav',
                'container' => 'ul',
                'menu_class' => 'header__menu',
                'depth' => 2
            );
            wp_nav_menu($nav_args);
            ?>
        </nav>
        <?php if ($my_lang == 'en') : ?>
            <a href="/our-treatments/" class="btn">select your treatment</a>
        <?php elseif ($my_lang == 'de') : ?>
            <a href="/our-treatments/" class="btn">Wählen Sie Ihre Behandlung</a>
        <?php elseif ($my_lang == 'pl') : ?>
            <a href="/our-treatments/" class="btn">wybierz zabieg</a>
        <?php endif; ?>

        <div class="header__lang">
            <div class="header__lang_title">EN</div>
            <ul class="header__lang-submenu">
                <?php pll_the_languages(array('‘show_names' => 1, 'class' => 'header__lang-submenu')); ?>
            </ul>
        </div>
        <button class="menu-mob-button"></button>
    </header>
</div>

<!--MAIN-->
<div id="main" class="main">
