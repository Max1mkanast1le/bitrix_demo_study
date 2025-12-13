<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?define("TEMPLATE_PATH",'/local/templates/exam1_type2/');
use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon.png" rel="icon">

  <!-- Vendor CSS Files -->
  <?
  Asset::GetInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/vendor/bootstrap/css/bootstrap.min.css");
  Asset::GetInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/vendor/bootstrap-icons/bootstrap-icons.css");
  ?>

  <!-- Template Main CSS File -->
  <?Asset::GetInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/style.css");?>

    <!-- Vendor JS Files -->
    <?Asset::GetInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js");?>

  <!-- Template Main JS File -->
  <?Asset::GetInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/main.js");?>

  <?$APPLICATION->ShowHead();?>
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/statistic_na/" class="logo d-flex align-items-center">
        <img src="<?=TEMPLATE_PATH?>assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Статистика</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
    <?$APPLICATION->IncludeComponent(
      "bitrix:system.auth.form",
      "statistic",
      Array(
        "FORGOT_PASSWORD_URL" => "",
        "PROFILE_URL" => "/statistic_na/profile/",
        "REGISTER_URL" => "",
        "SHOW_ERRORS" => "N"
      )
    );?>
      
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->


  <!-- ======= Sidebar ======= -->

  <aside id="sidebar" class="sidebar">
  <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"statistic", 
	array(
		"ALLOW_MULTI_SELECT" => "Y",
		"CHILD_MENU_TYPE" => "st_second",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "st_first",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "statistic"
	),
	false
);?>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle mb-4">
      <h1><?=$APPLICATION->ShowTitle(false)?></h1>
    </div><!-- End Page Title -->

    <section class="section <?=$APPLICATION->ShowProperty("page_css_class")?>">