<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
	CModule::IncludeModule("iblock");

	$tel = CIBlockElement::GetByID(33);
	if($ar_tel = $tel->GetNext())
  	$TELEPHONE = $ar_tel['NAME'];

	$info_advent = CIBlockElement::GetByID(65);
	if($ar_advent = $info_advent->GetNext())
  	$INFO_ADVENT = $ar_advent['PREVIEW_TEXT'];

	$text = CIBlockElement::GetByID(70);
	if($ar_text = $text->GetNext())
  	$TEXT_PICKUP = $ar_text['PREVIEW_TEXT'];
