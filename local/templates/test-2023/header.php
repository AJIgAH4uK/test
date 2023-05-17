<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CMain $APPLICATION */

use Bitrix\Main\Page\Asset;
?>

<!doctype html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1" />
    <?$APPLICATION->ShowHead(false)?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <META NAME="description" CONTENT="Gefest Logistic" />
    <meta name="cmsmagazine" content="7a07349553113a03d820998046df0929" />
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery-1.10.2.min.js"); ?>
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="" type="text/css" media="screen" />
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/js/fancybox/jquery.fancybox.css"); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/global.css"); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/print.css"); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/jquery.bxslider.css"); ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/fancybox/jquery.fancybox.pack.js"); ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/fancybox/jquery.mousewheel-3.0.6.pack.js"); ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.placeholder.js"); ?>
    <? // TODO Добавить стили чекбоксов и селектов ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.bxslider.min.js"); ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.form.min.js"); ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.maskedinput.js"); ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/global.js"); ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/modernizr.custom.77745.js"); ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.placeholder.js"); ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/retina.js"); ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <header>
            <div class="header-bottom">
                <div class="content-center">
                    <div class="columns">
                        <div class="header-logo">
                            <? $APPLICATION->IncludeFile(SITE_DIR . "include_areas/logo.php", [], ["NAME" => "Лого"]) ?>
                        </div>
                        <div class="header-phone">
                            <a onclick="location.href = 'tel:'+$(this).text().replace(/(\s|\(|\)|\-)/g,'')+'';"
                               href="#">
                                <span>
                                    <? $APPLICATION->IncludeFile(SITE_DIR . "include_areas/phone.php", [], ["NAME" => "Телефон"]) ?>
                                </span>
                            </a>
                        </div>
                        <div class="header-form">
                            <a href="#callback" class="callback" data-action="pupop">Заказать обратный звонок</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?$APPLICATION->ShowPanel()?>
