<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;
$aMenuLinksExt = array();

$aMenuLinksExt = $APPLICATION->IncludeComponent("bitrix:menu.sections", "", array(
    "IS_SEF" => "Y",
    "SEF_BASE_URL" => "",
    "IBLOCK_TYPE" => '1c_catalog',
    "IBLOCK_ID" => 10,
    "DEPTH_LEVEL" => "2",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => 3600
), false, Array('HIDE_ICONS' => 'Y'));

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>