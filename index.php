<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>
<?
//$APPLICATION->IncludeComponent('bitrix:news', '', []);
?>
    <section class="index-slider">
        <div class="container container_mobile">
            <div class="index-slider__wrap">
                <div class="index-slider__body">
                    <div class="index-slider__big-item js-appendBody swiper-container">
                        <div class="swiper-wrapper">
                            <div class="index-slider__item index-slider__item_context_inside index-slider__item_color_purple swiper-slide" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/template/img/slider1.png');">
                                <div class="index-slider__item-plaster index-slider__item-plaster_blue index-slider__item-front">
                                    Снижение цен
                                </div>
                                <h2 class="index-slider__item-title index-slider__item-front">
                                    На весь ассортимент
                                </h2>
                                <p class="index-slider__item-subtitle index-slider__item-front">
                                    дополнительная скидка 5%
                                </p>
                                <a href="#" class="index-slider__item-button index-slider__item-front common-red-button">
                                    Узнать подробнее
                                </a>
                            </div>
                            <div class="index-slider__item index-slider__item_context_inside index-slider__item_color_purple swiper-slide" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/template/img/slider1.png');">
                                <div class="index-slider__item-plaster index-slider__item-plaster_blue index-slider__item-front">
                                    Снижение цен
                                </div>
                                <h2 class="index-slider__item-title index-slider__item-front">
                                    На весь ассортимент
                                </h2>
                                <p class="index-slider__item-subtitle index-slider__item-front">
                                    дополнительная скидка 5%
                                </p>
                                <a href="#" class="index-slider__item-button index-slider__item-front common-red-button">
                                    Узнать подробнее
                                </a>
                            </div>
                            <div class="index-slider__item index-slider__item_context_inside index-slider__item_color_purple swiper-slide" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/template/img/slider1.png');">
                                <div class="index-slider__item-plaster index-slider__item-plaster_blue index-slider__item-front">
                                    Снижение цен
                                </div>
                                <h2 class="index-slider__item-title index-slider__item-front">
                                    На весь ассортимент
                                </h2>
                                <p class="index-slider__item-subtitle index-slider__item-front">
                                    дополнительная скидка 5%
                                </p>
                                <a href="#" class="index-slider__item-button index-slider__item-front common-red-button">
                                    Узнать подробнее
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination">

                        </div>
                    </div>
                    <div class="index-slider__item index-slider__item_context_outside index-slider__item_color_orange" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/template/img/slider2.png');">
                        <div class="index-slider__item-plaster index-slider__item-plaster_min index-slider__item-plaster_white js-minItem">
                            Скидка 25%
                        </div>
                        <h2 class="index-slider__item-title index-slider__item-title_min">
                            На настольные игры
                        </h2>
                        <p class="index-slider__item-subtitle index-slider__item-subtitle_min">
                            производства КНР
                        </p>
                        <p class="index-slider__item-additional">
                            Акция продлится до 30.04.19
                            <br>Скидка предоставляется на условиях предоплаты
                        </p>
                    </div>
                    <div class="index-slider__item index-slider__item_context_outside index-slider__item_image_center index-slider__item_color_blue index-slider__item_bottom" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/template/img/slider3.png');">
                        <div class="index-slider__item-plaster index-slider__item-plaster_min index-slider__item-plaster_white">
                            Уникальное предложение
                        </div>
                        <h2 class="index-slider__item-title index-slider__item-title_min">
                            Бесплатная доставка
                        </h2>
                        <p class="index-slider__item-subtitle index-slider__item-subtitle_min ">
                            всем новым клиентам при заказе от 50 000 ₽
                        </p>
                        <p class="index-slider__item-additional">
                            *подробности уточняйте у отдела продаж
                        </p>
                    </div>
                    <div class="index-slider__item index-slider__item_context_outside index-slider__item_image_center index-slider__item_color_dark-purple index-slider__item_bottom" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/template/img/slider4.png');">
                        <div class="index-slider__item-plaster index-slider__item-plaster_min index-slider__item-plaster_white">
                            Скидка 25%
                        </div>
                        <h2 class="index-slider__item-title index-slider__item-title_min">
                            На настольные игры
                        </h2>
                        <p class="index-slider__item-subtitle index-slider__item-subtitle_min ">
                            производства КНР
                        </p>
                        <p class="index-slider__item-additional">
                            Акция продлится до 30.04.19
                            <br>Скидка предоставляется на условиях предоплаты
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<br>
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
    </section>
    <section class="banner-block">
        <div class="container">
            <div class="banner-block__wrap">
                <div class="banner-block__form callback-form with-gradient" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/template/img/main-form2.png');">
                    <h2 class="callback-form__title">Получить консультацию</h2>
                    <div class="callback-form__body">
                        <form action="/" method="post">
                            <div class="callback-form__body-wrap">
                                <div class="callback-form__row">
                                    <label class="callback-form__row-label text-label">
                                        <input type="text" class="callback-form__input text-input" placeholder="Ваше имя">
                                    </label>
                                    <label class="callback-form__row-label text-label">
                                        <input type="text" class="callback-form__input text-input" required placeholder="Ваш телефон*">
                                    </label>
                                </div>
                                <label class="callback-form__label">
                                    <textarea rows="1" class="text-area callback-form__input text-input" placeholder="Ваш вопрос"></textarea>
                                </label>
                                <div class="callback-form__row callback-form__row_mobile-col">
                                    <label class="callback-form__checkbox checkbox">
                                        <input type="checkbox" class="checkbox__box visually-hidden">
                                        <span class="checkbox__span"></span>
                                        <span class="checkbox__text">Соглашаюсь на обработку данных, установленных в политике конфиденциальности</span>
                                    </label>
                                    <button type="button" class="callback-form__submit common-red-button">
                                        Отправить
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <article class="banner-block__item banner-block__item_orange" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/template/img/banner-block.png');">
                    <a href="#"></a>
                    <h2 class="banner-block__text-title">
                        Большая распродажа
                    </h2>
                    <p class="banner-block__text-subtitle">
                        мягких игрушек
                    </p>
                    <div class="banner-block__interactive">
                        -30%
                    </div>
                    <p class="banner-block__plaster">
                        *акция действует при заказе от 100 шт.
                    </p>
                </article>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="about__wrap">
                <div class="about__info">
                    <h2 class="about__title section-title">
                        О компании
                    </h2>
                    <div class="about__info-icon">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#about-logo"></use>
                        </svg>
                    </div>
                    <div class="about__info-content">
                        <p><b>Uraltoys</b> - динамично развивающаяся компания, основное направление деятельности которой является продажа детских игрушек оптом. Компания успешно работает с 2007 года, и за это время нам удалось занять одно из лидирующих мест на рынке
                            игрушек Уральского региона. Наш ассортимент насчитывает более 30 000 наименований качественных игрушек, товаров для детей и новорожденных, а также товаров для спорта и активного отдыха.</p>
                        <p>Мы сотрудничаем с крупнейшими российскими производителями игрушек, осуществляем прямые поставки китайских игрушек и товаров для детей. Игрушки оптом из Китая закупаются напрямую с заводов-производителей, что гарантирует самые выгодные цены.
                            Особое внимание уделяется качеству товара и постоянному обновлению и расширению ассортимента игрушек. Все товары сертифицированы, соответствуют установленным требованиям и ГОСТам и абсолютно безопасны для детей.</p>
                        <p>Имея собственные розничные магазины, мы грамотно и своевременно пополняем свой ассортимент и стараемся отвечать требованиям самых взыскательных покупателей. Выбрать и купить игрушки можно как в нашем КЭШе, так и через наш сайт www.ural-toys.ru.</p>
                        <p>Продажа игрушек для детей оптом осуществляется как по наличному, так и по безналичному расчету. В нашей компании существует выгодная система скидок.</p>
                    </div>
                    <button type="button" class="about__info-more">
                        Показать еще
                    </button>
                </div>
                <div class="about__features">
                    <h2 class="about__title section-title">
                        Почему с нами работать выгодно
                    </h2>
                    <div class="about__features-wrap">
                        <div class="about__features-item">
                            <h3 class="about__features-title about__features-title_purple">
                                41
                            </h3>
                            <span class="about__features-text">Город доставки</span>
                        </div>
                        <div class="about__features-item">
                            <h3 class="about__features-title about__features-title_orange">
                                250
                            </h3>
                            <span class="about__features-text">Брендов</span>
                        </div>
                        <div class="about__features-item">
                            <h3 class="about__features-title about__features-title_red">
                                38 <span class="about__features-small">тыс +</span>
                            </h3>
                            <span class="about__features-text">Город доставки</span>
                        </div>
                        <div class="about__features-item">
                            <h3 class="about__features-title about__features-title_blue">
                                97 <span class="about__features-small">%</span>
                            </h3>
                            <span class="about__features-text">Брендов</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contacts">
        <div class="contacts__wrap">
            <div class="container">
                <h2 class="section-title contacts__title">
                    Контакты
                </h2>
            </div>
            <div class="contacts__info">
                <div class="container">
                    <div class="contacts__info-items">
                        <div class="contacts__info-item">
                            <div class="contacts__info-subitem">
                                <div class="contacts__item-icon">
                                    <svg>
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#mark"></use>
                                    </svg>
                                </div>
                                <div class="contacts__item-info">
                    <span class="contacts__item-text contacts__item-text_bold">
                        Екатеринбург
                      </span>
                                    <span class="contacts__item-text">
                        г. Березовский, ул. Уральская 142 Б
                      </span>
                                </div>
                            </div>
                            <div class="contacts__info-subitem">
                                <div class="contacts__item-icon">
                                    <svg>
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#phone"></use>
                                    </svg>
                                </div>
                                <div class="contacts__item-info">
                    <span class="contacts__item-text">
                        +7 (343) 270-22-02
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class="contacts__info-item">
                            <div class="contacts__info-subitem">
                                <div class="contacts__item-icon contacts__item-icon_purple">
                                    <svg>
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#manager-icon"></use>
                                    </svg>
                                </div>
                                <div class="contacts__item-info">
                    <span class="contacts__item-text contacts__item-text_bold">
                        Менеджер по вашему региону
                      </span>
                                    <span class="contacts__item-text">
                          Анна Кобякова
                       </span>
                                </div>
                            </div>
                            <div class="contacts__info-subitem contacts__info-subitem_mobile-col">
                                <div class="contacts__item-info">
                                    <div class="contacts__item-row">
                      <span class="contacts__item-text contacts__item-text_title">
                          Тел:
                        </span>
                                        <span class="contacts__item-text">
                          +7 (343) 270 22 02 (доб. 207)
                        </span>
                                    </div>
                                    <div class="contacts__item-row">
                      <span class="contacts__item-text contacts__item-text_title">
                          Мобильный:
                        </span>
                                        <span class="contacts__item-text">
                          +7 (912) 263 75 75
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="contacts__info-subitem contacts__info-subitem_mobile-col">
                                <div class="contacts__item-info">
                                    <div class="contacts__item-row">
                      <span class="contacts__item-text contacts__item-text_title">
                          ICQ:
                        </span>
                                        <span class="contacts__item-text">
                            441 647 273
                          </span>
                                    </div>
                                    <div class="contacts__item-row">
                      <span class="contacts__item-text contacts__item-text_title">
                          E-mail:
                        </span>
                                        <span class="contacts__item-text">
                            anna_k@ural-toys.ru
                          </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts__map">
            <script defer="defer">
                window.onload = function () {
                    var points = [{
                        coords: [54.515147, 36.247875],
                        name: 'Название ',
                        phone: 'Телефон',
                        email: 'Email',
                        addressStorage: 'Адрес1',
                        addressOffice: 'Адрес2'
                    }];

                    ymaps.ready(init(points, 'map'));
                };
            </script>
            <div class="container container_full">
                <div class="contacts__map-item" id="map"></div>
            </div>
        </div>
    </section>
*/?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>