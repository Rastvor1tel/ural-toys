<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<section class="banner-block">
    <div class="container">
        <div class="banner-block__wrap">
            <div class="banner-block__form callback-form with-gradient" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/template/img/main-form2.png');">
                <h2 class="callback-form__title">Получить консультацию</h2>
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:form.result.new",
                    "consult",
                    [
                        "WEB_FORM_ID" => "1",
                        "AJAX_MODE" => "Y",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_SHADOW" => "N",
                        "AJAX_OPTION_STYLE" => "N",
                        "CACHE_TIME" => "3600",
                        "CACHE_TYPE" => "A",
                        "CHAIN_ITEM_LINK" => "",
                        "CHAIN_ITEM_TEXT" => "",
                        "EDIT_URL" => "",
                        "IGNORE_CUSTOM_TEMPLATE" => "N",
                        "LIST_URL" => "",
                        "SEF_MODE" => "N",
                        "SUCCESS_URL" => "",
                        "USE_EXTENDED_ERRORS" => "N",
                        "VARIABLE_ALIASES" => [
                            "WEB_FORM_ID" => "WEB_FORM_ID",
                            "RESULT_ID" => "RESULT_ID"
                        ],
                    ],
                    false
                );
                ?>
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