<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?if(!empty($arResult['ITEMS'])){?>
	<?foreach($arResult['ITEMS'] as $arItem){
		$arPos = explode(",", $arItem['PROPERTIES']['ATT_MAP']['VALUE']);?>
		<div class="ajaxContent">
			<div class="map">
				<?$APPLICATION->IncludeComponent(
					"bitrix:map.yandex.view",
					"",
					Array(
					"INIT_MAP_TYPE" => "MAP",
					"MAP_DATA" => serialize(array(
					'yandex_lat' => $arPos[0],
					'yandex_lon' => $arPos[1],
					'yandex_scale' => 17,
					'PLACEMARKS' => array (
					array(
					'LON' => $arPos[1],
					'LAT' => $arPos[0],
					),
					),
					)),
					"MAP_WIDTH" => "100%",
					"MAP_HEIGHT" => "300",
					"CONTROLS" => array("ZOOM", "TYPECONTROL", "SCALELINE"),
					"OPTIONS" => array("DESABLE_SCROLL_ZOOM", "ENABLE_DBLCLICK_ZOOM", "ENABLE_DRAGGING"),
					"MAP_ID" => ""
					),
					false
					);?>
			</div>
			<div class="text">
				<p><?=$arItem['~PREVIEW_TEXT'];?></p>
				<p>Тел.: <?=$arItem['PROPERTIES']['ATT_TEL']['VALUE'];?></p>
				<p>Факс: <?=$arItem['PROPERTIES']['ATT_FAKS']['VALUE'];?></p>
				<a href="mailto:<?=$arItem['PROPERTIES']['ATT_MAIL']['VALUE'];?>">
					<?=$arItem['PROPERTIES']['ATT_MAIL']['VALUE'];?>
				</a>
				<h2>Режим работы</h2><?=$arItem['~DETAIL_TEXT'];?></div>
		</div>
	<?}?>
<?}?>
