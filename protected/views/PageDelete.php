        <div class="content__pagedelete">
            <nav class="pagedelete__nav">
                <ul class="nav__ul">
                    <a class="nav__link" href="/dashboard"><li class="nav__li">Панель управления</li></a>
                    <a class="nav__link" href="/add"><li class="nav__li">Добавить</li></a>
                    <a class="nav__link" href="/pages"><li class="nav__li">Страницы</li></a>
                    <a class="nav__link" href="/articles"><li class="nav__li nav__link___choosen">Статьи</li></a>
<?php $class = '\Controllers\\' . explode('/', str_replace( '-', '', $_SERVER['REQUEST_URI']) )[1]; ?>
                    <a class="nav__link" href="/user/<?=$class::$user['username'] ?>"><li class="nav__li nav__li___user"><?=$class::$user['username'] ?></li></a>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <h1 id="title" class="article__title">Вы действительно хотите удалить эту страницу?</h1>
            <br>
            <button class="form__submit" type="submit" id="submit">Удалить</button>
            <script type="text/javascript">
                $("#submit").click(function() {
                    var agreement = true;
                    $.ajax({
                        type: "POST",
                        url: "",
                        data: {agreement: agreement}
                    }).done(function( result )
                        {
                            $(location).attr('href', '/pages')
                        });
                        
                });
            </script>
