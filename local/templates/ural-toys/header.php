<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

Loc::loadMessages(__FILE__);

Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=Edge">');
Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
Asset::getInstance()->addString('<meta name="theme-color" content="#f26522">');
Asset::getInstance()->addString('<meta name="HandheldFriendly" content="true">');
Asset::getInstance()->addString('<meta name="apple-mobile-web-app-capable" content="yes">');
Asset::getInstance()->addString('<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">');
Asset::getInstance()->addString('<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">');
Asset::getInstance()->addString('<link rel="preload" href="<?= SITE_TEMPLATE_PATH ?>/template/fonts/PTSans-400.woff2" as="font" crossorigin="">');
Asset::getInstance()->addString('<link rel="preload" href="<?= SITE_TEMPLATE_PATH ?>/template/fonts/Circle-400.woff2" as="font" crossorigin="">');

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/template/css/normalize.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/template/css/style.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/template/css/swiper.css');

Asset::getInstance()->addJs('//code.jquery.com/jquery-3.3.1.min.js');
Asset::getInstance()->addJs('//api-maps.yandex.ru/2.1/?apikey=3ba22bac-b430-4579-9da6-70a75b6d376f&amp;lang=ru_RU');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/js/map.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/libs/jquery.selectric.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/js/main-form.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/libs/nouislider.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/libs/swiper.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/js/bundle.js');
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->ShowHead(); ?>
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="header__top-wrap">
                <div class="header__top-mobile header-mobile">
                    <button type="button" class="header-mobile__burger js-openMobile">
                        <span></span><span></span><span></span>
                    </button>
                    <div class="header-mobile__wrapper js-mobileWrapper">
                        <button type="button" class="header-mobile__close js-closeMenu">
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#cross2"></use>
                            </svg>
                        </button>
                        <div class="header-mobile__subwrap">
                            <div class="header-mobile__detach js-detachElements">

                            </div>
                            <div class="header-mobile__manager">
                                <p class="header-mobile__text">Менеджер по Вашему региону</p>
                                <h2 class="header-mobile__name">Анна Кобякова</h2>
                                <p class="header-mobile__prop">
                                    <span class="header-mobile__text">Телефон:</span><span class="header-mobile__value">+7 (343) 270-22-02 (доб.207)</span>
                                </p>
                                <p class="header-mobile__prop">
                                    <span class="header-mobile__text">Мобильный:</span><span
                                            class="header-mobile__value">+7 (912) 263-75-75</span>
                                </p>
                                <p class="header-mobile__prop">
                                    <span class="header-mobile__text">ICQ:</span><span class="header-mobile__value">ICQ:  441-647-273</span>
                                </p>
                                <p class="header-mobile__prop">
                                    <span class="header-mobile__text">E-mail:</span><span class="header-mobile__value">anna_k@ural-toys.ru</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="header-mobile__overlay js-mobileOverlay"></div>
                </div>
                <div class="header__top-city">
                    <p class="header__city-title">
                        <svg>
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#mark"></use>
                        </svg>
                        <span class="header__city-name header__normal">
                  Ваш город:
                </span>
                    </p>
                    <button type="button" class="header__city-selected">
                        <span class="header__city-value header__bold js-valueCity">Тула</span>
                        <svg>
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#arrow-btn"></use>
                        </svg>
                    </button>
                </div>
                <div class="header__top-manager">
                    <p class="header__manager-name header__normal">
                        Ваш менеджер:
                    </p>
                    <span class="header__manager-value header__bold">
                 Александра
               </span>
                </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top-menu",
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
                <div class="header__top-subwrap">
                    <div class="header__top-phones">
                        <span class="header__phones-name">Т</span>
                        <a href="tel:+79122637575" class="header__phones-item header__bold">+7 (912) 263-75-75</a>
                        <a href="tel:+78002502271" class="header__phones-item header__bold"> 8 800 250 22 71</a>
                    </div>
                    <button type="button" data-target="js-openCallbackPopup"
                            class="header__top-callback js-callback common-blue-button">
                        Вопрос руководителю
                    </button>
                </div>
            </div>

        </div>
    </div>
    <div class="header__middle">
        <div class="container">
            <div class="header__middle-wrap">
                <div class="header__middle-logo">
                    <?if($APPLICATION->GetCurPage() == '/'):?>
                        <img class="header__logo" src="<?= SITE_TEMPLATE_PATH ?>/template/img/logo.png" alt="">
                    <?else:?>
                        <a href="/">
                            <img class="header__logo" src="<?= SITE_TEMPLATE_PATH ?>/template/img/logo.png" alt="">
                        </a>
                    <?endif;?>
                </div>
                <div class="header__middle-right">
                    <div class="header__middle-top">
                        <div class="header__search search">
                            <form action="">
                                <label class="search__label">
                                    <input type="search" class="search__input" placeholder="Поиск">
                                </label>
                                <span class="search__wrapper js-mobileSearch">
                        <button type="submit" class="search__submit">
                           <svg>
                       <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#search"></use>
                   </svg>
                        </button>
                    </span>
                            </form>
                        </div>
                        <div class="header__item header__item_manager">
                            <div class="header__item-visible">
                                <div class="header__item-icon">
                                    <svg>
                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#user"></use>
                                    </svg>
                                </div>
                                <div class="header__item-right">
                                    <p class="header__item-top">
                                        Petrova
                                    </p>
                                    <p class="header__item-bottom">
                                        Anastasiya
                                    </p>
                                </div>
                            </div>
                            <div class="header__item-hidden header__item-hidden_size_small">
                                <div class="header__hidden-container">
                                    <h2 class="header__hidden-title">
                                        Ваш профиль
                                    </h2>
                                    <a href="#" class="header__hidden-profile">
                                        Anastasiya Denisova
                                    </a>
                                    <ul class="header__hidden-list">
                                        <li class="header__hidden-item"><a href="#" class="header__hidden-link">Изменить
                                                персональные данные</a>
                                        </li>
                                        <li class="header__hidden-item"><a href="#" class="header__hidden-link">Управление
                                                рассылками</a>
                                        </li>
                                        <li class="header__hidden-item"><a href="#" class="header__hidden-link">Архив
                                                заказов</a>
                                        </li>
                                    </ul>
                                    <div class="header__hidden-actions">
                                        <a href="#" class="header__hidden-button common-blue-button">
                                            Перейти в профиль
                                        </a>
                                        <a href="#" class="header__hidden-logout">
                                            <svg>
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#logout"></use>
                                            </svg>
                                            <span>Выйти</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header__item header__item_fav">
                            <div class="header__item-visible">
                                <div class="header__item-icon">
                                    <svg>
                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#heart"></use>
                                    </svg>
                                    <div class="header__icon-count">
                                        12
                                    </div>
                                </div>
                                <div class="header__item-right">
                                    <p class="header__item-top">
                                        Избранное
                                    </p>
                                    <p class="header__item-bottom">
                                        Нет товаров
                                    </p>
                                </div>
                            </div>
                            <div class="header__item-hidden">
                                <div class="header__hidden-container">
                                    <div class="header__hidden-scroll">
                                        <h2 class="header__hidden-title">
                                            Избранное
                                        </h2>
                                        <div class="header__hidden-items header-items">
                                            <div class="header-items__elem js-elemItem">
                                                <div class="header-items__elem-image">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/template/img/fav-basket.png"
                                                         alt="" class="header-items__image">
                                                </div>
                                                <a href="#" class="header-items__elem-title">
                                                    Беговел. Hot wheels. 12" надув. колеса в кор.1 шт
                                                </a>
                                                <p class="header-items__elem-price">
                                                    2 010.96 ₽
                                                </p>
                                                <button type="button" class="header-items__elem-delete js-removeItem">
                                                    <svg>
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#cross"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="header-items__elem js-elemItem">
                                                <div class="header-items__elem-image">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/template/img/fav-basket.png"
                                                         alt="" class="header-items__image">
                                                </div>
                                                <a href="#" class="header-items__elem-title">
                                                    Беговел. Hot wheels. 12" надув. колеса в кор.1 шт
                                                </a>
                                                <p class="header-items__elem-price">
                                                    2 010.96 ₽
                                                </p>
                                                <button type="button" class="header-items__elem-delete js-removeItem">
                                                    <svg>
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#cross"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="header-items__elem js-elemItem">
                                                <div class="header-items__elem-image">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/template/img/fav-basket.png"
                                                         alt="" class="header-items__image">
                                                </div>
                                                <a href="#" class="header-items__elem-title">
                                                    Беговел. Hot wheels. 12" надув. колеса в кор.1 шт
                                                </a>
                                                <p class="header-items__elem-price">
                                                    2 010.96 ₽
                                                </p>
                                                <button type="button" class="header-items__elem-delete js-removeItem">
                                                    <svg>
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#cross"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="header-items__elem js-elemItem">
                                                <div class="header-items__elem-image">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/template/img/fav-basket.png"
                                                         alt="" class="header-items__image">
                                                </div>
                                                <a href="#" class="header-items__elem-title">
                                                    Беговел. Hot wheels. 12" надув. колеса в кор.1 шт
                                                </a>
                                                <p class="header-items__elem-price">
                                                    2 010.96 ₽
                                                </p>
                                                <button type="button" class="header-items__elem-delete js-removeItem">
                                                    <svg>
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#cross"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="header-items__elem js-elemItem">
                                                <div class="header-items__elem-image">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/template/img/fav-basket.png"
                                                         alt="" class="header-items__image">
                                                </div>
                                                <a href="#" class="header-items__elem-title">
                                                    Беговел. Hot wheels. 12" надув. колеса в кор.1 шт
                                                </a>
                                                <p class="header-items__elem-price">
                                                    2 010.96 ₽
                                                </p>
                                                <button type="button" class="header-items__elem-delete js-removeItem">
                                                    <svg>
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#cross"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header__hidden-actions">
                                        <a href="#" class="header__hidden-button common-blue-button">
                                            Перейти в корзину
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header__item header__item_cart">
                            <div class="header__item-visible">
                                <div class="header__item-icon">
                                    <svg>
                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#cart"></use>
                                    </svg>
                                    <div class="header__icon-count">
                                        12
                                    </div>
                                </div>
                                <div class="header__item-right">
                                    <p class="header__item-top">
                                        Сумма
                                    </p>
                                    <p class="header__item-bottom header__item-bottom_bold">
                                        70 000 <span>₽</span>
                                    </p>
                                </div>
                            </div>
                            <div class="header__item-hidden">
                                <div class="header__hidden-container">
                                    <div class="header__hidden-scroll">
                                        <h2 class="header__hidden-title">
                                            Корзина
                                        </h2>
                                        <div class="header__hidden-items header-items">
                                            <div class="header-items__elem js-elemItem">
                                                <div class="header-items__elem-image">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/template/img/fav-basket.png"
                                                         alt="" class="header-items__image">
                                                </div>
                                                <a href="#" class="header-items__elem-title">
                                                    Беговел. Hot wheels. 12" надув. колеса в кор.1 шт
                                                </a>
                                                <p class="header-items__elem-price">
                                                    2 010.96 ₽
                                                </p>
                                                <button type="button" class="header-items__elem-delete js-removeItem">
                                                    <svg>
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#cross"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="header-items__elem js-elemItem">
                                                <div class="header-items__elem-image">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/template/img/fav-basket.png"
                                                         alt="" class="header-items__image">
                                                </div>
                                                <a href="#" class="header-items__elem-title">
                                                    Беговел. Hot wheels. 12" надув. колеса в кор.1 шт
                                                </a>
                                                <p class="header-items__elem-price">
                                                    2 010.96 ₽
                                                </p>
                                                <button type="button" class="header-items__elem-delete js-removeItem">
                                                    <svg>
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#cross"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="header-items__elem js-elemItem">
                                                <div class="header-items__elem-image">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/template/img/fav-basket.png"
                                                         alt="" class="header-items__image">
                                                </div>
                                                <a href="#" class="header-items__elem-title">
                                                    Беговел. Hot wheels. 12" надув. колеса в кор.1 шт
                                                </a>
                                                <p class="header-items__elem-price">
                                                    2 010.96 ₽
                                                </p>
                                                <button type="button" class="header-items__elem-delete js-removeItem">
                                                    <svg>
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#cross"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="header-items__elem js-elemItem">
                                                <div class="header-items__elem-image">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/template/img/fav-basket.png"
                                                         alt="" class="header-items__image">
                                                </div>
                                                <a href="#" class="header-items__elem-title">
                                                    Беговел. Hot wheels. 12" надув. колеса в кор.1 шт
                                                </a>
                                                <p class="header-items__elem-price">
                                                    2 010.96 ₽
                                                </p>
                                                <button type="button" class="header-items__elem-delete js-removeItem">
                                                    <svg>
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#cross"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="header-items__elem js-elemItem">
                                                <div class="header-items__elem-image">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/template/img/fav-basket.png"
                                                         alt="" class="header-items__image">
                                                </div>
                                                <a href="#" class="header-items__elem-title">
                                                    Беговел. Hot wheels. 12" надув. колеса в кор.1 шт
                                                </a>
                                                <p class="header-items__elem-price">
                                                    2 010.96 ₽
                                                </p>
                                                <button type="button" class="header-items__elem-delete js-removeItem">
                                                    <svg>
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#cross"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header__hidden-actions">
                                        <div class="header__hidden-price">
                                            <span> Итог</span>
                                            <span class="header__hidden-value">
                            9 000.96 <span>₽</span>
                        </span>
                                        </div>
                                        <a href="#" class="header__hidden-button common-blue-button">
                                            Перейти в корзину
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header__middle-bottom">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "catalog",
                            [
                                "ROOT_MENU_TYPE" => "catalog",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(
                                ),
                                "MAX_LEVEL" => "3",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "Y",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N",
                                "SUBELEMENTS_LIMIT" => 5
                            ],
                            false
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<main class="main">