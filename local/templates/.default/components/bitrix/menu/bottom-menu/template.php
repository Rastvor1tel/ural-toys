<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <nav class="footer__navigation">
        <ul class="footer__column-list">
        <?foreach($arResult as $arItem):?>
            <?if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) continue;?>
            <li class="footer__column-item<?=$arItem["SELECTED"]?' active':'';?>">
                <a href="<?=$arItem["LINK"]?>" class="footer__column-link"><?=$arItem["TEXT"]?></a>
            </li>
        <?endforeach;?>
        </ul>
    </nav>
<?endif?>
