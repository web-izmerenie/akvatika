<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

	$tplPath = $APPLICATION->GetTemplatePath();
	global $tplPath;
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
  	<title><?$APPLICATION->ShowTitle()?></title>
		<?if ($USER->IsAdmin()){$APPLICATION->ShowHead();}?>
    <meta charset="utf-8">
    <meta name="viewport" content-width="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?$APPLICATION->ShowMeta("keywords");?>
		<?$APPLICATION->ShowMeta("description");?>
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/bower_components/slick-carousel/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/fancyBox/source/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/jquery-ui/themes/ui-lightness/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$tplPath;?>/styles/build/build.css">
    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/bower_components/jquery-form-styler/jquery.formstyler.min.js"></script>
    <script type="text/javascript" src="/bower_components/slick-carousel/slick/slick.min.js"></script>
    <script type="text/javascript" src="/bower_components/fancyBox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="/bower_components/jquery-ui/jquery-ui.js"></script>
    <script type="text/javascript" src="<?=$tplPath;?>/scripts/jquery.ui.datepicker-ru.js"></script>
    <script type="text/javascript" src="<?=$tplPath;?>/scripts/main.js"></script>
  </head>
  <body>
		<?$APPLICATION->ShowPanel();?>
    <div class="wrapper">
      <header>
        <div id="logo"><img src="<?=$tplPath?>/img/logo.png"></div>
        <div id="header-info">
          <p>Доставка по Ростову-на-Дону и области</p><a href="tel:8 (863) 204-26-68">8 (863) 204-26-68</a>
        </div>
        <nav id="menu">
          <ul>
            <li><a href="#order" class="ankor">Заказать</a></li>
            <li><a href="../html/production.html">Производство</a></li>
            <li><a href="../html/contacts.html">Контакты</a></li>
          </ul>
        </nav>
      </header>
      <main class="content">
