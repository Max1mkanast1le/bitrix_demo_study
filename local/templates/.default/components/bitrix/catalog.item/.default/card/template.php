<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array|null $price
 * @var float|int|null $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var string $discountPositionClass
 * @var string $labelPositionClass
 * @var CatalogSectionComponent $component
 */

$item = $arResult['ITEM'];
$areaId = $arResult['AREA_ID']; 

$resizedPicture = false;
$pictureId = $item['PREVIEW_PICTURE']['ID'] ?? $item['DETAIL_PICTURE']['ID'];

if ($pictureId)
{
    $resizedPicture = CFile::ResizeImageGet(
        $pictureId,
        array('width' => 416, 'height' => 416),
        BX_RESIZE_IMAGE_EXACT, 
        true
    );
}

$pictureSrc = $resizedPicture ? $resizedPicture['src'] : $this->GetFolder().'/images/no_photo.png';
$pictureAlt = $item['PREVIEW_PICTURE']['ALT'] ?? $item['NAME'];
$pictureTitle = $item['PREVIEW_PICTURE']['TITLE'] ?? $item['NAME'];

?>


					<div class="col-lg-4" id="<?=$areaId?>">
						<article>
							<div class="post-img">
								<a href="<?=$item['DETAIL_PAGE_URL']?>">
									<img src="<?=$pictureSrc?>" alt="<?=$pictureAlt?>" title="<?=$pictureTitle?>" class="img-fluid">
								</a>
							</div>
							<div class="card-body">
								<h5 class="title">
									<a href="<?=$item['DETAIL_PAGE_URL']?>"><?=$item['NAME']?></a>
								</h5>
								<?if (!empty($item['PREVIEW_TEXT'])): ?>
									<p class="card-text"><?=$item['PREVIEW_TEXT']?></p>
								<?endif;?>
							</div>
						</article>
					</div>


