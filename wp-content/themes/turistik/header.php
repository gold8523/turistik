<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?php wp_title(); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/css/libs.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/media.css">
    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
    <header class="main-header">
        <div class="top-header">
            <div class="top-header__wrap">
                <div class="logotype-block">
                    <div class="logo-wrap">
                        <a href="/">
                            <img src="<?php echo get_field('logo', 'option'); ?>" alt="Логотип" class="logo-wrap__logo-img">
                        </a>
                    </div>
                </div>
                <nav class="main-navigation">
                    <?php wp_nav_menu([
                        'container' => false,
                        'menu_class'    => 'nav-list',
                        'walker'    => new MenuWalker()
                    ]); ?>
                </nav>
            </div>
        </div>
        <div class="bottom-header">
            <div class="search-form-wrap">
                <form class="search-form" action="/">
                    <input type="text" placeholder="Поиск..." class="search-form__input" name="s">
                    <button class="search-form__btn-search"><i class="icon icon-search"></i></button>
                </form>
            </div>
        </div>
    </header>