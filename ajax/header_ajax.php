<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
$tplPath = $APPLICATION->GetTemplatePath();
require($_SERVER['DOCUMENT_ROOT'].$tplPath.'/inc/get_constant.php');
?>
<head>
	<script type="text/javascript" src="/bower_components/video.js/dist/video-js/video.js"></script>
  <script type="text/javascript" src="<?=$tplPath;?>scripts/ajaxPage.js"></script>
</head>
<?$APPLICATION->ShowPanel();?>
