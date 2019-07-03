<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if($arResult):?>
    <nav class="navigation header__navigation">
        <ul class="navigation__list js-mainMenu">
            <?foreach($arResult as $arItem):?>
                <?if($arItem['IS_PARENT']):?>
                    <li class="navigation__item navigation__item_parent navigation__item_svg">
                        <a href="<?=$arItem['LINK']?>" class="navigation__link" data-show="true">
                            <span class="navigation__link-name"><?=$arItem['TEXT']?></span>
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#arrow-btn"></use>
                            </svg>
                        </a>
                        <div class="navigation__hidden-list">
                            <div class="navigation__grid">
                                <?foreach($arItem['ITEMS'] as $subItem):?>
                                    <div class="navigation__hidden-item">
                                        <span class="navigation__hidden-open js-openCategory"></span>
                                        <a href="<?=$subItem['LINK']?>" class="navigation__hidden-title">
                                            <svg>
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#tricycle"></use>
                                            </svg>
                                            <?/*
                                            <svg>
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#airplane"></use>
                                            </svg>
                                            */?>
                                            <span><?=$subItem['TEXT']?></span>
                                        </a>
                                        <ul class="navigation__hidden-sublist">
                                            <?$count = 1;?>
                                            <?foreach($subItem['ITEMS'] as $subSubItem):?>
                                                <?if($count > $arParams['SUBELEMENTS_LIMIT']) break;?>
                                                <li class="navigation__hidden-subitem">
                                                    <a href="<?=$subSubItem['LINK']?>" class="navigation__hidden-sublink">
                                                        <?=$subSubItem['TEXT']?>
                                                    </a>
                                                </li>
                                                <?$count++;?>
                                            <?endforeach;?>
                                        </ul>
                                        <?if($subItem['COUNT'] > 0):?>
                                            <a href="<?=$subItem['LINK']?>" class="navigation__hidden-all">
                                                <span>Все <?=$subItem['COUNT']?> <?=$subItem['COUNT']<5?'категории':'категорий';?></span>
                                                <svg>
                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#arrow-btn"></use>
                                                </svg>
                                            </a>
                                        <?endif;?>
                                    </div>
                                <?endforeach;?>
                            </div>
                        </div>
                    </li>
                <?else:?>
                    <li class="navigation__item">
                        <a href="<?=$arItem['LINK']?>" class="navigation__link" data-show="false"><?=$arItem['TEXT']?></a>
                    </li>
                <?endif;?>
            <?/*<li class="navigation__item navigation__item_parent navigation__item_svg">
                <a href="#" class="navigation__link" data-show="true">
                    <span class="navigation__link-name">
                      Каталог
                    </span>
                    <svg>
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#arrow-btn"></use>
                    </svg>

                </a>
                <div class="navigation__hidden-list">
                    <div class="navigation__grid">
                        <div class="navigation__hidden-item">
                            <span class="navigation__hidden-open js-openCategory"></span>
                            <a href="#" class="navigation__hidden-title">
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#tricycle"></use>
                                </svg>
                                <span>Транспорт</span>
                            </a>
                            <ul class="navigation__hidden-sublist">
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Гаражи,
                                        парковки, эстакады, станции</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Водный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Воздушный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Автотреки</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Коллекционные
                                        модели</a>
                                </li>
                            </ul>
                            <a href="#" class="navigation__hidden-all">
                                <span> Все 9 категорий</span>
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#arrow-btn"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="navigation__hidden-item">
                            <span class="navigation__hidden-open js-openCategory"></span>
                            <a href="#" class="navigation__hidden-title">
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#airplane"></use>
                                </svg>
                                <span>Летний ассортимент</span>
                            </a>
                            <ul class="navigation__hidden-sublist">
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Гаражи,
                                        парковки, эстакады, станции</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Водный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Воздушный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Автотреки</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Коллекционные
                                        модели</a>
                                </li>
                            </ul>
                            <a href="#" class="navigation__hidden-all">
                                <span> Все 9 категорий</span>
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#arrow-btn"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="navigation__hidden-item">
                            <span class="navigation__hidden-open js-openCategory"></span>
                            <a href="#" class="navigation__hidden-title">
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#tricycle"></use>
                                </svg>
                                <span>Транспорт</span>
                            </a>
                            <ul class="navigation__hidden-sublist">
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Гаражи,
                                        парковки, эстакады, станции</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Водный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Воздушный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Автотреки</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Коллекционные
                                        модели</a>
                                </li>
                            </ul>
                            <a href="#" class="navigation__hidden-all">
                                <span> Все 9 категорий</span>
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#arrow-btn"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="navigation__hidden-item">
                            <span class="navigation__hidden-open js-openCategory"></span>
                            <a href="#" class="navigation__hidden-title">
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#airplane"></use>
                                </svg>
                                <span>Летний ассортимент</span>
                            </a>
                            <ul class="navigation__hidden-sublist">
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Гаражи,
                                        парковки, эстакады, станции</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Водный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Воздушный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Автотреки</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Коллекционные
                                        модели</a>
                                </li>
                            </ul>
                            <a href="#" class="navigation__hidden-all">
                                <span> Все 9 категорий</span>
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#arrow-btn"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="navigation__hidden-item">
                            <span class="navigation__hidden-open js-openCategory"></span>
                            <a href="#" class="navigation__hidden-title">
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#tricycle"></use>
                                </svg>
                                <span>Транспорт</span>
                            </a>
                            <ul class="navigation__hidden-sublist">
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Гаражи,
                                        парковки, эстакады, станции</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Водный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Воздушный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Автотреки</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Коллекционные
                                        модели</a>
                                </li>
                            </ul>
                            <a href="#" class="navigation__hidden-all">
                                <span> Все 9 категорий</span>
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#arrow-btn"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="navigation__hidden-item">
                            <span class="navigation__hidden-open js-openCategory"></span>
                            <a href="#" class="navigation__hidden-title">
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#airplane"></use>
                                </svg>
                                <span>Летний ассортимент</span>
                            </a>
                            <ul class="navigation__hidden-sublist">
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Гаражи,
                                        парковки, эстакады, станции</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Водный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Воздушный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Автотреки</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Коллекционные
                                        модели</a>
                                </li>
                            </ul>
                            <a href="#" class="navigation__hidden-all">
                                <span> Все 9 категорий</span>
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#arrow-btn"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="navigation__hidden-item">
                            <span class="navigation__hidden-open js-openCategory"></span>
                            <a href="#" class="navigation__hidden-title">
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#tricycle"></use>
                                </svg>
                                <span>Транспорт</span>
                            </a>
                            <ul class="navigation__hidden-sublist">
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Гаражи,
                                        парковки, эстакады, станции</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Водный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Воздушный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Автотреки</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Коллекционные
                                        модели</a>
                                </li>
                            </ul>
                            <a href="#" class="navigation__hidden-all">
                                <span> Все 9 категорий</span>
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#arrow-btn"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="navigation__hidden-item">
                            <span class="navigation__hidden-open js-openCategory"></span>
                            <a href="#" class="navigation__hidden-title">
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#airplane"></use>
                                </svg>
                                <span>Летний ассортимент</span>
                            </a>
                            <ul class="navigation__hidden-sublist">
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Гаражи,
                                        парковки, эстакады, станции</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Водный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Воздушный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Автотреки</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Коллекционные
                                        модели</a>
                                </li>
                            </ul>
                            <a href="#" class="navigation__hidden-all">
                                <span> Все 9 категорий</span>
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#arrow-btn"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="navigation__hidden-item">
                            <span class="navigation__hidden-open js-openCategory"></span>
                            <a href="#" class="navigation__hidden-title">
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#tricycle"></use>
                                </svg>
                                <span>Транспорт</span>
                            </a>
                            <ul class="navigation__hidden-sublist">
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Гаражи,
                                        парковки, эстакады, станции</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Водный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Воздушный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Автотреки</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Коллекционные
                                        модели</a>
                                </li>
                            </ul>
                            <a href="#" class="navigation__hidden-all">
                                <span> Все 9 категорий</span>
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#arrow-btn"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="navigation__hidden-item">
                            <span class="navigation__hidden-open js-openCategory"></span>
                            <a href="#" class="navigation__hidden-title">
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#airplane"></use>
                                </svg>
                                <span>Летний ассортимент</span>
                            </a>
                            <ul class="navigation__hidden-sublist">
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Гаражи,
                                        парковки, эстакады, станции</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Водный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Воздушный
                                        транспорт</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Автотреки</a>
                                </li>
                                <li class="navigation__hidden-subitem"><a href="#"
                                                                          class="navigation__hidden-sublink">Коллекционные
                                        модели</a>
                                </li>
                            </ul>
                            <a href="#" class="navigation__hidden-all">
                                <span> Все 9 категорий</span>
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#arrow-btn"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link" data-show="false">Новинки</a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link" data-show="false">Хиты продаж</a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link" data-show="false">Товары по акции</a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link" data-show="true">Бренд</a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link" data-show="true">Фикс-цена</a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link" data-show="true">Прайс-лист</a>
            </li>
            <li class="navigation__item navigation__item_mobile navigation__item_svg">
                <a href="#" class="navigation__link" data-show="false">
                      <span class="navigation__link-name">
                         Еще <span>5</span>
                      </span>
                    <svg>
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#arrow-btn"></use>
                    </svg>
                </a>
                <ul class="navigation__additional">
                    <li class="navigation__additional-item"><a href="#"
                                                               class="navigation__additional-link">Новинки</a>
                    </li>
                    <li class="navigation__additional-item"><a href="#"
                                                               class="navigation__additional-link">Хиты
                            продаж</a>
                    </li>
                    <li class="navigation__additional-item"><a href="#"
                                                               class="navigation__additional-link">Бренд</a>
                    </li>
                    <li class="navigation__additional-item"><a href="#"
                                                               class="navigation__additional-link">Фикс-цена</a>
                    </li>
                    <li class="navigation__additional-item"><a href="#"
                                                               class="navigation__additional-link">Прайс-лист</a>
                    </li>
                </ul>
            </li>*/?>
            <?endforeach;?>
        </ul>
    </nav>
<?endif;?>

<?/*if (!empty($arResult)):?>
<ul id="horizontal-multilevel-menu">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a>
				<ul>
		<?else:?>
			<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
				<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<div class="menu-clear-left"></div>
<?endif*/?>