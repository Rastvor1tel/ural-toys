<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=Edge">');
Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
Asset::getInstance()->addString('<meta name="theme-color" content="#f26522">');
Asset::getInstance()->addString('<meta name="HandheldFriendly" content="true">');
Asset::getInstance()->addString('<meta name="apple-mobile-web-app-capable" content="yes">');
Asset::getInstance()->addString('<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">');
Asset::getInstance()->addString('<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">');
Asset::getInstance()->addString('<link rel="preload" href="<?= SITE_TEMPLATE_PATH ?>/template/fonts/SourceSansPro-400.woff2" as="font" crossorigin="">');

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/template/css/normalize.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/template/css/style.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/template/css/swiper.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/template/css/nouislider.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/template/css/custom.css');

Asset::getInstance()->addJs('//api-maps.yandex.ru/2.1/?apikey=3ba22bac-b430-4579-9da6-70a75b6d376f&amp;lang=ru_RU');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/js/map.js');
Asset::getInstance()->addJs('//code.jquery.com/jquery-3.3.1.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/libs/jquery.selectric.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/libs/swiper.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/libs/nouislider.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/js/main-form.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/js/index.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/js/utils.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/js/catalog-grid.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/js/items-slider.js');