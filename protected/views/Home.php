        <div class="content__home">
            <nav class="home__nav">
                <ul class="nav__ul">
<?php if ( empty( \Controllers\Home::$user ) ): ?>
                    <a class="nav__link" href="/"><li class="nav__li nav__link___choosen">Главная</li></a>
                    <a class="nav__link" href="/signup"><li class="nav__li">Регистрация</li></a>
                    <a class="nav__link" href="/signin"><li class="nav__li">Войти</li></a>
<?php else: ?>
                    <a class="nav__link" href="/dashboard"><li class="nav__li it1">Панель управления</li></a>
                    <a class="nav__link" href="/pages"><li class="nav__li it2">Страницы</li></a>
                    <a class="nav__link" href="/articles"><li class="nav__li it3">Статьи</li></a>
                    <a class="nav__link" href="/courses"><li class="nav__li it3">Курсы</li></a>
                    <a class="nav__link" href="/user/<?=\Controllers\Home::$user['username'] ?>"><li class="nav__li nav__li___user"><?=\Controllers\Home::$user['username'] ?></li></a>
<?php endif; ?>
                </ul>
            </nav>
            <div class="home__header">
                <h1 class="home__title">Зарегистрируйтесь и получите все преимущества The Raice</h1>
                <a class="home__link" href="/signup"><button class="home__button">Попробовать</button></a>
            </div>
        </div>
        <header class="content__header">
            <h1 class="content__header___title">Последние статьи</h1>
            <br>
            <?php foreach ( \Controllers\Home::$articles as $article ): ?>
            <?php
            
            $article['content'] = mb_strimwidth( str_replace( "\n", '', str_replace( '  ', '', $article['content']) ), 0, 350) . '...';
            
            ?>
            <article class="content__article">
                <h3 class="article__title"><a class="article__link" href="/article/<?=$article['url'] ?>"><?=$article['title'] ?></a></h3>
                <p><?=$article['content'] ?></p>
                <h3 class="article__date"><?=$article['date'] ?></h3>
            </article>
<?php endforeach; ?>
        </header>
