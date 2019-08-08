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

//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/libs/nouislider.min.js');
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/js/main-form.js');
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/js/index.js');
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/js/catalog-grid.js');
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/template/js/items-slider.js');

$arJsConfig = [
    'yandex_map' => [
        'js'  => '//api-maps.yandex.ru/2.1/?apikey=3ba22bac-b430-4579-9da6-70a75b6d376f&amp;lang=ru_RU',
        'skip_core' => true,
    ],
    'enums' => [
        'js' => SITE_TEMPLATE_PATH . '/template/js/enums.js',
        'skip_core' => true,
    ],
    'swiper' => [
        'js' => SITE_TEMPLATE_PATH . '/template/libs/swiper.min.js',
        'skip_core' => true,
    ],
    'map' => [
        'js' => SITE_TEMPLATE_PATH . '/template/js/blocks/map.js',
        'rel' => ['yandex_map'],
        'skip_core' => true,
    ],
    'index_slider' => [
        'js' => SITE_TEMPLATE_PATH . '/template/js/blocks/index-slider.js',
        'rel' => ['swiper'],
        'skip_core' => true,
    ],
    'selectric' => [
        'js' => SITE_TEMPLATE_PATH . '/template/libs/jquery.selectric.min.js',
        'rel' => ['jquery3'],
        'skip_core' => true,
    ],
    'utils' => [
        'js' => SITE_TEMPLATE_PATH . '/template/js/utils.js',
        'rel' => ['jquery3', 'selectric', 'enums'],
        'skip_core' => true,
    ]
];
foreach ($arJsConfig as $ext => $arExt) {
    CJSCore::RegisterExt($ext, $arExt);
}

CJSCore::Init(['utils']);