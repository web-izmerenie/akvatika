<?
switch ($_GET['SEO_TEXT']) {
	case 'voda':
		$title = "Питьевая вода в бутылях 19л, купить воду в бутылях";
		$text = "voda";
		break;

	case 'kuler':
		$title = "Кулер для воды, купить с доставкой в Ростове-на-Дону";
		$text = "kuler";
		break;

	case 'pompa':
		$title = "Помпа для воды. Купить помпу для бутилированной воды";
		$text = "pompa";
		break;

	default:
		$title = $APPLICATION->GetProperty('title');
		$text = "text";
		break;
}
