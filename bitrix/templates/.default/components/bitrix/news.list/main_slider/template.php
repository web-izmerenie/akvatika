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
	<section class="catalog-slide">
		<p><?=$arResult['ITEMS'][1]['PREVIEW_TEXT'];?></p>
		<h1><?=$arResult['ITEMS'][1]['NAME'];?></h1>
		<ul>
			<?foreach($arResult['ITEMS'] as $arItem){
				$photo = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'],
				array('width'=>266, 'height'=>524), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
				<li>
					<div class="row">
						<div class="column">
							<ul class="blocks">
								<li><span>Доставка напрямую от производителя</span></li>
								<li><span>Доставка по графику</span></li>
							</ul>
							<ul class="advent-list">
								<?foreach ($arItem['PROPERTIES']['ATT_ADVENTS']['~VALUE'] as $arAdvent) {?>
									<li><?=$arAdvent['TEXT'];?></li>
								<?}?>
							</ul>
						</div>
						<div class="column">
							<img src="<?=$photo['src'];?>" onclick="yaCounter32297939.reachGoal('IMG_<?=$arItem['ID'];?>'); return true;">
							<span class="price"><span><?=$arItem['PROPERTIES']['ATT_PRICE']['VALUE'];?></span></span>
							<div class="birk" onclick="yaCounter32297939.reachGoal('BIRK_<?=$arItem['ID'];?>'); return true;">
								<span><?=$arItem['PREVIEW_TEXT'];?></span>
								<p><?=$arItem['NAME'];?></p>
							</div>
						</div>
					</div>
				</li>
			<?}?>
		</ul>
	</section>
<?}?>
