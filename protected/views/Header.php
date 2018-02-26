<!DOCTYPE HTML>
<html>
<head>
    <title><?=$title ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/assets/css/default.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/pagePreloadEffect.css" />
	<script src="/assets/js/modernizr.custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div id="ip-container" class="ip-container">
                <header class="ip-header">
                    <div class="ip-loader">
                        <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                            <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                            <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                        </svg>
                    </div>
                </header>
        <div class="<?=$class?>">
            <?php if ( $class != 'home' && $class != 'signin' && $class != 'signup' && $class != 'article' && $class != 'page' ): ?>
                <div class="content__<?=$class?>">
                    <nav class="<?=$class?>__nav">
                        <ul class="nav__ul">
                        <?php
                        
                        $menu = [
                                    '/dashboard' => 'Панель управления',
                                    '/pages' => 'Страницы',
                                    '/articles' => 'Статьи'
                                ];
                                
                        $i = 1;
                        
                        ?>
                        <?php foreach ( $menu as $k => $v ): ?>
                            <a class="nav__link" href="<?=$k ?>"><li class="nav__li it<?=$i ?>"><?=$v ?></li></a>
                            <?php $i++; ?>
                        <?php endforeach; ?>
            <?php elseif ( $class == 'home' && $class == 'signin' && $class == 'signup' ): ?>
            <div class="content__<?=$class?>">
                    <nav class="<?=$class?>__nav">
                        <ul class="nav__ul">
                        <?php
                        
                        $menu = [
                                    '/' => 'Главная',
                                    '/signup' => 'Регистрация',
                                    '/signin' => 'Войти'
                                ];
                                
                        $i = 1;
                        
                        ?>
                        <?php foreach ( $menu as $k => $v ): ?>
                            <a class="nav__link" href="<?=$k ?>"><li class="nav__li it<?=$i ?>"><?=$v ?></li></a>
                            <?php $i++; ?>
                        <?php endforeach; ?>
            <?php endif; ?>
