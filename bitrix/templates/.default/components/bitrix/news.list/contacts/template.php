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
	<?foreach($arResult['ITEMS'] as $arItem){?>
		<div class="ajaxContent">
			<div id="map" class="map" data-coordinat="<?=$arItem['PROPERTIES']['ATT_MAP']['VALUE']?>">
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
