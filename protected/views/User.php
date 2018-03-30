        <div class="content__user">
            <nav class="user__nav">
                <ul class="nav__ul">
<?php if ( !empty( $_SESSION['authorized'] ) ): ?>
                    <a class="nav__link" href="/dashboard"><li class="nav__li it1">Панель управления</li></a>
                    <a class="nav__link" href="/pages"><li class="nav__li it2">Страницы</li></a>
                    <a class="nav__link" href="/articles"><li class="nav__li it3">Статьи</li></a>
                    <a class="nav__link" href="/user/<?=\Models\User::getOneByField( $_SESSION['authorized'], 'id' )[0]['username'] ?>"><li class="nav__li nav__li___user nav__link___choosen"><?=\Models\User::getOneByField( $_SESSION['authorized'], 'id' )[0]['username'] ?></li></a>
<?php else: ?>
                    <a class="nav__link" href="/signin"><li class="nav__li">Войти</li></a>
                    <a class="nav__link" href="/signup"><li class="nav__li">Регистрация</li></a>
<?php endif; ?>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <img class="user__image" src="<?=\Controllers\User::$user['image'] ?>"><h1 class="content__header___title"><?=\Controllers\User::$user['username'] ?></h1>
            <div class="header__analytics">
<?php  foreach ( \Controllers\User::$notifications as $notification ): ?>
                <article class="content__article">
                    <div class="article__column article__column___top">
    <?php if ( !empty( strpos( $notification['action_url'], 'article') ) && empty( strpos( $notification['action_url'], 'comment') ) ): ?>
        <?php $title = mb_strtolower( \Models\Article::getOneByField( str_replace( '/article/', '', $notification['action_url']), 'url' )[0]['title'] ); ?>
        <?php $username = \Models\User::getOneById( $notification['author_id'] )[0]['username']; ?>
                        <h3 class="article__title"><a href="/user/<?=$username ?>">@<?=$username ?></a> <?=$notification['content'] ?> <a class="article__link" href="<?=$notification['action_url'] ?>"><?=$title ?></a>
    <?php if ( Models\User::isEditor( $_SESSION['authorized'], $notification['author_id'] ) ): ?>
                        <a class="metabar__option___delete" href="#">x</a></h3>
    <?php endif; ?>  
    <?php elseif ( !empty( strpos ( $notification['action_url'], 'user') ) ): ?>
        <?php $username = \Models\User::getOneById( $notification['author_id'] )[0]['username']; ?>
                        <h3 class="article__title"><a href="/user/<?=$username ?>">@<?=$username ?></a> <?=$notification['content'] ?></a>
        <?php if ( Models\User::isEditor( $_SESSION['authorized'], $notification['author_id'] ) ): ?>
                        <a class="metabar__option___delete" href="#">x</a></h3>
        <?php endif; ?>
    <?php elseif ( !empty( strpos( $notification['action_url'], 'comment') ) ): ?>
        <?php if ( !empty( strpos( $notification['action_url'], 'article') ) ): ?>
            <?php $url = str_replace('/comment', '', $notification['action_url']); ?>
            <?php $title = mb_strtolower( \Models\Article::getOneByField( str_replace( '/comment/article/', '', $notification['action_url']), 'url' )[0]['title'] ); ?>
            <?php $username = \Models\User::getOneById( $notification['author_id'] )[0]['username']; ?>
                        <h3 class="article__title"><a href="/user/<?=$username ?>">@<?=$username ?></a> <?=$notification['content'] ?> <a class="article__link" href="<?=$url ?>"><?=$title ?></a>
            <?php if ( Models\User::isEditor( $_SESSION['authorized'], $notification['author_id'] ) ): ?>
                        <a class="metabar__option___delete" href="#">x</a></h3>
            <?php endif; ?>
        <?php else: ?>
            <?php $title = mb_strtolower( \Models\Page::getOneByField( str_replace( '/comment/', '', $notification['action_url']), 'url' )[0]['title'] ); ?>
            <?php $url = str_replace('/comment', '', $notification['action_url']); ?>
            <?php $username = \Models\User::getOneById( $notification['author_id'] )[0]['username']; ?>
                        <h3 class="article__title"><a href="/user/<?=$username ?>">@<?=$username ?></a> <?=$notification['content'] ?> <a class="article__link" href="<?=$url ?>"><?=$title ?></a>
            <?php if ( Models\User::isEditor( $_SESSION['authorized'], $notification['author_id'] ) ): ?>
                        <a class="metabar__option___delete" href="#">x</a></h3>
            <?php endif; ?>
        <?php endif; ?>
    <?php else: ?>
        <?php $title = mb_strtolower( \Models\Page::getOneByField( $notification['action_url'], 'url' )[0]['title'] ); ?>
        <?php $username = \Models\User::getOneById( $notification['author_id'] )[0]['username']; ?>
                        <h3 class="article__title"><a href="/user/<?=$username ?>">@<?=$username ?></a> <?=$notification['content'] ?> <a class="article__link" href="/<?=$notification['action_url'] ?>"><?=$title ?></a>
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
