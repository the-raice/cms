        <div class="content__article">
            <nav class="article__nav">
                <ul class="nav__ul">
<?php if ( !empty( \Controllers\Article::$user ) ): ?>
                    <a class="nav__link" href="/dashboard"><li class="nav__li">Панель управления</li></a>
                    <a class="nav__link" href="/add"><li class="nav__li">Добавить</li></a>
                    <a class="nav__link" href="/pages"><li class="nav__li">Страницы</li></a>
                    <a class="nav__link" href="/articles"><li class="nav__li nav__link___choosen">Статьи</li></a>
                    <a class="nav__link" href="/user/<?=\Controllers\Article::$user['username'] ?>"><li class="nav__li nav__li___user"><?=\Controllers\Article::$user['username'] ?></li></a>
<?php else: ?>
                    <a class="nav__link" href="/signin"><li class="nav__li">Войти</li></a>
                    <a class="nav__link" href="/signup"><li class="nav__li">Регистрация</li></a>
<?php endif; ?>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <h1 class="article__title"><?=\Controllers\Article::$article['title'] ?></h1>
            <h3>
            <article class="header__article">
                <br>
<?php foreach ( \Controllers\Article::$article['content'] as $article ): ?>
                <h3 class="article__text"><?=$article ?></h3>
 <?php endforeach; ?>
            </article>
            </h3>
            <div class="content__metabar">
                <ul class="metabar__list">
                    <li>
                       <h3><?=\Controllers\Article::$article['date'] ?></h3>
                    </li>
                    <li>
                        <img class="author__image" src="<?=Models\User::getOneById( \Controllers\Article::$article['author_id'] )[0]['image'] ?>">
                        <h3><a class="metabar__option" href="/user/<?=Models\User::getOneById( \Controllers\Article::$article['author_id'] )[0]['username'] ?>"><?=Models\User::getOneById( \Controllers\Article::$article['author_id'] )[0]['username'] ?></a></h3>
                    </li>
<?php if ( Models\User::isEditor( $_SESSION['authorized'], \Controllers\Article::$article['author_id'] ) ): ?>
                    <li>
                        <h3><a class="metabar__option" href="/article/<?=\Controllers\Article::$article['url'] ?>/edit">Edit</a></h3>
                    </li>
                    <li>
                        <h3><a class="metabar__option" href="/article/<?=\Controllers\Article::$article['url'] ?>/delete">Delete</a></h3>
                    </li>
<?php endif; ?>              
                </ul>
            </div>
            <br>
<?php if ( !empty( \Controllers\Article::$user ) ): ?>
            <div class="comment__container">
                <h3 contenteditable="" id="comment" class="comment__content">Ваш комментарий...</h3>  
            </div>
            <button class="form__submit" type="submit" id="submit">Добавить комментарий</button>
<?php endif; ?>
<?php if ( !empty( Models\Comments::getOneByField( \Controllers\Article::$article['id'], 'article_id' )) ): ?>
            <br>
            <div class="comments">
<?php foreach( Models\Comments::getOneByField( \Controllers\Article::$article['id'], 'article_id' ) as $comment ): ?>
                <div class="comment__container">
                    <h3 class="comment__content"><?=$comment['content']?></h3>
                    <ul class="comment__metabar">
                        <li>
                           <h3><?=\Controllers\Article::$article['date'] ?></h3>
                        </li>
                        <li>
                            <img class="author__image" src="<?=Models\User::getOneById( $comment['author_id'] )[0]['image'] ?>">
                            <h3><a class="metabar__option" href="/user/<?=Models\User::getOneById( $comment['author_id'] )[0]['username'] ?>"><?=Models\User::getOneById( $comment['author_id'] )[0]['username'] ?></a></h3>
                        </li>
<?php if ( Models\User::isEditor( $_SESSION['authorized'], $comment['author_id'] ) ): ?>
                        <li>
                            <h3><a class="metabar__option" href="/comment/<?=$comment['id'] ?>/edit">Edit</a></h3>
                        </li>
                        <li>
                            <h3><a class="metabar__option" href="/comment/<?=$comment['id'] ?>/delete">Delete</a></h3>
                        </li>
<?php endif; ?>              
                </ul>
                </div>
<?php endforeach; ?>
            </div>
<?php endif; ?>
            <script type="text/javascript">
                $("#submit").click(function() {
                    
                    var comment = $('#comment').html();
                    
                    $.ajax({
                        type: "POST",
                        url: "",
                        data: {comment: comment}
                    }).done(function( result ){
                                
                            location.reload();

                    });
                        
                });
            </script>
