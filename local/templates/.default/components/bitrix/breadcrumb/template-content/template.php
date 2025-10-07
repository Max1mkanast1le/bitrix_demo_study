<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn .= '<ol>';

if (count($arResult) > 0) {
    array_pop($arResult);
}

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li><a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item"><span itemprop="name">'.$title.'</span>
				</a><meta itemprop="position" content="'.($index + 1).'" />
			</li>';
	}
	else
	{
		$strReturn .= '
			<li><a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item">
				<span itemprop="name">'.$title.'</span></a>
			</li>';
	}
}

$strReturn .= '<div style="clear:both"></div></ol>';

return $strReturn;
