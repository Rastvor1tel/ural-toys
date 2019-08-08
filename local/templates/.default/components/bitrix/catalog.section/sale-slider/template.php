<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
CJSCore::Init('index_slider');
?>
<section class="index-slider">
    <div class="container container_mobile">
        <div class="index-slider__wrap">
            <div class="index-slider__body">
                <div class="index-slider__big-item js-appendBody swiper-container">
                    <? if ($arResult['SLIDER_ITEMS']): ?>
                        <div class="swiper-wrapper">
                            <? foreach ($arResult['SLIDER_ITEMS'] as $arItem): ?>
                                <div class="index-slider__item index-slider__item_context_inside index-slider__item_color_purple swiper-slide"
                                     style="background-image: url('<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>');">
                                    <div class="index-slider__item-plaster index-slider__item-plaster_blue index-slider__item-front">
                                        <?= $arItem['DISPLAY_PROPERTIES']['ADDITIONAL_HEADER']['VALUE'] ?>
                                    </div>
                                    <h2 class="index-slider__item-title index-slider__item-front">
                                        <?= $arItem['NAME'] ?>
                                    </h2>
                                    <p class="index-slider__item-subtitle index-slider__item-front">
                                        <?= $arItem['PREVIEW_TEXT'] ?>
                                    </p>
                                    <?if($arItem['DISPLAY_PROPERTIES']['SHOW_MORE']['VALUE']):?>
                                    <a href="#" class="index-slider__item-button index-slider__item-front common-red-button">
                                        Узнать подробнее
                                    </a>
                                    <?endif;?>
                                </div>
                            <? endforeach; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    <? endif; ?>
                </div>
                <? foreach ($arResult['STATIC_ITEMS'] as $arItem): ?>
                    <div class="index-slider__item index-slider__item_context_outside index-slider__item_color_orange<?=$arItem['PREVIEW_PICTURE']['CONTENT_TYPE']=='image/png'?' index-slider__item_bottom':'';?>" style="background-image: url('<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>');background-color: #<?= $arItem['DISPLAY_PROPERTIES']['BACKGROUND_COLOR']['VALUE'] ?>;">
                        <div class="index-slider__item-plaster index-slider__item-plaster_min index-slider__item-plaster_white js-minItem">
                            <?= $arItem['DISPLAY_PROPERTIES']['ADDITIONAL_HEADER']['VALUE'] ?>
                        </div>
                        <h2 class="index-slider__item-title index-slider__item-title_min">
                            <?= $arItem['NAME'] ?>
                        </h2>
                        <p class="index-slider__item-subtitle index-slider__item-subtitle_min">
                            <?= $arItem['PREVIEW_TEXT'] ?>
                        </p>
                        <p class="index-slider__item-additional">
                            <?= $arItem['DISPLAY_PROPERTIES']['ADDITIONAL_TEXT']['~VALUE']['TEXT'] ?>
                        </p>
                    </div>
                <? endforeach; ?>
                <?/*<div class="index-slider__item index-slider__item_context_outside index-slider__item_color_blue index-slider__item_bottom"
                     style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/template/img/slider3.png');">
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
                <div class="index-slider__item index-slider__item_context_outside index-slider__item_image_center index-slider__item_color_dark-purple index-slider__item_bottom"
                     style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/template/img/slider4.png');">
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
                </div>*/?>
            </div>
        </div>
    </div>
</section>
