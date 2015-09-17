<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if ($_POST['city'] && $_POST['street'] && $_POST['number'] && $_POST['flat'] && $_POST['phone']){
	$text = '
	<h3>Информация о покупателе:</h3>
	<ul>
		<li>Город - '.$_POST['city'].'</li>
		<li>Адрес - '.$_POST['street'].', '.$_POST['number'].', '.$_POST['flat'].'</li>
		<li>Телефон - '.$_POST['phone'].'</li>
		<li>Дата доставки - '.$_POST['date'].'</li>
	</ul>
	<h3>Дополнительная информация:</h3>
	 '.$_POST['msg'].'
	<h3>Информация о заказе:</h3>
	<ul>
		<li>«Серебряная «Усть-Быстра» - '.$_POST['count34'].'</li>
		<li>«Горная Серебряная» - '.$_POST['count35'].'</li>
		<li>Ваша тара на обмен - '.$_POST['count36'].'</li>
	</ul>
	 Цена - '.$_POST['price'];

	//запись в инфоблок
	$arFileds = Array( "MODIFIED_BY" => $USER->GetID(),
				 "IBLOCK_ID" => 7,
				 "NAME" => 'Заявка от '.$_POST['phone'],
				 "ACTIVE" => "N",
				 "DETAIL_TEXT" => $text,
				 );
		 CModule::IncludeModule("iblock");
		 $element = new CIBlockElement;
		 $newElement = $element->Add($arFileds);

	//отправка формы
	$arEventFields = array(
		"CITY" => $_POST['city'],
		"STREET" => $_POST['street'],
		"HOME" => $_POST['number'],
		"FLAT" => $_POST['flat'],
		"TELEPHONE" => $_POST['phone'],
		"DATE" => $_POST['date'],
		"MES" => $_POST['msg'],
		"ITEM0" => $_POST['count34'],
		"ITEM1" => $_POST['count35'],
		"ITEM2" => $_POST['count36'],
		"TOTAL_PRICE" => $_POST['price']
	);
	if (CModule::IncludeModule("main")){
	   CEvent::Send("order", "s1", $arEventFields);
	}
}
