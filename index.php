<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main_slider",
	array(
		"COMPONENT_TEMPLATE" => "main_slider",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "6",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "ATT_ADVENTS",
			1 => "ATT_PRICE",
			2 => "",
		),
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
	),
	false
);?>
<section id="order" class="order">
	<h1>Заказать</h1>
	<p>Наш менеджер свяжется с вами в течение 30 минут</p>
	<form method="POST" action="./ajax/mail.php">
		<div class="row">
			<div id="form-order" class="column">
				<h1>Доставка</h1>
				<div id="checkbox">
					<input type="radio" name="city" id="rostov" value="Ростов-на-Дону" checked="checked">
					<label for="rostov">Ростов-на-Дону</label>
					<input type="radio" name="city" id="aksai" value="Аксай">
					<label for="aksai">Аксай</label>
					<input type="radio" name="city" id="area" value="Область">
					<label for="area">Область</label>
					<input type="radio" name="city" id="pickup" value="Самовывоз">
					<label for="pickup">Самовывоз</label>
				</div>
				<div id="adress-form" class="blocks">
					<div class="inline">
						<input type="text" name="street" placeholder="Улица" class="require">
						<input type="text" name="number" placeholder="Дом" maxlength="7" class="require">
						<input type="text" name="flat" placeholder="Кв." maxlength="4" class="require">
					</div>
					<div class="flex">
						<input type="text" name="phone" placeholder="Телефон" maxlength="15" class="require"><a href="#date" class="date">Укажите дату доставки</a>
						<input type="text" name="date" value="" placeholder="дата">
					</div>
					<textarea name="msg" placeholder="Дополнительная информация: Ваше имя, желание приобрести кулер, помпу и т. д." maxlength="300"></textarea>
					<span>Мы не передаём ваши персональные данные третьим лицам — используем их только для целей доставки.</span>
				</div>
				<div id="area-text" class="blocks">
					<p><?=$TEXT_AREA?></p>
				</div>
				<div id="pickup-text" class="blocks">
					<p><?=$TEXT_PICKUP?></p>
				</div>
			</div>
			<div id="info" class="column">
				<p>Не забудьте спросить у нашего менеджера:</p>
				<div class="flex">
					<ul>
						<li>Кулер</li>
						<li>Помпу</li>
						<li>Стаканодержатели</li>
					</ul>
					<ul>
						<li>Стаканчики</li>
						<li>Чехол на бутыль</li>
					</ul>
				</div><img src="<?=$tplPath?>/img/avto.png">
			</div>
		</div>
		<div class="row" id="calc-row">
			<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"order",
	array(
		"COMPONENT_TEMPLATE" => "order",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "6",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "ATT_PRICE",
			1 => "",
		),
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
		"INCLUDE_SUBSECTIONS" => "N",
		"DISPLAY_DATE" => "N",
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
		"MESSAGE_404" => "",
		"FILE_404" => ""
	),
	false
);?>
			<input type="submit" value="Заказать">
		</div>
	</form>
</section>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"certificate",
	array(
		"COMPONENT_TEMPLATE" => "certificate",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "8",
		"NEWS_COUNT" => "100",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
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
	),
	false
);?>

<section class="additional-text">
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"COMPONENT_TEMPLATE" => ".default",
			"AREA_FILE_SHOW" => "page",
			"AREA_FILE_SUFFIX" => "text",
			"EDIT_TEMPLATE" => ""
		)
	);?>
</section>

<section class="advents">
	<h1>Хотите покупать воду дешевле?</h1>
	<ul>
		<li><a href="/stante-nashim-postoyannym-pokupatelem.php"><img src="<?=$tplPath?>/img/hand.png">
				<p>Станьте нашим постоянным покупателем</p></a></li>
		<li><a href="/pokupayte-vodu-optom.php"><img src="<?=$tplPath?>/img/bottles.png">
				<p>Покупайте воду оптом <br> от … бутылей</p></a></li>
		<li><a href="/zaberite-vodu-samostoyatelno.php"><img src="<?=$tplPath?>/img/car.png">
				<p>Заберите воду самостоятельно</p></a></li>
	</ul>
	<h2>Узнайте подробности по телефону: <?=$TELEPHONE;?></h2>
</section>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
