                    <a class="nav__link" href="/user/<?=\Controllers\Course::$user['username'] ?>"><li class="nav__li nav__li___user"><?=\Controllers\Course::$user['username'] ?></li></a>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <h1 contenteditable="" id="title" class="article__title"><?=\Controllers\Course::$course['title'] ?></h1>
            <h3>
            <article contenteditable="" id="content" class="header__article">
                <br>
<?php foreach ( \Controllers\Course::$course['content'] as $course ): ?>
                <h3 class="article__text"><?=$course ?></h3>
 <?php endforeach; ?>
            </article>
            </h3>
            <button class="form__submit" type="submit" id="submit">Сохранить</button>
            <div class="content__metabar">
                <ul class="metabar__list">
                    <li>
                       <h3><?=\Controllers\Course::$course['date'] ?></h3>
                    </li>
                    <li>
                        <img class="author__image" src="<?=Models\User::getOneById( \Controllers\Course::$course['author_id'] )[0]['image'] ?>">
                        <h3><a class="metabar__option" href="/user/<?=Models\User::getOneById( \Controllers\Course::$course['author_id'] )[0]['username'] ?>"><?=Models\User::getOneById( \Controllers\Course::$course['author_id'] )[0]['username'] ?></a></h3>
                    </li>
<?php if ( Models\User::isEditor( $_SESSION['authorized'], \Controllers\Course::$course['author_id'] ) ): ?>
                    <li>
                        <h3><a class="metabar__option" href="/article/<?=\Controllers\Course::$course['url'] ?>/delete">Delete</a></h3>
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
