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
$APPLICATION->SetTitle("Данные - ". $arResult["NAME"]);
?>
<style>
        .table-detail .label {
          font-weight: 600;
          color: rgba(1, 41, 112, 0.6);
        }
        .table-detail .row {
          margin-bottom: 20px;
        }
        .table-detail .backurl {
          margin-top: 40px;
          margin-bottom: 20px;
        }
      </style>
      
      <div class="row">
        <div class="col-lg-12">

            <div class="card table-detail">
              <div class="card-body">
                <h5 class="card-title"><?=GetMessage("ID_TITLE")?><?=$arResult["ID"]?></h5>
                <div class="row">
                  <div class="col-2 label"><?=GetMessage("PRODUCT_TITLE")?></div>
                  <div class="col-4 "><?=$arResult["PROPERTIES"]["PRODUCT"]["VALUE"]?></div>
                </div>
                <div class="row">
                  <div class="col-2 label"><?=GetMessage("CATEGORY_TITLE")?></div>
                  <div class="col-4 "><?=$arResult["PROPERTIES"]["PRODUCT_CATEGORY"]["VALUE"]?></div>
                </div>
                <div class="row">
                  <div class="col-2 label"><?=GetMessage("CITY_TITLE")?></div>
                  <div class="col-4 "><?=$arResult["PROPERTIES"]["CITY"]["VALUE"]?></div>
                </div>
                <div class="row">
                  <div class="col-2 label"><?=GetMessage("QUANTITY_TITLE")?></div>
                  <div class="col-4 "><?=$arResult["PROPERTIES"]["QUANTITY"]["VALUE"]?></div>
                </div>
                <div class="backurl">
				<a href="/statistic_na/main/table/"><?=GetMessage("BACK_BUTTON")?></a>
                </div>
              </div>
            </div>
        </div>
      </div>


