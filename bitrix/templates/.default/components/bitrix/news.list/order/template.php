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
	<div id="calc" class="column">
		<ul>
			<?foreach($arResult['ITEMS'] as $k => $arItem){
				$photo = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>39, 'height'=>77), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
				<li>
					<img src="<?=$photo['src'];?>">
					<div class="text">
						<?if($k === 2){?>
							<p><?=$arItem['NAME'];?></p>
							<span><?=$arItem['~PREVIEW_TEXT'];?></span>
						<?}else{?>
							<span><?=$arItem['~PREVIEW_TEXT'];?></span>
							<p><?=$arItem['NAME'];?></p>
						<?}?>
					</div>
					<div class="count">
						<div class="manag"><span class="plus">+</span><span class="minus">-</span></div>
						<input type="text" name="count<?=$k;?>" placeholder="0" value="0"
						maxlength="2" data-price="<?=$arItem['PROPERTIES']['ATT_PRICE']['VALUE'];?>">
						<label>шт.</label>
					</div>
				</li>
			<?}?>
		</ul>
	</div>
	<div id="price" class="column">
		<p>Сумма Заказа</p><span>0</span>
		<input type="hidden" name="price" value="0">
	</div>
<?}?>
