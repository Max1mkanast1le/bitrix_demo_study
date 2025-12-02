<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
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

 $photo = CFile::ResizeImageGet(
	$item['PREVIEW_PICTURE']['ID'],
	array("width" => 416, "height" => 416),
	BX_RESIZE_IMAGE_EXACT,
	true,
);
?>

<div class="col-lg-4">
						<article>
							<div class="post-img">
								<img src="<?=$photo["src"]?>" alt="<?=$item['PREVIEW_PICTURE']['ALT']?>" class="img-fluid">
							</div>
							<div class="card-body">
								<h5 class="title"><a href="<?=$item['DETAIL_PAGE_URL']?>"><?=$item["NAME"]?></a></h5>
								<p class="card-text"><?=$item["PREVIEW_TEXT"]?></p>
							</div>
						</article>
					</div><!-- End list item -->

