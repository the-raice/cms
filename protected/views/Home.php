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
            <article class="content__article">
                <div class="article__column">
                    <h3 class="article__title"><a class="article__link" href="/article/<?=$article['url'] ?>"><?=$article['title'] ?></a></h3>
                </div>
                <div class="article__column article__column___right">
                    <ul class="metabar__list">
<?php if ( Models\User::isEditor( $_SESSION['authorized'], $article['author_id'] ) ): ?>
                        <li>
                            <h3><a class="metabar__option" href="/article/<?=$article['url'] ?>/edit">Редактировать</a></h3>
                        </li>
                        <li>
                            <h3><a class="metabar__option" href="/article/<?=$article['url'] ?>/delete">Удалить</a></h3>
                        </li>
<?php endif; ?> 
                        <li>
                           <h3><?=$article['date'] ?></h3>
                        </li>
                        <li>
                            <img class="author__image" src="<?=Models\User::getOneById( $article['author_id'] )[0]['image'] ?>">
                            <h3><a class="metabar__option" href="/user/<?=Models\User::getOneById( $article['author_id'] )[0]['username'] ?>"><?=Models\User::getOneById( $article['author_id'] )[0]['username'] ?></a></h3>
                        </li>                  
                    </ul>
                </div>
            </article>
<?php endforeach; ?>
        </header>
