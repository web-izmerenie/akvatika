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
	<section class="cert">
		<ul>
			<?foreach($arResult['ITEMS'] as $arItem){
				$preview = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'],
					array('width'=>304, 'height'=>228), BX_RESIZE_IMAGE_PROPORTIONAL, true);
				$detail = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'],
					array('width'=>1280, 'height'=>1024), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
				<li>
					<a href="<?=$detail['src'];?>" rel="galery">
						<img src="<?=$preview['src'];?>">
					</a>
				</li>
			<?}?>
		</ul>
	</section>
<?}?>
