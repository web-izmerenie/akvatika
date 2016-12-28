<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(!empty($arResult)){?>
	<nav id="menu">
		<ul>
			<?foreach($arResult as $arItem){?>
				<li>
					<a href="<?=$arItem['LINK'];?>"
					<?if(!empty($arItem['PARAMS'])){
						foreach($arItem['PARAMS'] as $k => $arParam){
							print $k.'='.$arParam;
						}
					}?>>
						<?=$arItem['TEXT'];?>
					</a>
				</li>
			<?}?>
		</ul>
	</nav>
<?}?>
