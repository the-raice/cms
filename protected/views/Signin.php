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
