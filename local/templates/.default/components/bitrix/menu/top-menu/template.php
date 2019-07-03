<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul class="header__top-list">
        <?foreach($arResult as $arItem):?>
            <?if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) continue;?>
            <li class="header__top-item<?=$arItem["SELECTED"]?' active':'';?>">
                <a href="<?=$arItem["LINK"]?>" class="header__top-link"><?=$arItem["TEXT"]?></a>
            </li>
        <?endforeach;?>
    </ul>
<?endif?>