        <div class="content__articles">
            <nav class="articles__nav">
                <ul class="nav__ul">
                    <a class="nav__link" href="/dashboard"><li class="nav__li">Панель управления</li></a>
                    <a class="nav__link" href="/add"><li class="nav__li">Добавить</li></a>
                    <a class="nav__link" href="/pages"><li class="nav__li">Страницы</li></a>
                    <a class="nav__link" href="/articles"><li class="nav__li nav__link___choosen">Статьи</li></a>
                    <a class="nav__link" href="/user/<?=\Controllers\Articles::$user['username'] ?>"><li class="nav__li nav__li___user"><?=\Controllers\Articles::$user['username'] ?></li></a>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <h1 class="articles__title">Статьи</h1>
            <h3><a class="article__add" href="/add/article">Добавить</a></h3>
            <br>
<?php foreach ( \Controllers\Articles::$articles as $article ): ?>
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
