<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

$tplPath = $APPLICATION->GetTemplatePath();
global $tplPath;

require($_SERVER['DOCUMENT_ROOT'].$tplPath.'/inc/get_constant.php');
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
  	<title><?$APPLICATION->ShowTitle()?></title>
		<?$APPLICATION->ShowHead();?>
    <meta name="viewport" content-width="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" type="text/css" href="/bower_components/slick-carousel/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/fancyBox/source/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/jquery-ui/themes/ui-lightness/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/animate.css/animate.min.css">
		<link rel="stylesheet" type="text/css" href="/bower_components/video.js/dist/video-js/video-js.css">
    <link rel="stylesheet" type="text/css" href="<?=$tplPath;?>/styles/build/build.css">
    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/bower_components/jquery-form-styler/jquery.formstyler.min.js"></script>
    <script type="text/javascript" src="/bower_components/slick-carousel/slick/slick.min.js"></script>
    <script type="text/javascript" src="/bower_components/fancyBox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="/bower_components/jquery-ui/jquery-ui.js"></script>
    <script type="text/javascript" src="<?=$tplPath;?>/scripts/jquery.ui.datepicker-ru.js"></script>
    <script type="text/javascript" src="<?=$tplPath;?>/scripts/main.js"></script>
		<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
  </head>
  <body>
		<?$APPLICATION->ShowPanel();?>
    <div class="wrapper">
      <!--noindex--><header>
        <div id="logo"><img src="<?=$tplPath?>/img/logo.png"></div>
        <div id="header-info">
          <p>Доставка по Ростову-на-Дону и области</p>
					<a href="tel:<?=$TELEPHONE;?>"><?=$TELEPHONE;?></a>
        </div>
				<?$APPLICATION->IncludeComponent("bitrix:menu", "menu", Array(
					"COMPONENT_TEMPLATE" => ".default",
						"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
						"MENU_CACHE_TYPE" => "N",	// Тип кеширования
						"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
						"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
						"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
							0 => "",
						),
						"MAX_LEVEL" => "1",	// Уровень вложенности меню
						"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
						"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
						"DELAY" => "N",	// Откладывать выполнение шаблона меню
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
					),
					false
				);?>
		</header><!--/noindex-->
      <main class="content">
