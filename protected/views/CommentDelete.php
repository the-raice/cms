<?php $class = '\Controllers\\' . explode('/', str_replace( '-', '', $_SERVER['REQUEST_URI']) )[1]; ?>
                    <a class="nav__link" href="/user/<?=$class::$user['username'] ?>"><li class="nav__li nav__li___user"><?=$class::$user['username'] ?></li></a>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <h1 id="title" class="article__title">Вы действительно хотите удалить данный комментарий?</h1>
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
                            window.history.back();
                        });
                        
                });
            </script>
