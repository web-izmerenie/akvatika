<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
	CModule::IncludeModule("iblock");
	$res = CIBlockElement::GetByID(33);
	if($ar_res = $res->GetNext())
  $TELEPHONE = $ar_res['NAME'];
