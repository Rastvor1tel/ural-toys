<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arParams['CATALOG_SECTIONS_LIMIT'] = $arParams['CATALOG_SECTIONS_LIMIT'] ? $arParams['CATALOG_SECTIONS_LIMIT'] : 10;
$arParams['SUBELEMENTS_LIMIT'] = $arParams['SUBELEMENTS_LIMIT'] ? $arParams['SUBELEMENTS_LIMIT'] : 5;

function makeChilds($array, $depthLevel = 1, $limit = 0) {
    $curKey = 0;
    $count = 0;
    $result = [];
    foreach ($array as $key => $item) {
        if ($item['DEPTH_LEVEL'] == $depthLevel) {
            if (($limit > 0) && ($count >= $limit)) break;
            $count++;
            $result[$key] = $item;
            if ($item['IS_PARENT']) {
                $curKey = $key;
                $result[$key]['COUNT'] = 0;
            }
        } else {
            $result[$curKey]['ITEMS'][$key] = $item;
            $result[$curKey]['COUNT']++;
        }
    }
    return $result;
}

$arResult = makeChilds($arResult);
foreach ($arResult as &$arItem) {
    if ($arItem['IS_PARENT']) {
        $result = makeChilds($arItem['ITEMS'], 2, $arParams['CATALOG_SECTIONS_LIMIT']);
        $arItem['ITEMS'] = $result;
        $arItem['COUNT'] = count($result);
    }
}
?>