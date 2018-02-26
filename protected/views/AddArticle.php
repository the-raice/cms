                    <a class="nav__link" href="/user/<?=Models\User::getOneById( \Controllers\Add::$user )[0]['username'] ?>"><li class="nav__li nav__li___user"><?=Models\User::getOneById( \Controllers\Add::$user )[0]['username'] ?></li></a>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <h1 contenteditable="" id="title" class="article__title">Название статьи</h1>
            <br>
            <h3 class="article__url___link">http://<?=$_SERVER['HTTP_HOST']?>/article<span id="url" contenteditable="">nazvanie-statyi</span><h3>
            <article contenteditable="" id="content" class="header__article">
                <br>
                <h3 class="article__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend ex in imperdiet ultricies. Cras velit tortor, ornare a lacus ac, suscipit semper nulla. Vestibulum odio tellus, eleifend in congue sed, porttitor eu odio. Fusce rhoncus dolor non sapien dapibus, eget tincidunt libero pretium. Proin aliquet erat in dui placerat, ut imperdiet sapien porta. Pellentesque nisi nibh, maximus eu convallis id, semper ut nulla. Donec sollicitudin metus vitae ex pretium, sed mattis eros venenatis. Donec at dui metus. Fusce euismod dignissim sem, in gravida felis. Nulla risus leo, consectetur non tempor elementum, sagittis vel nisi. Aliquam metus lorem, venenatis at tortor eu, consectetur consectetur ex. Duis ultricies interdum viverra. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus quis sagittis orci, et iaculis tortor.</h3>
                <h3 class="article__text">Fusce feugiat in est ut mollis. Nullam scelerisque diam vel libero elementum efficitur. Vestibulum ultricies id ipsum nec lobortis. Cras et pellentesque risus. Nunc felis turpis, eleifend at efficitur vel, convallis ut dolor. Nulla ultricies leo at quam ultrices, id suscipit sapien malesuada. Integer sollicitudin pulvinar turpis, ac tincidunt quam pretium ut. Nullam non consectetur ante.</h3>
                <h3 class="article__text">Maecenas viverra est vitae turpis condimentum, vel varius massa pellentesque. Sed eleifend augue sit amet pharetra vehicula. Mauris sed tellus rutrum odio vehicula consequat at at mauris. Integer facilisis tincidunt interdum. In in mi molestie, dictum tellus quis, pharetra lorem. Praesent vehicula massa vitae metus molestie congue. In sit amet iaculis orci.</h3>
            </article>
            <br>
            <button class="form__submit" type="submit" id="submit">Добавить</button>
            <div class="content__metabar">
                <ul class="metabar__list">
                    <li>
                       <h3><?php echo date("Y-m-d"); ?></h3>
                    </li>
                    <li>
                        <img class="author__image" src="<?=Models\User::getOneById( \Controllers\Add::$user )[0]['image'] ?>">
                        <h3><a class="metabar__option" href="/user/<?=Models\User::getOneById( \Controllers\Add::$user )[0]['username'] ?>"><?=Models\User::getOneById( \Controllers\Add::$user )[0]['username'] ?></a></h3>
                    </li>          
                </ul>
            </div>
            <script type="text/javascript">
                $("#submit").click(function() {
                    $('.error').remove();
                    var title = $('#title').html();
                    var content = $('#content').html();
                    var url = $('#url').html();
                    
                    $.ajax({
                        type: "POST",
                        url: "",
                        data: {title: title, url: url, content: content}
                    }).done(function( result )
                        {
                            
                            if ( result != false ) {
                                
                                $(location).attr('href', result);
                                
                            } 
                            
                            if ( result == false ) {
                               
                                $('html, body').animate({scrollTop:0}, 'slow');
                                $('.content__header').prepend('<div class="error">Данный URL уже занят</div>');
                                
                            }

                        });
                        
                });
            </script>
