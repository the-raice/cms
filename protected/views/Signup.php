        <div class="content__signup">
            <nav class="signup__nav">
                <ul class="nav__ul">
                    <a class="nav__link" href="/"><li class="nav__li">Главная</li></a>
                    <a class="nav__link" href="/signup"><li class="nav__li nav__link___choosen">Регистрация</li></a>
                    <a class="nav__link" href="/signin"><li class="nav__li">Войти</li></a>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <h1 class="content__header___title">Регистрация</h1>
            <br>
            <div class="header__form">
                <form action="" method="post">
                    <?php if ( \Controllers\Signup::$error != null ): ?>
                    <span class="error"><?=\Controllers\Signup::$error ?></span>
                    <br>
                    <?php endif; ?>
                    <label class="form__label" for="username">Имя пользователя:</label>
                    <br>
                    <input value="<?=\Controllers\Signup::$username?>" required="" class="form__input" type="text" name="username">
                    <br>
                    <label class="form__label" for="email">E-mail:</label>
                    <br>
                    <input value="<?=\Controllers\Signup::$email?>" required="" class="form__input" type="email" name="email">
                    <br>
                    <label class="form__label" for="password">Пароль:</label>
                    <br>
                    <input required="" class="form__input" type="password" name="password">
                    <br>
                    <label class="form__label" for="repassword">Повторите пароль:</label>
                    <br>
                    <input required="" class="form__input" type="password" name="repassword">
                    <br>
                    <br>
                    <input value="Регистрация" class="form__submit" type="submit" name="submit">
                    <br>
                </form>
            </div>
        </header>
