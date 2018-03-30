        </div>
    </div>
    <footer class="footer">
        <nav class="footer__nav">
            <div class="nav__column">
                <ul class="nav__ul">
                    <li class="nav__li nav__link___choosen"><h4><a class="nav__link" href="/">Главная</a></h4></li>
<?php if ( empty( $_SESSION['authorized'] ) ): ?>
                    <li class="nav__li"><h4><a class="nav__link" href="/signup">Регистрация</a></h4></li>
                    <li class="nav__li"><h4><a class="nav__link" href="/signin">Войти</a></h4></li>
<?php else: ?>
                    <li class="nav__li"><h4><a class="nav__link" href="/logout">Выйти</a></h4></li>
                    <li class="nav__li"><h4><a class="nav__link" href="/support">Служба поддержки</a></h4></li>
<?php endif; ?>
                </ul>
            </div>
            <?php

            $c = count($pages);
            
            ?>
            <?php for( $i = 1 ; $i <= $c; ): ?>
            <div class="nav__column">
                <ul class="nav__ul">
                <?php foreach ( $pages as $page ): ?>
                    <?php if ( ($i % 6) != 0 ): ?>
                    <li class="nav__li nav__link___choosen"><h4><a class="nav__link" href="/<?=$page['url'] ?>"><?=$page['title'] ?></a></h4></li>
                    <?php $i++; ?>
                    <?php else: ?>
                </ul>
            </div>
            <div class="nav__column">
                <ul class="nav__ul">
                    <li class="nav__li nav__link___choosen"><h4><a class="nav__link" href="/<?=$page['url'] ?>"><?=$page['title'] ?></a></h4></li> 
                    <?php $i++; ?>                    
                    <?php endif; ?>
                <?php endforeach; ?>
                </ul>
            </div>
            <?php endfor; ?>
        </nav>
    </footer>
    <script src="/assets/js/pagePreloadEffectClassie.js"></script>
    <script src="/assets/js/pagePreloadEffectPathLoader.js"></script>
    <script src="/assets/js/pagePreloadEffectMain.js"></script>
</body>
</html>
