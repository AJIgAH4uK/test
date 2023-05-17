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
        <section class="advantages-v1">
            <div class="content-center">
                <div class="title">Ваш груз находится в&nbsp;другой стране?</div>
                <div class="sub-title">Мы обеспечим:</div>
                <div class="columns">
                    <div class="column">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/advantages-1.png" width="154" height="154" alt="Логистику и транспортировку"
                             title="Логистику и транспортировку"/>
                        Логистику и транспортировку
                    </div>
                    <div class="column">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/advantages-2.png" width="154" height="154" alt="Таможенное оформление"
                             title="Таможенное оформление"/>
                        Таможенное оформление
                    </div>
                    <div class="column">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/advantages-3.png" width="154" height="154" alt="Экспедирование"
                             title="Экспедирование"/>
                        Экспедирование
                    </div>
                </div>
            </div>
        </section>
        <section class="advantages-v2">
            <div class="content-center">
                <div class="columns">
                    <div class="column">Оптимизируем доставку по&nbsp;скорости или стоимости</div>
                    <div class="column">Предлагаем хорошие условия для доставки партий меньше стандартного контейнера
                    </div>
                </div>
            </div>
        </section>
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
        <section class="advantages-v3">
            <div class="content-center">
                <div class="title">Когда вы оформите заявку:</div>
                <div class="columns">
                    <div class="column">
                        <div class="num-1">
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
        <section class="advantages-v4">
            <div class="content-center">
                <div class="columns">
                    <div class="column right">
                        <div class="title">Надежность</div>
                        <ul>
                            <li>Мы&nbsp;работаем таможенными брокерами больше 15&nbsp;лет.</li>
                            <li>Мы&nbsp;адекватно оцениваем риски задержек и&nbsp;прописываем
                                их&nbsp;в&nbsp;контракте.
                            </li>
                            <li>За&nbsp;это время мы&nbsp;доставили тысячи грузов.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
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
                                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/partners/partner-1.png"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="partner-item">
                                        <div class="pse-table">
                                            <div class="pse-table-cell">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/partners/partner-3.png"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="partner-item">
                                        <div class="pse-table">
                                            <div class="pse-table-cell">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/partners/partner-1.png"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="partner-item">
                                        <div class="pse-table">
                                            <div class="pse-table-cell">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/partners/partner-3.png"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="partner-item">
                                        <div class="pse-table">
                                            <div class="pse-table-cell">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/partners/partner-1.png"/>
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
                                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/partners/partner-1.png"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="partner-item">
                                    <div class="pse-table">
                                        <div class="pse-table-cell">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/partners/partner-3.png"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="partner-item">
                                    <div class="pse-table">
                                        <div class="pse-table-cell">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/partners/partner-1.png"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="partner-item">
                                    <div class="pse-table">
                                        <div class="pse-table-cell">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/partners/partner-3.png"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="partner-item">
                                    <div class="pse-table">
                                        <div class="pse-table-cell">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/partners/partner-1.png"/>
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