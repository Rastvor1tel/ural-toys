<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

function makeChilds($array, $depthLevel = 1) {
    $curKey = 0;
    $result = [];
    foreach ($array as $key => $item) {
        if($item['DEPTH_LEVEL'] == $depthLevel) {
            $result[$key] = $item;
            if ($item['IS_PARENT']) {
                $curKey = $key;
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
        $result = makeChilds($arItem['ITEMS'], 2);
        $arItem['ITEMS'] = $result;
        $arItem['COUNT'] = count($result);
    }
}
?>