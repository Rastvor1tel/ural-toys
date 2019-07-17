<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<div class="callback-form__body">
    <?if($arResult['isFormNote'] == 'Y'):?>
        <div class="callback-form__body-thank">
            <?=$arResult["FORM_NOTE"]?>
        </div>
    <?else:?>
        <?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
        <?=$arResult["FORM_NOTE"]?>
        <?=$arResult["FORM_HEADER"]?>
            <div class="callback-form__body-wrap">
                <div class="callback-form__row">
                    <label class="callback-form__row-label text-label">
                        <input type="text" class="callback-form__input text-input" name="form_text_1" value="<?=$arResult['arrVALUES']['form_text_1']?>" placeholder="Ваше имя">
                    </label>
                    <label class="callback-form__row-label text-label">
                        <input type="text" class="callback-form__input text-input" name="form_text_2" value="<?=$arResult['arrVALUES']['form_text_2']?>" required placeholder="Ваш телефон*">
                    </label>
                </div>
                <label class="callback-form__label">
                    <textarea name="form_textarea_3" rows="1" class="text-area callback-form__input text-input" placeholder="Ваш вопрос"><?=$arResult['arrVALUES']['form_textarea_3']?></textarea>
                </label>
                <div class="callback-form__row callback-form__row_mobile-col">
                    <label class="callback-form__checkbox checkbox">
                        <input type="checkbox" class="checkbox__box visually-hidden" required>
                        <span class="checkbox__span"></span>
                        <span class="checkbox__text">Соглашаюсь на обработку данных, установленных в политике конфиденциальности</span>
                    </label>
                    <input class="callback-form__submit common-red-button" type="submit" name="web_form_submit" value="<?=htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" />
                </div>
            </div>
        <?=$arResult["FORM_FOOTER"]?>
    <?endif;?>
</div>
