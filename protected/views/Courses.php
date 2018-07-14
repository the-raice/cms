                    <a class="nav__link" href="/user/<?=\Controllers\Courses::$user['username'] ?>"><li class="nav__li nav__li___user"> <?=\Controllers\Courses::$user['username'] ?></li></a>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <h1 class="courses__title">Курсы</h1>
            <h3><a class="course__add" href="/add/course">Добавить</a></h3>
            <br>
<?php foreach ( \Controllers\Courses::$courses as $course ): ?>
            <article class="content__course">
                <div class="course__column">
                    <h3 class="course__title"><a class="course__link" href="/course/<?=$course['url'] ?>"><?=$course['title'] ?></a></h3>
                </div>
                <div class="course__column course__column___right">
                    <ul class="metabar__list">
<?php if ( Models\User::isEditor( $_SESSION['authorized'], $course['author_id'] ) ): ?>
                        <li>
                            <h3><a class="metabar__option" href="/course/<?=$course['url'] ?>/edit">Редактировать</a></h3>
                        </li>
                        <li>
                            <h3><a class="metabar__option" href="/course/<?=$course['url'] ?>/delete">Удалить</a></h3>
                        </li>
<?php endif; ?> 
                        <li>
                           <h3><?=$course['date'] ?></h3>
                        </li>
                        <li>
                            <img class="author__image" src="<?=Models\User::getOneById( $course['author_id'] )[0]['image'] ?>">
                            <h3><a class="metabar__option" href="/user/<?=Models\User::getOneById( $course['author_id'] )[0]['username'] ?>"><?=Models\User::getOneById( $course['author_id'] )[0]['username'] ?></a></h3>
                        </li>                  
                    </ul>
                </div>
            </article>
<?php endforeach; ?>
