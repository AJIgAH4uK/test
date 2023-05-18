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
<section class="advantages-v3">
    <div class="content-center">
        <div class="title"><?=$arResult['NAME']?></div>
        <div class="columns">
                <div class="column">
                    <? foreach ($arResult['ITEMS'] as $key => $arItem):?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                        <? if($key < 3):?>
                        <div class="num-<?=$key + 1?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <div class="sub-title"><?=$arItem['NAME']?></div>
                            <div class="description"><?=$arItem['PREVIEW_TEXT']?></div>
                            <? if(!empty($arItem['DETAIL_TEXT'])):?>
                            <div class="info">
                                <?=$arItem['DETAIL_TEXT']?>
                            </div>
                            <? endif?>
                        </div>
                        <? endif?>
                    <?endforeach?>
                </div>
                <?if(count ($arResult['ITEMS']) > 3):?>
                        <div class="column">
                            <? foreach ($arResult['ITEMS'] as $key => $arItem):?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                            <? if($key > 2):?>
                                <div class="num-<?=$key + 1?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                                    <div class="sub-title"><?=$arItem['NAME']?></div>
                                    <div class="description"><?=$arItem['PREVIEW_TEXT']?></div>
                                </div>
                            <?endif?>
                        <? endforeach;?>
                        </div>
                <? endif?>
            </div>
        </div>
    </div>
</section>