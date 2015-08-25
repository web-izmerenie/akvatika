<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
$tplPath = $APPLICATION->GetTemplatePath();
require($_SERVER['DOCUMENT_ROOT'].$tplPath.'/inc/get_constant.php');
?>
<head>
	<?$APPLICATION->ShowHeadScripts();
	$APPLICATION->ShowHeadStrings();?>
	<link rel="stylesheet" type="text/css" href="/bower_components/video.js/dist/video-js/video-js.css">
  <script type="text/javascript" src="<?=$tplPath;?>scripts/ajaxPage.js"></script>
  <script type="text/javascript" src="/bower_components/video.js/dist/video-js/video.js"></script>
</head>
<?$APPLICATION->ShowPanel();?>
