                    <a class="nav__link" href="/user/<?=\Controllers\Course::$user['username'] ?>"><li class="nav__li nav__li___user"><?=\Controllers\Course::$user['username'] ?></li></a>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <h1 class="course__title"><?=\Controllers\Course::$course['title'] ?></h1>
            <h3>
            <article class="header__course">
                <br>
<?php foreach ( \Controllers\Course::$course['content'] as $course ): ?>
                <h3 class="course__text"><?=$course ?></h3>
 <?php endforeach; ?>
 <?php foreach ( \Controllers\Course::$lessons as $lesson ): ?>
            </article>
            <article class="content__lesson">
                <div class="lesson__column">
                    <h3 class="lesson__title"><a class="lesson__link" href="/course/<?=\Controllers\Course::$course['url'] ?>/lesson/<?=$lesson['url'] ?>?step=1">Урок <?=$lesson['lesson_order'] ?>. <?=$lesson['title'] ?></a></h3>
                </div>
                <div class="lesson__column lesson__column___right">
                    <ul class="metabar__list">
<?php if ( Models\User::isEditor( $_SESSION['authorized'], \Controllers\Course::$course['author_id'] ) ): ?>
                        <li>
                            <h3><a class="metabar__option" href="/course/<?=$lesson['url'] ?>//course/<?=\Controllers\Course::$course['url'] ?>/lesson/<?=$lesson['url'] ?>/edit">Редактировать</a></h3>
                        </li>
                        <li>
                            <h3><a class="metabar__option" href="/course/<?=\Controllers\Course::$course['url'] ?>/lesson/<?=$lesson['url'] ?>/delete">Удалить</a></h3>
                        </li>
<?php else: ?>        <li>
                            <h3><img style="vertical-align: middle; margin-right: 10px;" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCIgdmlld0JveD0iMCAwIDk3LjE2IDk3LjE2IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA5Ny4xNiA5Ny4xNjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00OC41OCwwQzIxLjc5MywwLDAsMjEuNzkzLDAsNDguNThzMjEuNzkzLDQ4LjU4LDQ4LjU4LDQ4LjU4czQ4LjU4LTIxLjc5Myw0OC41OC00OC41OFM3NS4zNjcsMCw0OC41OCwweiBNNDguNTgsODYuODIzICAgIGMtMjEuMDg3LDAtMzguMjQ0LTE3LjE1NS0zOC4yNDQtMzguMjQzUzI3LjQ5MywxMC4zMzcsNDguNTgsMTAuMzM3Uzg2LjgyNCwyNy40OTIsODYuODI0LDQ4LjU4UzY5LjY2Nyw4Ni44MjMsNDguNTgsODYuODIzeiIgZmlsbD0iIzAwMDAwMCIvPgoJCTxwYXRoIGQ9Ik03My44OTgsNDcuMDhINTIuMDY2VjIwLjgzYzAtMi4yMDktMS43OTEtNC00LTRjLTIuMjA5LDAtNCwxLjc5MS00LDR2MzAuMjVjMCwyLjIwOSwxLjc5MSw0LDQsNGgyNS44MzIgICAgYzIuMjA5LDAsNC0xLjc5MSw0LTRTNzYuMTA3LDQ3LjA4LDczLjg5OCw0Ny4wOHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /> <?=$lesson['duration'] ?> минут</h3>
                        </li>
                        <li>
                            <?php if ( empty( \Models\Actions::getOneByTwoFields( $lesson['id'], 'lesson_id', \Controllers\Course::$user['id'], 'user_id' ) ) ): ?>
                            <h3 style="margin-right: 9rem;">
                            <img style="vertical-align: middle; margin-right: 10px; height: 30px; width: 30px;" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUyIDUyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MiA1MjsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIyNHB4IiBoZWlnaHQ9IjI0cHgiPgo8Zz4KCTxwYXRoIGQ9Ik0yNiwwQzExLjY2NCwwLDAsMTEuNjYzLDAsMjZzMTEuNjY0LDI2LDI2LDI2czI2LTExLjY2MywyNi0yNlM0MC4zMzYsMCwyNiwweiBNMjYsNTBDMTIuNzY3LDUwLDIsMzkuMjMzLDIsMjYgICBTMTIuNzY3LDIsMjYsMnMyNCwxMC43NjcsMjQsMjRTMzkuMjMzLDUwLDI2LDUweiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTM4LjI1MiwxNS4zMzZsLTE1LjM2OSwxNy4yOWwtOS4yNTktNy40MDdjLTAuNDMtMC4zNDUtMS4wNjEtMC4yNzQtMS40MDUsMC4xNTZjLTAuMzQ1LDAuNDMyLTAuMjc1LDEuMDYxLDAuMTU2LDEuNDA2ICAgbDEwLDhDMjIuNTU5LDM0LjkyOCwyMi43OCwzNSwyMywzNWMwLjI3NiwwLDAuNTUxLTAuMTE0LDAuNzQ4LTAuMzM2bDE2LTE4YzAuMzY3LTAuNDEyLDAuMzMtMS4wNDUtMC4wODMtMS40MTEgICBDMzkuMjUxLDE0Ljg4NSwzOC42MiwxNC45MjIsMzguMjUyLDE1LjMzNnoiIGZpbGw9IiMwMDAwMDAiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /> 0%</h3>
                            <?php else: ?>
                            <h3>
                            <img style="vertical-align: middle; margin-right: 10px; height: 30px; width: 30px;" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUwIDUwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MCA1MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxjaXJjbGUgc3R5bGU9ImZpbGw6IzI1QUU4ODsiIGN4PSIyNSIgY3k9IjI1IiByPSIyNSIvPgo8cG9seWxpbmUgc3R5bGU9ImZpbGw6bm9uZTtzdHJva2U6I0ZGRkZGRjtzdHJva2Utd2lkdGg6MjtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7IiBwb2ludHM9IiAgMzgsMTUgMjIsMzMgMTIsMjUgIi8+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /> 100%</h3>
                            <li style="display: inline-block; width: 4.8rem;">
                                <h3>
                                        <div style="width: <?php echo (8/5) *  ( \Models\Actions::getOneByTwoFields( $lesson['id'], 'lesson_id', \Controllers\Course::$user['id'], 'user_id' )[0]['result'] ) ?>rem;" class="nd-stars">
                                            <div data-reviews-stars="" style="width: 94%;"></div>
                                        </div>
                                </h3>
                            </li>  
                            <?php endif; ?>
                        </li>
                           
<?php endif; ?> 
                                   
                    </ul>
                </div>
            </article>
<?php endforeach; ?>
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
<?php if ( !empty( \Controllers\Course::$user ) ): ?>
            <br>
            <h1>Отзывы:</h1>
            <br>
            <div class="comment__container">
                <h3 contenteditable="" id="comment" class="comment__content">Ваш отзыв...</h3>  
            </div>
            <div id="reviewStars-input">
                <input id="star-4" type="radio" name="reviewStars"/>
                <label title="gorgeous" for="star-4"></label>

                <input id="star-3" type="radio" name="reviewStars"/>
                <label title="good" for="star-3"></label>

                <input id="star-2" type="radio" name="reviewStars"/>
                <label title="regular" for="star-2"></label>

                <input id="star-1" type="radio" name="reviewStars"/>
                <label title="poor" for="star-1"></label>

                <input id="star-0" type="radio" name="reviewStars"/>
                <label title="bad" for="star-0"></label>
            </div>
            <button class="form__submit" type="submit" id="submit">Добавить отзыв</button>
<?php endif; ?>
<?php if ( !empty( Models\Comments::getOneByField( \Controllers\Course::$course['id'], 'course_id' )) ): ?>
            <br>
            <div class="comments">
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
                    
                    var star0 = $('#star-0').prop("checked");
                    var star1 = $('#star-1').prop("checked");
                    var star2 = $('#star-2').prop("checked");
                    var star3 = $('#star-3').prop("checked");
                    var star4 = $('#star-4').prop("checked");

                    $.ajax({
                        type: "POST",
                        url: "",
                        data: {comment: comment, stars: [star0, star1, star2, star3, star4]}
                    }).done(function( result ){
                                
                        location.reload();

                    });
                        
                });
            </script>
