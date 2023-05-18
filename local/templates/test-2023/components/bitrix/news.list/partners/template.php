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
<section class="partners">
    <div class="content-center">
        <div class="block-title h1"><?=$arResult['NAME']?></div>
        <div class="slider-wrapper">
            <div class="slider">
                <div class="slides bxslider">
                    <div class="slide feedback-item">
                        <div class="slide-row">
                            <? foreach ($arResult['ITEMS'] as $arItem):?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                                <div class="partner-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                                <div class="pse-table">
                                    <div class="pse-table-cell">
                                        <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>" />
                                    </div>
                                </div>
                            </div >
                            <?endforeach?>
                        </div>
                    </div>
                </div>
                <div class="slide feedback-item">
                    <div class="slide-row">
                        <? foreach ($arResult['ITEMS'] as $arItem):?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="partner-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <div class="pse-table">
                                <div class="pse-table-cell">
                                    <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>" />
                                </div>
                            </div>
                        </div>
                        <?endforeach?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>