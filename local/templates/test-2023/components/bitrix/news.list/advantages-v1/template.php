<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="advantages-v1">
    <div class="content-center">
        <div class="title">Ваш груз находится в&nbsp;другой стране?</div>
        <div class="sub-title">Мы обеспечим:</div>
        <div class="columns">
            <? foreach ($arResult['ITEMS'] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
            <div class="column" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" width="154" height="154" alt="Логистику и транспортировку"
                     title="<?=$arItem['NAME']?>"/>
                <?=$arItem['NAME']?>
            </div>
            <? endforeach?>
        </div>
    </div>
</section>

