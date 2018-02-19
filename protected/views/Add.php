        <div class="content__add">
            <nav class="add__nav">
                <ul class="nav__ul">
                    <a class="nav__link" href="/dashboard"><li class="nav__li">Панель управления</li></a>
                    <a class="nav__link" href="/add"><li class="nav__li nav__link___choosen">Добавить</li></a>
                    <a class="nav__link" href="/pages"><li class="nav__li">Страницы</li></a>
                    <a class="nav__link" href="/articles"><li class="nav__li">Статьи</li></a>
                    <a class="nav__link" href="/profile"><li class="nav__li nav__li___user"><?=\Controllers\Add::$user['username'] ?></li></a>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <h1 class="articles__title">Добавить</h1>
            <h3><a class="article__add" href="/add/article">Добавить статью</a></h3>
            <br>
            <h3><a class="article__add" href="/add/page">Добавить страницу</a></h3>
