        <div class="content__pageedit">
            <nav class="pageedit__nav">
                <ul class="nav__ul">
                    <a class="nav__link" href="/dashboard"><li class="nav__li">Панель управления</li></a>
                    <a class="nav__link" href="/add"><li class="nav__li">Добавить</li></a>
                    <a class="nav__link" href="/pages"><li class="nav__li">Страницы</li></a>
                    <a class="nav__link" href="/articles"><li class="nav__li nav__link___choosen">Статьи</li></a>
<?php $class = '\Controllers\\' . explode('/', str_replace( '-', '', $_SERVER['REQUEST_URI']) )[1]; ?>
                    <a class="nav__link" href="/profile"><li class="nav__li nav__li___user"><?=$class::$user['username'] ?></li></a>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <h1 contenteditable="" id="title" class="article__title"><?=$class::$page['title'] ?></h1>
            <h3>
            <article contenteditable="" id="content" class="header__article">
                <br>
<?php foreach ( $class::$page['content'] as $page ): ?>
                <h3 class="article__text"><?=$page ?></h3>
 <?php endforeach; ?>
            </article>
            </h3>
            <button class="form__submit" type="submit" id="submit">Сохранить</button>
            <div class="content__metabar">
                <ul class="metabar__list">
                    <li>
                       <h3><?=$class::$page['date'] ?></h3>
                    </li>
                    <li>
                        <img class="author__image" src="<?=Models\User::getOneById( $class::$page['author_id'] )[0]['image'] ?>">
                        <h3><a class="metabar__option" href="/user/<?=Models\User::getOneById( $class::$page['author_id'] )[0]['username'] ?>"><?=Models\User::getOneById( $class::$page['author_id'] )[0]['username'] ?></a></h3>
                    </li>
<?php if ( Models\User::isEditor( $_SESSION['authorized'], $class::$page['author_id'] ) ): ?>
                    <li>
                        <h3><a class="metabar__option" href="/article/<?=$class::$page['url'] ?>/delete">Delete</a></h3>
                    </li>
<?php endif; ?>              
                </ul>
            </div>
            <script type="text/javascript">
                $("#submit").click(function() {
                
                    var title = $('#title').html();
                    var content = $('#content').html();
                    $.ajax({
                        type: "POST",
                        url: "",
                        data: {title: title, content: content}
                    }).done(function( result )
                        {
                            $(location).attr('href', result)
                        });
                        
                });
            </script>
