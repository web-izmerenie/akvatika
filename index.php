<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
require($_SERVER['DOCUMENT_ROOT'].$tplPath.'/inc/get_constant_tel.php');
?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "main_slider", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "6",	// Код информационного блока
		"NEWS_COUNT" => "2",	// Количество новостей на странице
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "ACTIVE_FROM",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "ATT_ADVENTS",
			1 => "ATT_PRICE",
			2 => "",
		),
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SHOW_404" => "N",	// Показ специальной страницы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
	),
	false
);?>
<section id="order" class="order">
	<h1>Заказать</h1>
	<p>Наш менеджер свяжется с вами в течение 30 минут</p>
	<form method="POST">
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
						<input type="text" name="number" placeholder="Дом" maxlength="4" class="require">
						<input type="text" name="flat" placeholder="Кв." maxlength="4" class="require">
					</div>
					<div class="flex">
						<input type="text" name="phone" placeholder="Телефон" maxlength="15" class="require"><a href="#date" class="date">Укажите дату доставки</a>
						<input type="text" name="date" value="" placeholder="дата">
					</div>
					<textarea name="msg" placeholder="Дополнительная информация" maxlength="300"></textarea>
				</div>
				<div id="area-text" class="blocks">
					<p>Позвоните пожалуйста по телефону 8 (863) 266-10-04, <br>
						чтобы уточнить условия доставки
					</p>
				</div>
				<div id="pickup-text" class="blocks">
					<p>Вы можете самостоятельно забрать воду по адресу: <br>
						г. Ростов-на-Дону, ул. Павленко, 15 лит.  А <br>
						(въезд с улицы Мечникова, 35)
					</p>
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
		<div class="row">
			<div id="calc" class="column">
				<ul>
					<li><img src="<?=$tplPath?>/img/min_boutle1.png">
						<div class="text"><span>
								Негазированная минеральная
								природная столовая вода</span>
							<p>«Серебряная «Усть-Быстра»</p>
						</div>
						<div class="count">
							<div class="manag"><span class="plus">+</span><span class="minus">-</span></div>
							<input type="text" name="count1" placeholder="0" value="0" maxlength="2" data-price="120">
							<label>шт.</label>
						</div>
					</li>
					<li><img src="<?=$tplPath?>/img/min_boutle2.png">
						<div class="text"><span>
								Негазированная минеральная
								природная столовая вода</span>
							<p>«Горная Серебряная»</p>
						</div>
						<div class="count">
							<div class="manag"><span class="plus">+</span><span class="minus">-</span></div>
							<input type="text" name="count2" placeholder="0" value="0" maxlength="2" data-price="160">
							<label>шт.</label>
						</div>
					</li>
					<li><img src="<?=$tplPath?>/img/min_boutle3.png">
						<div class="text">
							<p>Ваша тара на обмен</p><span>Поликарбонатная, чистая,<br>
								без брака</span>
						</div>
						<div class="count">
							<div class="manag"><span class="plus">+</span><span class="minus">-</span></div>
							<input type="text" name="count3" placeholder="0" value="0" maxlength="2" data-price="-50">
							<label>шт.</label>
						</div>
					</li>
				</ul>
			</div>
			<div id="price" class="column">
				<p>Сумма Заказа</p><span>0</span>
			</div>
			<input type="submit" value="Заказать">
		</div>
	</form>
</section>
<section class="cert">
	<ul>
		<li> <a href="../img/cert1.jpg" rel="galery"><img src="<?=$tplPath?>/img/cert1.jpg"></a></li>
		<li> <a href="../img/cert2.jpg" rel="galery"><img src="<?=$tplPath?>/img/cert2.jpg"></a></li>
		<li> <a href="../img/cert3.jpg" rel="galery"><img src="<?=$tplPath?>/img/cert3.jpg"></a></li>
		<li> <a href="../img/cert4.jpg" rel="galery"><img src="<?=$tplPath?>/img/cert4.jpg"></a></li>
		<li> <a href="../img/cert1.jpg" rel="galery"><img src="<?=$tplPath?>/img/cert1.jpg"></a></li>
		<li> <a href="../img/cert2.jpg" rel="galery"><img src="<?=$tplPath?>/img/cert2.jpg"></a></li>
		<li> <a href="../img/cert3.jpg" rel="galery"><img src="<?=$tplPath?>/img/cert3.jpg"></a></li>
		<li> <a href="../img/cert4.jpg" rel="galery"><img src="<?=$tplPath?>/img/cert4.jpg"></a></li>
	</ul>
</section>
<section class="advents">
	<h1>Хотите покупать воду дешевле?</h1>
	<ul>
		<li><a href="../html/advents1.html"><img src="<?=$tplPath?>/img/hand.png">
				<p>Станьте нашим постоянным покупателем</p></a></li>
		<li><a href="../html/advents2.html"><img src="<?=$tplPath?>/img/bottles.png">
				<p>Покупайте воду оптом <br> от … бутылей</p></a></li>
		<li><a href="../html/advents3.html"><img src="<?=$tplPath?>/img/car.png">
				<p>Заберите воду самостоятельно</p></a></li>
	</ul>
	<h2>Узнайте подробности по телефону: <?=$TELEPHONE;?></h2>
</section>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
