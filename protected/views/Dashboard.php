        <div class="content__dashboard">
            <nav class="dashboard__nav">
                <ul class="nav__ul">
                    <a class="nav__link" href="/dashboard"><li class="nav__li nav__link___choosen">Панель управления</li></a>
                    <a class="nav__link" href="/add"><li class="nav__li">Добавить</li></a>
                    <a class="nav__link" href="/pages"><li class="nav__li">Страницы</li></a>
                    <a class="nav__link" href="/articles"><li class="nav__li">Статьи</li></a>
                    <a class="nav__link" href="/profile"><li class="nav__li nav__li___user"><?=\Controllers\Dashboard::$user['username'] ?></li></a>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <h1 class="content__header___title">Панель управления</h1>
            <div class="header__analytics">
<?php  foreach ( \Controllers\Dashboard::$notifications as $notification ): ?>
                <article class="content__article">
                    <div class="article__column article__column___top">
<?php if ( !empty( strpos( $notification['action_url'], 'article') ) ): ?>
<?php $title = mb_strtolower( \Models\Article::getOneByField( str_replace( '/article/', '', $notification['action_url']), 'url' )[0]['title'] ); ?>
<?php $username = \Models\User::getOneById( \Models\Article::getOneByField( str_replace( '/article/', '', $notification['action_url']), 'url' )[0]['author_id'] )[0]['username']; ?>
                        <h3 class="article__title"><a href="/user/<?=$username ?>">@<?=$username ?></a> <?=$notification['content'] ?> <a class="article__link" href="<?=$notification['action_url'] ?>"><?=$title ?></a>
<?php if ( Models\User::isEditor( $_SESSION['authorized'], $notification['author_id'] ) ): ?>
                        <a class="metabar__option___delete" href="#">x</a></h3>
<?php endif; ?>  
<?php elseif ( !empty( strpos ( $notification['action_url'], 'user') ) ): ?>
<?php $username = mb_strtolower( \Models\User::getOneByField( str_replace( '/user/', '', $notification['action_url']), 'username' )[0]['username'] ); ?>
                        <h3 class="article__title"><a href="/user/<?=$username ?>">@<?=$username ?></a> <?=$notification['content'] ?></a>
<?php if ( Models\User::isEditor( $_SESSION['authorized'], $notification['author_id'] ) ): ?>
                        <a class="metabar__option___delete" href="#">x</a></h3>
<?php endif; ?>
<?php else: ?>
<?php $title = mb_strtolower( \Models\Page::getOneByField( $notification['action_url'], 'url' )[0]['title'] ); ?>
<?php $username = \Models\User::getOneById( \Models\Page::getOneByField( str_replace( '/article/', '', $notification['action_url']), 'url' )[0]['author_id'] )[0]['username']; ?>
                        <h3 class="article__title"><a href="/user/<?=$username ?>">@<?=$username ?></a> <?=$notification['content'] ?> <a class="article__link" href="<?=$notification['action_url'] ?>"><?=$title ?></a>
<?php if ( Models\User::isEditor( $_SESSION['authorized'], $notification['author_id'] ) ): ?>
                        <a class="metabar__option___delete" href="#">x</a></h3>
<?php endif; ?>
<?php endif;?>

                </div>
                <div class="article__column">
                    <ul class="metabar__list">
                        <li>
                           <h3><?=$notification['date'] ?></h3>
                        </li>                 
                    </ul>
                </div>
            </article>
<?php endforeach; ?>
            </div>
