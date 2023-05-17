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
        <div class="title">Когда вы оформите заявку:</div>
        <div class="columns">
            <div class="column">
                <div class="num-1" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <div class="sub-title">Личный менеджер</div>
                    <div class="description">Вам назначат личного менеджера. Он&nbsp;запросит нужные документы и&nbsp;составит
                        договор
                        на&nbsp;брокерское обслуживание.
                    </div>
                </div>
                <div class="num-2">
                    <div class="sub-title">Документы</div>
                    <div class="description">Юридический отдел поможет вам собрать документы для таможни и&nbsp;рассчитает
                        таможенный сбор.
                    </div>
                </div>
                <div class="num-3">
                    <div class="sub-title">Транспортировка</div>
                    <div class="description">Отдел логистики доставит товар с&nbsp;точки отгрузки на&nbsp;таможенный
                        склад и&nbsp;организует досмотр.
                    </div>
                    <div class="info">
                        У&nbsp;вашего личного менеджера всегда есть информация
                        о&nbsp;местонахождении груза и&nbsp;ожидаемом сроке прибытия.
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="num-4">
                    <div class="sub-title">Таможня</div>
                    <div class="description">Юридический отдел подаст документы
                        в&nbsp;таможню, решит возникшие вопросы и&nbsp;уплатит таможенные сборы.
                    </div>
                </div>
                <div class="num-5">
                    <div class="sub-title">Оплата</div>
                    <div class="description">Когда груз пройдет таможенную очистку и&nbsp;будет выпущен с&nbsp;таможенного
                        склада, личный менеджер свяжется с&nbsp;вами и&nbsp;выставит счет.
                    </div>
                </div>
                <div class="num-6">
                    <div class="sub-title">Доставка</div>
                    <div class="description">После оплаты счета груз будет доставлен
                        по&nbsp;указанному адресу, а&nbsp;вы&nbsp;получите полный набор документов, легализующих
                        пребывание груза в&nbsp;России, включая лицензии
                        и&nbsp;сертификаты.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>