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
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <div class="d-flex py-4 px-4">
                <table class="table table-striped">
					<thead>
						<tr>
						<th><?=getMessage("NAME_TITLE")?></th>
						<th><?=getMessage("PRODUCT_TITLE")?></th>
						<th><?=getMessage("CATEGORY_TITLE")?></th>
						<th><?=getMessage("CITY_TITLE")?></th>
						<th><?=getMessage("QUANTITY_TITLE")?></th>
						</tr>
					</thead>
					<tbody>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<tr>
                      <td><?=$arItem["NAME"]?></td>
                      <td><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["PROPERTIES"]["PRODUCT"]["VALUE"]?></a></td>
                      <td><?=$arItem["PROPERTIES"]["PRODUCT_CATEGORY"]["VALUE"]?></td>
                      <td><?=$arItem["PROPERTIES"]["CITY"]["VALUE"]?></td>
                      <td><?=$arItem["PROPERTIES"]["QUANTITY"]["VALUE"]?></td>
                  </tr>
<?endforeach;?>
					</tbody>
				</table>
              </div>
         
              <div class="d-flex py-2 px-4 flex-column">
                  <!--Pagination here-->
              </div>

            </div>
          </div>

        </div>
      </div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

