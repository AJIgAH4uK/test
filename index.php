<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>
    <section id="intro">
        <div class="content-center">
            <div class="columns">
                <div class="column left-column">
                    <h1>Таможенный Брокер</h1>
                    <div class="sub-title">Доставка товаров из&nbsp;любой точки мира</div>
                    <div class="description">Работаем с&nbsp;юридическими и&nbsp;физическими лицами и&nbsp;доставляем
                        любые партии: от&nbsp;единичной упаковки до&nbsp;железнодорожного состава.
                    </div>
                </div>
                <div class="column right-column">
                    <div class="form">
                        <div class="title">Заказать консультацию специалиста:</div>
                        <form id="consultation" action="ajax/" method="POST" class="async_form">
                            <input type="hidden" name="FORM_NAME" value="Заказать консультацию специалиста"/>
                            <input type="hidden" name="FORM_ID" value="consultation"/>
                            <div class="field"><input type="text" name="NAME" placeholder="Ваше имя"/></div>
                            <div class="field"><input type="text" name="PHONE" placeholder="Телефон"/></div>
                            <input type="submit" value="отправить"/>
                            <div class="status">Заявка отправлена. Спасибо!</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "advantages-v1",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "1",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "3",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "ID",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "advantages-v1"
    ),
    false
); ?>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "advantages-v2",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "2",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "ID",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "advantages-v2"
    ),
    false
); ?>
    <section class="form-standart-block">
        <div class="content-center">
            <div class="title">Оформите заявку на&nbsp;обслуживание</div>
            <form action="ajax/" method="POST" id="form-1" class="form-standart async_form">
                <input type="hidden" name="FORM_NAME" value="Оформите заявку на&nbsp;обслуживание #1"/>
                <input type="hidden" name="FORM_ID" value="form-1"/>
                <div class="field"><input type="text" name="NAME" placeholder="Ваше имя"/></div>
                <div class="field"><input type="text" name="PHONE" placeholder="Телефон"/></div>
                <div class="field"><input type="text" name="TIME" placeholder="Удобное время звонка"/></div>
                <div class="submit">
                    <input type="submit" value="Отправить заявку"/>
                </div>
                <div class="status">Заявка отправлена. Спасибо!</div>
            </form>
        </div>
    </section>
    <? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "advantages-v3",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "2",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "ID",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "advantages-v2"
    ),
    false
); ?>
    <? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "advantages-v4",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "2",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "ID",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "advantages-v2"
    ),
    false
); ?>
    <section class="partners">
        <div class="content-center">
            <div class="block-title h1">
                С нами работали и остались довольны:
            </div>
            <div class="slider-wrapper">
                <div class="slider">
                    <div class="slides bxslider">
                        <div class="slide feedback-item">
                            <div class="slide-row">
                                <div class="partner-item">
                                    <div class="pse-table">
                                        <div class="pse-table-cell">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/partners/partner-1.png"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="partner-item">
                                    <div class="pse-table">
                                        <div class="pse-table-cell">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/partners/partner-3.png"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="partner-item">
                                    <div class="pse-table">
                                        <div class="pse-table-cell">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/partners/partner-1.png"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="partner-item">
                                    <div class="pse-table">
                                        <div class="pse-table-cell">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/partners/partner-3.png"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="partner-item">
                                    <div class="pse-table">
                                        <div class="pse-table-cell">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/partners/partner-1.png"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide feedback-item">
                        <div class="slide-row">
                            <div class="partner-item">
                                <div class="pse-table">
                                    <div class="pse-table-cell">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/partners/partner-1.png"/>
                                    </div>
                                </div>
                            </div>
                            <div class="partner-item">
                                <div class="pse-table">
                                    <div class="pse-table-cell">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/partners/partner-3.png"/>
                                    </div>
                                </div>
                            </div>
                            <div class="partner-item">
                                <div class="pse-table">
                                    <div class="pse-table-cell">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/partners/partner-1.png"/>
                                    </div>
                                </div>
                            </div>
                            <div class="partner-item">
                                <div class="pse-table">
                                    <div class="pse-table-cell">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/partners/partner-3.png"/>
                                    </div>
                                </div>
                            </div>
                            <div class="partner-item">
                                <div class="pse-table">
                                    <div class="pse-table-cell">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/partners/partner-1.png"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="form-standart-block">
        <div class="content-center">
            <div class="title">Оформите заявку на&nbsp;обслуживание</div>
            <form action="ajax/" method="POST" id="form-2" class="form-standart async_form">
                <input type="hidden" name="FORM_NAME" value="Оформите заявку на&nbsp;обслуживание #2"/>
                <input type="hidden" name="FORM_ID" value="form-2"/>
                <div class="field"><input type="text" name="NAME" placeholder="Ваше имя"/></div>
                <div class="field"><input type="text" name="PHONE" placeholder="Телефон"/></div>
                <div class="field"><input type="text" name="TIME" placeholder="Удобное время звонка"/></div>
                <div class="submit">
                    <input type="submit" value="Отправить заявку"/>
                </div>
                <div class="status">Заявка отправлена. Спасибо!</div>
            </form>
        </div>
    </section>
    <div id="callback">
        <div class="title">Заказать обратный звонок</div>
        <form id="callback-form" action="ajax/" method="POST" class="form-standart async_form">
            <input type="hidden" name="FORM_NAME" value="Заказать обратный звонок"/>
            <input type="hidden" name="FORM_ID" value="callback-form"/>
            <div class="field"><input type="text" name="NAME" placeholder="Ваше имя"/></div>
            <div class="field"><input type="text" name="PHONE" placeholder="Телефон"/></div>
            <div class="field"><input type="text" name="TIME" placeholder="Удобное время звонка"/></div>
            <div class="submit">
                <input type="submit" value="Отправить заявку"/>
            </div>
            <div class="status">Заявка отправлена. Спасибо!</div>
        </form>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>