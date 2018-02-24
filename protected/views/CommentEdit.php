        <div class="content__commentedit">
            <nav class="commentedit__nav">
                <ul class="nav__ul">
                    <a class="nav__link" href="/dashboard"><li class="nav__li nav__link___choosen">Панель управления</li></a>
                    <a class="nav__link" href="/add"><li class="nav__li">Добавить</li></a>
                    <a class="nav__link" href="/pages"><li class="nav__li">Страницы</li></a>
                    <a class="nav__link" href="/articles"><li class="nav__li">Статьи</li></a>
                    <a class="nav__link" href="/user/<?=\Controllers\Comment::$user['username'] ?>"><li class="nav__li nav__li___user"><?=\Controllers\Comment::$user['username'] ?></li></a>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <div class="comment__container">
                <h3 contenteditable="" id="comment" class="comment__content"><?=\Controllers\Comment::$comment['content'] ?></h3>  
            </div>
            <button class="form__submit" type="submit" id="submit">Изменить комментарий</button>
            </div>
            <script type="text/javascript">
                $("#submit").click(function() {
                
                    var comment = $('#comment').html();
                    
                    $.ajax({
                        type: "POST",
                        url: "",
                        data: {comment: comment}
                    }).done(function( result )
                        {
                            window.history.back();
                        });
                        
                });
            </script>
