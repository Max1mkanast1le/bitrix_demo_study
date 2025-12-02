<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

require_once $_SERVER["DOCUMENT_ROOT"]."/local/templates/.default/include/boot.php"

?>

<!DOCTYPE html>
<html lang="en">
    

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Компания - шаблон сервисной страницы</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- Favicons -->
	<link href="<?=DEFAULT_TEMPLATE_PATH?>assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Vendor CSS Files -->
	<link href="<?=DEFAULT_TEMPLATE_PATH?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=DEFAULT_TEMPLATE_PATH?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?=DEFAULT_TEMPLATE_PATH?>assets/vendor/aos/aos.css" rel="stylesheet">

	<!-- Main CSS File -->
	<link href="<?=DEFAULT_TEMPLATE_PATH?>assets/css/main.css" rel="stylesheet">
    
    <?$APPLICATION->ShowHead();?>
</head>

<body class="scrolled">
    <div id='panel'><?$APPLICATION->ShowPAnel();?></div>

	<header id="header" class="header d-flex align-items-center">
		<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

			<a href="/" class="logo d-flex align-items-center">
				<h1 class="sitename"><?=GetMessage('HEADER_TITLE');?></h1>
			</a>


            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "top_menu"
	),
	false
);?>

			

		</div>
	</header>