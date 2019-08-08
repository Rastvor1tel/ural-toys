<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
</main>
<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="footer__top">
                <div class="footer__column">
                    <div class="footer__logo">
                        <img class="footer__logo-img" src="<?=SITE_TEMPLATE_PATH?>/template/img/logo.svg" alt="">
                    </div>
                    <p class="footer__copy">
                        © 2016 — 2019 Ural-Toys.
                        <br>Все права защищены
                    </p>
                </div>
                <div class="footer__column">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "bottom-menu",
                        [
                            "ROOT_MENU_TYPE" => "top",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "left",
                            "USE_EXT" => "N",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ],
                        false
                    );?>
                </div>
                <div class="footer__column">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "bottom-menu",
                        [
                            "ROOT_MENU_TYPE" => "catalog",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "left",
                            "USE_EXT" => "N",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ],
                        false
                    );?>
                </div>
                <div class="footer__column">
                    <div class="footer__select">
                        <form action="/" method="post">
                            <label class="footer__select-item text-select_black text-select">
                                <select class="js-isSelectric">
                                    <option selected>Екатеринбург</option>
                                    <option>Выберите город</option>
                                </select>
                            </label>
                            <input type="submit" class="visually-hidden">
                        </form>
                    </div>
                    <p class="footer__text">
                        г. Березовский, ул. Уральская 142 Б
                    </p>
                    <p class="footer__text">
                        +7 (343) 270-22-02
                    </p>
                </div>
                <div class="footer__column">
                    <button type="button" class="footer__callback common-blue-button">
                        Вопрос руководителю
                    </button>
                    <a href="tel:+79122637575" class="footer__phone footer__text_bold">
                        +7 (912) 263-75-75
                    </a>
                    <a href="tel:+78002502271" class="footer__phone footer__text_bold">
                        8 800 250 22 71
                    </a>
                </div>
            </div>
            <div class="footer__bottom">
                <p class="footer__text footer__text_grey">
                    Интернет-магазин UralToys - Игрушки оптом. Екатеринбург
                </p>
                <a href="#" target="_blank" class="footer__policy">
                    Политика конфиденциальности
                </a>
                <div class="footer__popup">
                    Оставить пожелание по ассортименту
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</body>
</html>