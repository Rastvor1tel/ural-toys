<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Config\Option;
?>
<section class="about">
    <div class="container">
        <div class="about__wrap">
            <div class="about__info">
                <h2 class="about__title section-title">О компании</h2>
                <div class="about__info-icon">
                    <svg>
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/template/img/icons.svg#about-logo"></use>
                    </svg>
                </div>
                <div class="about__info-content">
                    <?$APPLICATION->IncludeFile('/include/about-text.php')?>
                </div>
                <button type="button" class="about__info-more">
                    Показать еще
                </button>
            </div>
            <div class="about__features">
                <h2 class="about__title section-title">
                    Почему с нами работать выгодно
                </h2>
                <div class="about__features-wrap">
                    <div class="about__features-item">
                        <h3 class="about__features-title about__features-title_purple">
                            <?=Option::get("grain.customsettings","cities")?>
                        </h3>
                        <span class="about__features-text">Городов доставки</span>
                    </div>
                    <div class="about__features-item">
                        <h3 class="about__features-title about__features-title_orange">
                            <?=Option::get("grain.customsettings","brands")?>
                        </h3>
                        <span class="about__features-text">Брендов</span>
                    </div>
                    <div class="about__features-item">
                        <h3 class="about__features-title about__features-title_red">
                            <?=Option::get("grain.customsettings","products")?> <span class="about__features-small">тыс +</span>
                        </h3>
                        <span class="about__features-text">Товаров</span>
                    </div>
                    <div class="about__features-item">
                        <h3 class="about__features-title about__features-title_blue">
                            <?=Option::get("grain.customsettings","brands_percent")?> <span class="about__features-small">%</span>
                        </h3>
                        <span class="about__features-text">Брендов</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>