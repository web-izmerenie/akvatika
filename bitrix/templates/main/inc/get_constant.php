<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
	CModule::IncludeModule("iblock");

	function getElement($id, $val){
		$elem = CIBlockElement::GetByID($id);
		if($ar_elem = $elem->GetNext())
			$return_val = $ar_elem[$val];
			return $return_val;
	}

$TELEPHONE = getElement(33, 'NAME');
$INFO_ADVENT1 = getElement(65, 'PREVIEW_TEXT');
$TEXT_PICKUP = getElement(70, 'PREVIEW_TEXT');
$TEXT_AREA = getElement(71, 'PREVIEW_TEXT');
$INFO_ADVENT2 = getElement(78, 'PREVIEW_TEXT');
$INFO_ADVENT3 = getElement(79, 'PREVIEW_TEXT');
