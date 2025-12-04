<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<ul class="sidebar-nav" id="sidebar-nav">
<?
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>
		<?if ($arItem["SELECTED"] == 1):?>
			<li class="nav-item">
				<a class="nav-link" data-bs-target="#<?=$arItem["PARAMS"]["nav_id"]?>" data-bs-toggle="collapse" href="<?=$arItem["LINK"]?>">
					<i class="<?=htmlspecialcharsbx($arItem["PARAMS"]["menu_ico"] ?? "bi bi-layout-text-window-reverse")?>"></i>
					<span>
						<?=$arItem["TEXT"]?>
					</span>
					<i class="bi bi-chevron-down ms-auto"></i>
				</a>
				<ul id="<?=$arItem["PARAMS"]["nav_id"]?>" class="nav-content" data-bs-parent="#sidebar-nav">
		<?else:?>
			<li class="nav-item">
				<a class="nav-link collapsed" data-bs-target="#<?=$arItem["PARAMS"]["nav_id"]?>" data-bs-toggle="collapse" href="<?=$arItem["LINK"]?>">
					<i class="<?=htmlspecialcharsbx($arItem["PARAMS"]["menu_ico"] ?? "bi bi-layout-text-window-reverse")?>"></i>
					<span>
						<?=$arItem["TEXT"]?>
					</span>
					<i class="bi bi-chevron-down ms-auto"></i>
				</a>
				<ul id="<?=$arItem["PARAMS"]["nav_id"]?>" class="nav-content collapse " data-bs-parent="#sidebar-nav">
		<?endif?>

	<?else:?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<?if ($arItem["SELECTED"] == 1):?>
				<li>
					<a class="nav-link" href="<?=$arItem["LINK"]?>">
					<i class="<?=htmlspecialcharsbx($arItem["PARAMS"]["menu_ico"] ?? "bi bi-layout-text-window-reverse")?>"></i>
					<span>
						<?=$arItem["TEXT"]?>
					</span>
					</a>
				</li>
			<?else:?>
				<li>
					<a class="nav-link collapsed" href="<?=$arItem["LINK"]?>">
					<i class="<?=htmlspecialcharsbx($arItem["PARAMS"]["menu_ico"] ?? "bi bi-layout-text-window-reverse")?>"></i>
					<span>
						<?=$arItem["TEXT"]?>
					</span>
					</a>
				</li>
			<?endif?>
		<?else:?>
			<?if ($arItem["SELECTED"] == 1):?>
				<li>
					<a class="active" href="<?=$arItem["LINK"]?>">
					<i class="bi bi-circle"></i>
					<span>
						<?=$arItem["TEXT"]?>
					</span>
					</a>
				</li>
			<?else:?>
				<li>
					<a href="<?=$arItem["LINK"]?>">
					<i class="bi bi-circle"></i>
					<span>
						<?=$arItem["TEXT"]?>
					</span>
					</a>
				</li>
			<?endif?>
		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<?endif?>