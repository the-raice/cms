        <div class="content__signin">
            <nav class="signin__nav">
                <ul class="nav__ul">
                    <a class="nav__link" href="/"><li class="nav__li">Главная</li></a>
                    <a class="nav__link" href="/signup"><li class="nav__li">Регистрация</li></a>
                    <a class="nav__link" href="/signin"><li class="nav__li nav__link___choosen">Войти</li></a>
                </ul>
            </nav>
        </div>
        <header class="content__header">
            <h1 class="content__header___title">Войти</h1>
            <br>
            <div class="header__form">
                <form action="" method="post">
                    <?php if ( \Controllers\Signin::$error != null ): ?>
                    <span class="error"><?=\Controllers\Signin::$error ?></span>
                    <br>
                    <?php endif; ?>
                    <label class="form__label" for="username">Имя пользователя или e-mail:</label>
                    <br>
                    <input value="<?=\Controllers\Signup::$username?>" required="" class="form__input" type="text" name="login">
                    <br>
                    <label class="form__label" for="password">Пароль:</label>
                    <br>
                    <input required="" class="form__input" type="password" name="password">
                    <br>
                    <br>
                    <input value="Войти" class="form__submit" type="submit" name="submit">
                    <br>
                </form>
            </div>
        </header>
