        <div class="content__pages">
            <nav class="pages__nav">
                <ul class="nav__ul">
                    <a class="nav__link" href="/dashboard"><li class="nav__li">Панель управления</li></a>
                    <a class="nav__link" href="/add"><li class="nav__li">Добавить</li></a>
                    <a class="nav__link" href="/pages"><li class="nav__li nav__link___choosen">Страницы</li></a>
                    <a class="nav__link" href="/articles"><li class="nav__li">Статьи</li></a>
                    <a class="nav__link" href="/user/<?=\Controllers\Pages::$user['username'] ?>"><li class="nav__li nav__li___user"><?=\Controllers\Pages::$user['username'] ?></li></a>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <h1 class="pages__title">Страницы</h1>
            <h3><a class="article__add" href="/add/page">Добавить</a></h3>
            <br>
<?php foreach ( \Controllers\Pages::$pages as $page ): ?>
            <article class="content__article">
                <div class="article__column">
                    <h3 class="article__title"><a class="article__link" href="/<?=$page['url'] ?>"><?=$page['title'] ?></a></h3>
                </div>
                <div class="article__column article__column___right">
                    <ul class="metabar__list">
<?php if ( Models\User::isEditor( $_SESSION['authorized'], $page['author_id'] ) ): ?>
                        <li>
                            <h3><a class="metabar__option" href="/<?=$page['url'] ?>/edit">Редактировать</a></h3>
                        </li>
                        <li>
                            <h3><a class="metabar__option" href="/<?=$page['url'] ?>/delete">Удалить</a></h3>
                        </li>
<?php endif; ?>                
                        <li>
                           <h3><?=$page['date'] ?></h3>
                        </li>
                        <li>
                            <img class="author__image" src="<?=Models\User::getOneById( $page['author_id'] )[0]['image'] ?>">
                            <h3><a class="metabar__option" href="/user/<?=Models\User::getOneById( $page['author_id'] )[0]['username'] ?>"><?=Models\User::getOneById( $page['author_id'] )[0]['username'] ?></a></h3>
                        </li>
                    </ul>
                </div>
            </article>
<?php endforeach; ?>
