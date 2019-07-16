<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
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
            <?
            $APPLICATION->IncludeComponent(
                "bitrix:catalog.section",
                "single-sale",
                [
                    "IBLOCK_TYPE" => "services",
                    "IBLOCK_ID" => "11",
                    "SECTION_ID" => "1567",
                    "SORT_BY1" => "rand",
                    "SORT_ORDER1" => "ASC",
                    "SORT_BY2" => "ID",
                    "SORT_ORDER2" => "ASC",
                    "PAGE_ELEMENT_COUNT" => "1",
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
        </div>
    </div>
</section>