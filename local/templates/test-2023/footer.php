<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CMain $APPLICATION */
?>
            <footer>
            <div class="content-center">
                <div class="columns">
                    <div class="copyright_block">
                        <div class="name"><? $APPLICATION->IncludeFile(SITE_DIR . "include_areas/logo.php", [], ["NAME" => "Лого"]) ?></div>
                        <div class="copy">
                            <? $APPLICATION->IncludeFile(SITE_DIR . "include_areas/copyright.php", [], ["NAME" => "Копирайт"]) ?>
                        </div>
                    </div>
                    <div class="phone_block">
                        <div class="phone">
                            <a onclick="location.href = 'tel:'+$(this).text().replace(/(\s|\(|\)|\-)/g,'')+'';" href="#">
                                <span>
                                    <? $APPLICATION->IncludeFile(SITE_DIR . "include_areas/phone.php", [], ["NAME" => "Телефон"]) ?>
                                </span>
                            </a>
                        </div>
                        <div class="footer-form">
                            <a href="#callback" class="callback" data-action="pupop">Заказать обратный звонок</a>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
        </div>
    </body>
</html>
