<?php 
B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Application;
use Bitrix\Main\Localization\Loc;

require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/boot.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Компания - шаблон контентной страницы</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
    <?$APPLICATION->ShowHead();?>
	<!-- Favicons -->
	<link href="/local/templates/.default/assets/img/favicon.png" rel="icon">
	<link href="/local/templates/.default/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Vendor CSS Files -->
	<link href="/local/templates/.default/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/local/templates/.default/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="/local/templates/.default/assets/vendor/aos/aos.css" rel="stylesheet">

	<!-- Main CSS File -->
	<link href="/local/templates/.default/assets/css/main.css" rel="stylesheet">
</head>

<body class="scrolled">

    <div id="panel"><?$APPLICATION->ShowPanel();?></div>

	<header id="header" class="header d-flex align-items-center">
		<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

			<a href="#" class="logo d-flex align-items-center">
				<h1 class="sitename"><?=Loc::getMessage("TOP_NAME")?></h1>
			</a>

			<nav id="navmenu" class="navmenu">
				<ul>
					<li><a href="#">Главная</a></li>
					<li><a href="#">Пункт 1</a></li>
					<li><a href="#">Пункт 1</a></li>
					<li><a href="#">Пункт 3</a></li>
					<li><a href="#">Пункт 4</a></li>
					<li class="dropdown">
						<a href="#"><span>Пункт 5 с подменю</span>
							<i class="bi bi-chevron-down toggle-dropdown"></i>
						</a>
						<ul>
							<li><a href="#">Пункт 1</a></li>
							<li class="dropdown"><a href="#"><span>Пункт 2 с подменю</span> <i
										class="bi bi-chevron-down toggle-dropdown"></i></a>
								<ul>
									<li><a href="#">Пункт 1</a></li>
									<li><a href="#">Пункт 2</a></li>
									<li><a href="#">Пункт 3</a></li>
								</ul>
							</li>
							<li><a href="#">Пункт 2</a></li>
							<li><a href="#">Пункт 3</a></li>
							<li><a href="#">Пункт 4</a></li>
						</ul>
					</li>
					<li><a href="#">Пункт 6</a></li>
				</ul>
				<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
			</nav>

		</div>
	</header>



<main class="main">