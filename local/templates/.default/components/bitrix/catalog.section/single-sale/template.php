<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?foreach($arResult['ITEMS'] as $arItem):?>
<article class="banner-block__item" style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC']?>');background-color: #<?= $arItem['DISPLAY_PROPERTIES']['BACKGROUND_COLOR']['VALUE'] ?>;">
    <a href="#"></a>
    <h2 class="banner-block__text-title">
        <?=$arItem['NAME']?>
    </h2>
    <p class="banner-block__text-subtitle">
        <?=$arItem['PREVIEW_TEXT']?>
    </p>
    <div class="banner-block__interactive">
        -30% <? //TODO: Сделать скидку?>
    </div>
    <p class="banner-block__plaster">
        <?=$arItem['DISPLAY_PROPERTIES']['ADDITIONAL_TEXT']['~VALUE']['TEXT']?>
    </p>
</article>
<?endforeach;?>