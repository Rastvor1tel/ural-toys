<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Config\Option;

?>
<section class="contacts">
    <div class="contacts__wrap">
        <div class="container">
            <h2 class="section-title contacts__title"><?= Loc::getMessage('CONTACTS_TITLE') ?></h2>
        </div>
        <div class="contacts__info">
            <div class="container">
                <div class="contacts__info-items">
                    <div class="contacts__info-item">
                        <div class="contacts__info-subitem">
                            <div class="contacts__item-icon">
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#mark"></use>
                                </svg>
                            </div>
                            <div class="contacts__item-info">
                                <span class="contacts__item-text contacts__item-text_bold"><?= Option::get("grain.customsettings", "city") ?></span>
                                <span class="contacts__item-text"><?= Option::get("grain.customsettings", "adress") ?></span>
                            </div>
                        </div>
                        <div class="contacts__info-subitem">
                            <div class="contacts__item-icon">
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#phone"></use>
                                </svg>
                            </div>
                            <div class="contacts__item-info">
                                <span class="contacts__item-text"><?= Option::get("grain.customsettings", "phone") ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="contacts__info-item">
                        <div class="contacts__info-subitem">
                            <div class="contacts__item-icon contacts__item-icon_purple">
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#manager-icon"></use>
                                </svg>
                            </div>
                            <div class="contacts__item-info">
                                <span class="contacts__item-text contacts__item-text_bold">Менеджер по вашему региону</span>
                                <span class="contacts__item-text">Анна Кобякова</span>
                            </div>
                        </div>
                        <div class="contacts__info-subitem contacts__info-subitem_mobile-col">
                            <div class="contacts__item-info">
                                <div class="contacts__item-row">
                                    <span class="contacts__item-text contacts__item-text_title">Тел:</span>
                                    <span class="contacts__item-text">+7 (343) 270 22 02 (доб. 207)</span>
                                </div>
                                <div class="contacts__item-row">
                                    <span class="contacts__item-text contacts__item-text_title">Мобильный:</span>
                                    <span class="contacts__item-text">+7 (912) 263 75 75</span>
                                </div>
                            </div>
                        </div>
                        <div class="contacts__info-subitem contacts__info-subitem_mobile-col">
                            <div class="contacts__item-info">
                                <div class="contacts__item-row">
                                    <span class="contacts__item-text contacts__item-text_title">ICQ:</span>
                                    <span class="contacts__item-text">441 647 273</span>
                                </div>
                                <div class="contacts__item-row">
                                    <span class="contacts__item-text contacts__item-text_title">E-mail:</span>
                                    <span class="contacts__item-text">anna_k@ural-toys.ru</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contacts__map">
        <? CJSCore::Init(['map']); ?>
        <script defer="defer">
            window.onload = function () {
                var points = [{
                    coords: [<?=Option::get("grain.customsettings", "coordinates")?>],
                    name: 'Название ',
                    phone: '<?=Option::get("grain.customsettings", "phone")?>',
                    email: 'Email',
                    addressStorage: 'Адрес1',
                    addressOffice: '<?=Option::get("grain.customsettings", "adress")?>'
                }];

                ymaps.ready(init(points, 'map'));
            };
        </script>
        <div class="container container_full">
            <div class="contacts__map-item" id="map"></div>
        </div>
    </div>
</section>