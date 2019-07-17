<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");

$APPLICATION->IncludeComponent(
    "bitrix:catalog.section",
    "sale-slider",
    [
        "IBLOCK_TYPE" => "services",
        "IBLOCK_ID" => "11",
        "SECTION_ID" => "1565",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "ID",
        "SORT_ORDER2" => "ASC",
        "PROPERTY_CODE" => [
            0 => "SHOW_SLIDER",
            1 => "SHOW_MORE",
            2 => "ADDITIONAL_TEXT",
            3 => "ADDITIONAL_HEADER",
            4 => "BACKGROUND_COLOR"
        ],
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
    ],
    false
);
?>
<?/*
    <section class="catalog-grid">
        <div class="catalog-grid__title">
            <div class="container">
                <h2 class="section-title catalog-grid__title">
                    Каталог
                </h2>
            </div>
        </div>
        <div class="container">
            <div class="catalog-grid__wrap">
                <div class="catalog-grid__body">
                    <div class="catalog-grid__item catalog-grid__item_size_big catalog-grid__item_category">
                        <div class="catalog-grid__item-wrap">
                            <a href="#" class="catalog-grid__item-category">
                                <span class="catalog-grid__item-plus"></span>
                                57
                            </a>
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog1"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Транспорт</h3>
                            <ul class="catalog-grid__item-list">
                                <li class="catalog-grid__item-item">
                                    <a href="#" class="catalog-grid__item-link">
                                        Гаражи, парковки, эста...
                                    </a>
                                </li>
                                <li class="catalog-grid__item-item">
                                    <a href="#" class="catalog-grid__item-link">
                                        Водный транспорт
                                    </a>
                                </li>
                                <li class="catalog-grid__item-item">
                                    <a href="#" class="catalog-grid__item-link">
                                        Воздушный транспорт
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="catalog-grid__item-more more-common-link">
                                <span>Еще</span>
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#arrow-btn"></use>
                                </svg>
                            </a>
                            <div class="catalog-grid__item-big-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog1-bg"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_big">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog2"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Летний ассортимент</h3>
                            <ul class="catalog-grid__item-list">
                                <li class="catalog-grid__item-item">
                                    <a href="#" class="catalog-grid__item-link">
                                        Водное оружие
                                    </a>
                                </li>
                                <li class="catalog-grid__item-item">
                                    <a href="#" class="catalog-grid__item-link">
                                        Горки, дома, песочницы...
                                    </a>
                                </li>
                                <li class="catalog-grid__item-item">
                                    <a href="#" class="catalog-grid__item-link">
                                        Зонты
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="catalog-grid__item-more more-common-link">
                                <span>Еще</span>
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#arrow-btn"></use>
                                </svg>
                            </a>
                            <div class="catalog-grid__item-big-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog2-bg"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog3"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Велосипеды</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog1"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Спорт и отдых</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small catalog-grid__item_category">
                        <div class="catalog-grid__item-wrap">
                            <a href="#" class="catalog-grid__item-category">
                                <span class="catalog-grid__item-plus"></span>
                                57
                            </a>
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog2"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Детский транспорт</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog3"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Игрушки для малышей</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog3"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Товары для праздника</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog1"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Деревянные игрушки</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog3"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Игрушки на радиоуправлении</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog4"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Книги</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog3"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Развивающие, обучающие игры</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog2"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Сюжетно-ролевые игры</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog3"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Канцтовары, школьные принадлежн...</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog2"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Детское оружие</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog1"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Конструкторы</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_big">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog4"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Мягкая игрушка</h3>
                            <ul class="catalog-grid__item-list">
                                <li class="catalog-grid__item-item">
                                    <a href="#" class="catalog-grid__item-link">
                                        Брелки, рамки, тапочки
                                    </a>
                                </li>
                                <li class="catalog-grid__item-item">
                                    <a href="#" class="catalog-grid__item-link">
                                        Мягкая игрушка
                                    </a>
                                </li>
                                <li class="catalog-grid__item-item">
                                    <a href="#" class="catalog-grid__item-link">
                                        Мягкие сумки, рюкзаки...
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="catalog-grid__item-more more-common-link">
                                <span>Еще</span>
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#arrow-btn"></use>
                                </svg>
                            </a>
                            <div class="catalog-grid__item-big-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog3-bg"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_big catalog-grid__item_category">
                        <div class="catalog-grid__item-wrap">
                            <a href="#" class="catalog-grid__item-category">
                                <span class="catalog-grid__item-plus"></span>
                                57
                            </a>
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog1"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Куклы и аксессуары</h3>
                            <ul class="catalog-grid__item-list">
                                <li class="catalog-grid__item-item">
                                    <a href="#" class="catalog-grid__item-link">
                                        Дома для кукол
                                    </a>
                                </li>
                                <li class="catalog-grid__item-item">
                                    <a href="#" class="catalog-grid__item-link">
                                        Кареты с лошадьми, ма...
                                    </a>
                                </li>
                                <li class="catalog-grid__item-item">
                                    <a href="#" class="catalog-grid__item-link">
                                        Коляски для кукол
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="catalog-grid__item-more more-common-link">
                                <span>Еще</span>
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#arrow-btn"></use>
                                </svg>
                            </a>
                            <div class="catalog-grid__item-big-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog1-bg"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_big">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog2"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Новый Год</h3>
                            <ul class="catalog-grid__item-list">
                                <li class="catalog-grid__item-item">
                                    <a href="#" class="catalog-grid__item-link">
                                        Новогоднее творчество
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="catalog-grid__item-more more-common-link">
                                <span>Еще</span>
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#arrow-btn"></use>
                                </svg>
                            </a>
                            <div class="catalog-grid__item-big-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog2-bg"></use>
                                </svg>
                            </div>
                        </div>

                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog3"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Зимний ассортимент</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog3"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Элементы питания, фонарики...</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog4"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Игры для развлечений</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog3"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Музыкальные инструменты</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog1"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Наборы животных, персонажей</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog3"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Детские товары, мебель</h3>
                        </div>
                    </div>
                    <div class="catalog-grid__item catalog-grid__item_size_small">
                        <div class="catalog-grid__item-wrap">
                            <div class="catalog-grid__item-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#catalog2"></use>
                                </svg>
                            </div>
                            <h3 class="catalog-grid__item-title">Настольные игры, пазлы
                            </h3>
                        </div>
                    </div>
                </div>
                <button type="button" class="catalog-grid__more js-sortCatalog">
                    <span class="js-isSwitchValue">Свернуть часть категорий</span>
                    <span class="catalog-grid__more-toggle toggle">

            </span>
                </button>
            </div>
        </div>
    </section>

    <section class="main-form with-gradient" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/template/img/main-form.png');">
        <div class="container">
            <div class="main-form__wrap">
                <div class="main-form__left">
                    <h2 class="main-form__title white-title">
                        Быстрый подбор
                    </h2>
                    <p class="main-form__subtitle white-text">
                        Воспользуйтесь быстрым подбором товаров по необходимым вам
                        <br>параметрам
                    </p>
                </div>
                <div class="main-form__right">
                    <form action="/" method="post">
                        <div class="main-form__right-wrap">
                            <div class="main-form__right-col">
                                <div class="text-select main-form__item main-form__select">
                                    <select class="js-isSelectric">
                                        <option selected>Выбрать категорию</option>
                                        <option>Мягкие игрушки</option>
                                    </select>
                                </div>
                                <div class="main-form__range">
                                    <div class="main-form__range-row">
                                        <div class="main-form__cell">
                                            <span class="main-form__cell-from">От</span>
                                            <input type="text" id="input-min" class="main-form__input white-input">
                                            <span class="jsMinPrice visually-hidden">0</span>
                                        </div>
                                        <div class="main-form__cell">
                                            <span class="main-form__cell-from">До</span>
                                            <input type="text" id="input-max" class="main-form__input white-input">
                                            <span class="jsMaxPrice visually-hidden">50000</span>
                                            <span class="main-form__col-span">руб.</span>
                                        </div>
                                    </div>
                                    <div class="main-form__range-item" id="form-range">

                                    </div>
                                </div>
                            </div>
                            <div class="main-form__right-col">
                                <div class="text-input text-select text-select_no-pd main-form__item main-form__select">
                                    <select class="js-isSelectric">
                                        <option selected>Выбрать бренд</option>
                                        <option>Мягкие игрушки</option>
                                    </select>
                                </div>
                                <div class="main-form__box">
                                    <div class="main-form__box-title">
                                        Страна производства
                                    </div>
                                    <div class="main-form__box-row">
                                        <label class="main-form__checkbox checkbox">
                                            <input type="checkbox" class="checkbox__box visually-hidden">
                                            <span class="checkbox__span"></span>
                                            <span class="checkbox__text">Россия</span>
                                        </label>
                                        <label class="main-form__checkbox checkbox">
                                            <input type="checkbox" class="checkbox__box visually-hidden">
                                            <span class="checkbox__span"></span>
                                            <span class="checkbox__text">Китай</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="main-form__right-col main-form__right-col_submit">
                                <button type="submit" class="main-form__submit common-red-button">
                                    Подобрать
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="items-slider">
        <div class="container">
            <div class="template-top">
                <div class="template-top__left">
                    <h2 class="template-top__title section-title items-slider__title">
                        Новинки
                    </h2>
                    <div class="template-top__tabs">
                        <a href="#" class="template-top__tabs-item template-top__tabs-item_active">
                            <span>За сутки</span>
                        </a>
                        <a href="#" class="template-top__tabs-item"><span>За неделю</span></a>
                    </div>
                </div>
                <div class="template-top__right">
                    <a href="#" class="template-top__all">
                        Все товары (<span>30</span>)
                    </a>
                    <div class="template-top__controls">
                        <button type="button" class="template-top__controls-item items-slider__controls-item_left">
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#arrow-left"></use>
                            </svg>
                        </button>
                        <button type="button" class="template-top__controls-item items-slider__controls-item_right">
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#arrow-right"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

        </div>


        <div class="container">
            <div class="items-slider__wrap swiper-container">
                <div class="swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card1.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Машина 694B-P на д/у, в пакете
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card__image-wrap">
                            <img src="<?=SITE_TEMPLATE_PATH?>/template/img/card2.png" alt="">
                        </div>
                        <a href="#" class="card__name">
                            Беговел. Hot wheels. 12&quot; надув. колеса в кор.1 шт
                        </a>
                        <div class="card__prices">
                <span class="card__prices-current">
                      2 010.96 ₽
                    </span>
                            <span class="card__prices-old">
                      3 300.20 ₽
                    </span>
                        </div>
                        <div class="card__actions">
                            <form action="/" method="post">
                                <div class="card__actions-wrap">
                                    <div class="count">
                                        <button type="button" class="count__item count__item_plus"></button>
                                        <input type="text" class="count__input visually-hidden">
                                        <span class="count__value">10</span>
                                        <button type="button" class="count__item count__item_minus"></button>
                                    </div>
                                    <button type="button" class="card__actions-add">
                                        <svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#cart"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="single-column-slider">

        <div class="container">
            <div class="template-top template-top_phone-col">
                <div class="template-top__left">
                    <h2 class="template-top__title section-title single-column-slider__title">
                        Новые поступления в брендах
                    </h2>
                </div>
                <div class="template-top__right template-top__right_phone-row">
                    <a href="#" class="template-top__all">
                        Все новинки (<span>30</span>)
                    </a>
                    <div class="template-top__controls">
                        <button type="button" class="template-top__controls-item single-column-slider__controls-item_left">
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#arrow-left"></use>
                            </svg>
                        </button>
                        <button type="button" class="template-top__controls-item single-column-slider__controls-item_right">
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#arrow-right"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="single-column-slider__wrap swiper-container">
                <div class="swiper-wrapper single-column-slider__wrapper">
                    <div class="single-column-slider__item swiper-slide">
                        <img src="<?=SITE_TEMPLATE_PATH?>/template/img/brand1.png" alt="">
                    </div>
                    <div class="single-column-slider__item swiper-slide">
                        <img src="<?=SITE_TEMPLATE_PATH?>/template/img/brand2.png" alt="">
                    </div>
                    <div class="single-column-slider__item swiper-slide">
                        <img src="<?=SITE_TEMPLATE_PATH?>/template/img/brand3.png" alt="">
                    </div>
                    <div class="single-column-slider__item swiper-slide">
                        <img src="<?=SITE_TEMPLATE_PATH?>/template/img/brand4.png" alt="">
                    </div>
                    <div class="single-column-slider__item swiper-slide">
                        <img src="<?=SITE_TEMPLATE_PATH?>/template/img/brand5.png" alt="">
                    </div>
                    <div class="single-column-slider__item swiper-slide">
                        <img src="<?=SITE_TEMPLATE_PATH?>/template/img/brand6.png" alt="">
                    </div>
                    <div class="single-column-slider__item swiper-slide">
                        <img src="<?=SITE_TEMPLATE_PATH?>/template/img/brand7.png" alt="">
                    </div>
                    <div class="single-column-slider__item swiper-slide">
                        <img src="<?=SITE_TEMPLATE_PATH?>/template/img/brand8.png" alt="">
                    </div>
                    <div class="single-column-slider__item swiper-slide">
                        <img src="<?=SITE_TEMPLATE_PATH?>/template/img/brand9.png" alt="">
                    </div>
                    <div class="single-column-slider__item swiper-slide">
                        <img src="<?=SITE_TEMPLATE_PATH?>/template/img/brand10.png" alt="">
                    </div>
                    <div class="single-column-slider__item swiper-slide">
                        <img src="<?=SITE_TEMPLATE_PATH?>/template/img/brand1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>*/?>

<?
include_once($_SERVER['DOCUMENT_ROOT'].'/include/template/consult-form.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/include/template/about-block.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/include/template/contact-block.php');

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>