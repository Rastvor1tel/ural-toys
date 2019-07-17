<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Config\Option;
?>
<section class="about">
    <div class="container">
        <div class="about__wrap">
            <div class="about__info">
                <h2 class="about__title section-title"><?=Loc::getMessage('ABOUT_TITLE')?></h2>
                <div class="about__info-icon">
                    <svg>
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#about-logo"></use>
                    </svg>
                </div>
                <div class="about__info-content">
                    <?$APPLICATION->IncludeFile('/include/about-text.php')?>
                </div>
                <button type="button" class="about__info-more"><?=Loc::getMessage('SHOW_MORE')?></button>
            </div>
            <div class="about__features">
                <h2 class="about__title section-title"><?=Loc::getMessage('WHAY_WE')?></h2>
                <div class="about__features-wrap">
                    <div class="about__features-item">
                        <h3 class="about__features-title about__features-title_purple">
                            <?=Option::get("grain.customsettings","cities")?>
                        </h3>
                        <span class="about__features-text"><?=Loc::getMessage('DELIVERY_CITIES')?></span>
                    </div>
                    <div class="about__features-item">
                        <h3 class="about__features-title about__features-title_orange">
                            <?=Option::get("grain.customsettings","brands")?>
                        </h3>
                        <span class="about__features-text"><?=Loc::getMessage('BRANDS')?></span>
                    </div>
                    <div class="about__features-item">
                        <h3 class="about__features-title about__features-title_red">
                            <?=Option::get("grain.customsettings","products")?>
                            <span class="about__features-small"><?=Loc::getMessage('THOUSANDS')?></span>
                        </h3>
                        <span class="about__features-text"><?=Loc::getMessage('PRODUCTS')?></span>
                    </div>
                    <div class="about__features-item">
                        <h3 class="about__features-title about__features-title_blue">
                            <?=Option::get("grain.customsettings","brands_percent")?>
                            <span class="about__features-small">%</span>
                        </h3>
                        <span class="about__features-text"><?=Loc::getMessage('BRANDS')?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>