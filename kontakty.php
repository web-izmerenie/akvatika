<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
$tplPath = $APPLICATION->GetTemplatePath();
require($_SERVER['DOCUMENT_ROOT'].$tplPath.'/inc/get_constant.php');
?>
<head>
  <script type="text/javascript" src="<?=$tplPath;?>bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="<?=$tplPath;?>scripts/ajaxPage.js"></script>
</head>
<body>
  <section class="wrap contacts"><a href="#close" class="close"></a>
    <h1>Контакты</h1>
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"contacts",
			Array(
				"COMPONENT_TEMPLATE" => "contacts",
				"IBLOCK_TYPE" => "content",
				"IBLOCK_ID" => "9",
				"NEWS_COUNT" => "20",
				"SORT_BY1" => "SORT",
				"SORT_ORDER1" => "ASC",
				"SORT_BY2" => "ACTIVE_FROM",
				"SORT_ORDER2" => "DESC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => array("PREVIEW_TEXT","DETAIL_TEXT",""),
				"PROPERTY_CODE" => array("ATT_MAIL","ATT_MAP","ATT_TEL","ATT_FAKS",""),
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "36000000",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"PREVIEW_TRUNCATE_LEN" => "",
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"SET_TITLE" => "N",
				"SET_BROWSER_TITLE" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_LAST_MODIFIED" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "N",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"INCLUDE_SUBSECTIONS" => "Y",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"PAGER_TEMPLATE" => ".default",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"PAGER_TITLE" => "Новости",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"SET_STATUS_404" => "N",
				"SHOW_404" => "N",
				"MESSAGE_404" => ""
			)
		);?>
  </section>
</body>
