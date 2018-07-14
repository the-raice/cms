        <div class="content__buycourse">
            <nav class="buycourse__nav">
                <ul class="nav__ul">
<?php if ( !empty( \Controllers\Course::$user ) ): ?>
                    <a class="nav__link" href="/dashboard"><li class="nav__li it1">Панель управления</li></a>
                    <a class="nav__link" href="/pages"><li class="nav__li it2">Страницы</li></a>
                    <a class="nav__link" href="/articles"><li class="nav__li it3">Статьи</li></a>
                    <a class="nav__link" href="/courses"><li class="nav__li nav__link___choosen it4">Курсы</li></a>
                    <a class="nav__link" href="/user/<?=\Controllers\Course::$user['username'] ?>"><li class="nav__li nav__li___user"><?=\Controllers\Course::$user['username'] ?></li></a>
<?php else: ?>
                    <a class="nav__link" href="/signin"><li class="nav__li">Войти</li></a>
                    <a class="nav__link" href="/signup"><li class="nav__li">Регистрация</li></a>
<?php endif; ?>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <h1 class="course__title"><?=\Controllers\Course::$course['title'] ?></h1>
            <h3>
            <article class="header__course">
                <br>
<?php foreach ( \Controllers\Course::$course['preview'] as $course ): ?>
                <h3 class="course__text"><?=$course ?></h3>
 <?php endforeach; ?>
                <br>
                <ul class="course__details">
                <li><h3>Рейтинг:</h3>
                <?php 
                
                foreach ( Models\Comments::getOneByField( \Controllers\Course::$course['id'], 'course_id' ) as $a ):
                
                    $sum += $a['rating'];
                
                endforeach;
                
                $count = count(Models\Comments::getOneByField( \Controllers\Course::$course['id'], 'course_id' ) );
                
                ?>
                <div style="width: <?php echo (8/5) *  ( $sum / $count ) ?>rem;" class="nd-stars">
                    <div data-reviews-stars="" style="width: 94%;"></div>
                </div>
                </li>                
                <li><h3>Уровень:</h3>
                <?php for ( $i = 0; $i < \Controllers\Course::$course['level']; $i++ ): ?>
                    <div style="display: inline-block; background: #2e3d49; border-radius: 50%; width: 1.5rem; height: 1.5rem;"></div>
                <?php endfor; ?>
                <?php for ( $i = 3; $i > \Controllers\Course::$course['level']; $i-- ): ?>
                    <div style="display: inline-block; border: 0.2rem solid #2e3d49; border-radius: 50%; width: 1.2rem; height: 1.2rem;"></div>
                <?php endfor; ?>
                </li>
                <li><h3>Время обучения:</h3>
                <h3><?=\Controllers\Course::$course['timeline'] ?></h3>
                </li>
                </ul>
                <br>               
                <a class="buycourse__button" href="?action=buy">Попробовать и купить курс за <?=\Controllers\Course::$course['price']?>$</a>
            </article>
            
            </h3>
            <div class="content__metabar">
                    <li>
                        <img class="author__image" src="<?=Models\User::getOneById( \Controllers\Course::$course['author_id'] )[0]['image'] ?>">
                        <h3><a class="metabar__option" href="/user/<?=Models\User::getOneById( \Controllers\Course::$course['author_id'] )[0]['username'] ?>"><?=Models\User::getOneById( \Controllers\Course::$course['author_id'] )[0]['username'] ?></a></h3>
                    </li>
<?php if ( Models\User::isEditor( $_SESSION['authorized'], \Controllers\Course::$course['author_id'] ) ): ?>
                    <li>
                        <h3><a class="metabar__option" href="/course/<?=\Controllers\Course::$course['url'] ?>/edit">Edit</a></h3>
                    </li>
                    <li>
                        <h3><a class="metabar__option" href="/course/<?=\Controllers\Course::$course['url'] ?>/delete">Delete</a></h3>
                    </li>
<?php endif; ?>              
                </ul>
            </div>
            <br>
<?php if ( !empty( Models\Comments::getOneByField( \Controllers\Course::$course['id'], 'course_id' )) ): ?>
            <div class="comments">
            <h1>Отзывы:</h1>
            <br>
<?php foreach( Models\Comments::getOneByField( \Controllers\Course::$course['id'], 'course_id' ) as $comment ): ?>
                <div class="comment__container">
                    <div class="comment__authorname">
                        <h2><?=Models\User::getOneById( $comment['author_id'] )[0]['first_name'] ?> <?=substr( Models\User::getOneById( $comment['author_id'] )[0]['last_name'], 0, 1) ?>.</h2>
                    </div>
                    <div class="comment__rating">
                        <div style="width: <?php echo (8/5) * $comment['rating']; ?>rem;" class="nd-stars">
                                <div data-reviews-stars="" style="width: 94%;"></div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <h3 class="comment__content"><?=$comment['content']?></h3>
                    <ul class="comment__metabar">
                        <li>
                           <h3><?=$comment['date'] ?></h3>
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
