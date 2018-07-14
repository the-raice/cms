<?php if ( !empty( \Controllers\Lesson::$user ) ): ?>
                    <a class="nav__link" href="/user/<?=\Controllers\Lesson::$user['username'] ?>"><li class="nav__li nav__li___user"><?=\Controllers\Lesson::$user['username'] ?></li></a>
<?php else: ?>
                    <a class="nav__link" href="/signin"><li class="nav__li">Войти</li></a>
                    <a class="nav__link" href="/signup"><li class="nav__li">Регистрация</li></a>
<?php endif; ?>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <h1 class="lesson__title"><?=\Controllers\Lesson::$lesson['title'] ?></h1>
            <h3>
            <article class="header__lesson">
                <br>
<?php foreach ( \Controllers\Lesson::$step['content'] as $step ): ?>
                <h3 class="lesson__text"><?=$step ?></h3>
 <?php endforeach; ?>
            </article>
            <br>
            <?php if ( !empty( \Models\Steps::getOneByTwoFields( \Controllers\Lesson::$lesson['id'], 'lesson_id', $_GET['step'] + 1, 'step_order' ) ) ): ?> 
            <a class="lesson__button" href="?step=<? echo $_GET['step'] + 1; ?>">Далее</a>
            <?php else: ?>
            <a class="lesson__button" href="?action=complete">Завершить урок</a>
            <?php endif; ?>
            </h3>
            <div class="content__metabar">
                <ul class="metabar__list">
<?php if ( Models\User::isEditor( $_SESSION['authorized'], \Controllers\Lesson::$lesson['author_id'] ) ): ?>
                    <li>
                        <h3><a class="metabar__option" href="/lesson/<?=\Controllers\Lesson::$lesson['url'] ?>/edit">Edit</a></h3>
                    </li>
                    <li>
                        <h3><a class="metabar__option" href="/lesson/<?=\Controllers\Lesson::$lesson['url'] ?>/delete">Delete</a></h3>
                    </li>
<?php endif; ?>              
                </ul>
            </div>
            <br>
