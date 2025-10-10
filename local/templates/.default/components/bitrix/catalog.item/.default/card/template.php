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
?>


					<div class="col-lg-4">
						<article>
							<div class="post-img">
								<img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="" class="img-fluid">
							</div>
							<div class="card-body">
								<h5 class="title"><a href="<?=$item['DETAIL_PAGE_URL']?>"><?=$productTitle?></a></h5>
								<p class="card-text"><?=$item['PREVIEW_TEXT']?></p>
							</div>
						</article>
					</div>


