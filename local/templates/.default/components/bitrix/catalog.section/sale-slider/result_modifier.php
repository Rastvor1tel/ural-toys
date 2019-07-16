<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult['ITEMS'] as $arItem) {
    if ($arItem['PROPERTIES']['SHOW_SLIDER']['VALUE'])
        $arResult['SLIDER_ITEMS'][] = $arItem;
    else
        $arResult['STATIC_ITEMS'][] = $arItem;
}