<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="services-list">
	<?
	foreach($arResult as $arItem):
		if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
			continue;
	?>
		<?if($arItem["SELECTED"]):?>
			<a href="<?=$arItem["LINK"]?>" class="active">
				<i class="<?=(array_key_exists("menu_ico", $arItem["PARAMS"])  ? 
					$arItem["PARAMS"]["menu_ico"] : "bi-arrow-right-circle")?>">
				</i>
				<?=$arItem["TEXT"]?>
			</a>
		<?else:?>
			<a href="<?=$arItem["LINK"]?>">
				<i class="<?=(array_key_exists("menu_ico", $arItem["PARAMS"])  ? 
					$arItem["PARAMS"]["menu_ico"] : "bi-arrow-right-circle")?>">
				</i>
				<?=$arItem["TEXT"]?>
		</a>
		<?endif?>
		
	<?endforeach?>
</div>

<?endif?>