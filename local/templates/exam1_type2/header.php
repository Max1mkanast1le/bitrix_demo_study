<?php 
B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Application;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
global $USER;


define("TEMPLATE_PATH",'/local/templates/exam1_type2');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$APPLICATION->ShowTitle()?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=TEMPLATE_PATH?>/assets/img/favicon.png" rel="icon">

  <!-- Vendor CSS Files -->
  <link href="<?=TEMPLATE_PATH?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=TEMPLATE_PATH?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=TEMPLATE_PATH?>/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/statistic_na/" class="logo d-flex align-items-center">
        <img src="<?=TEMPLATE_PATH?>/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block"><?=getMessage('STATISTIC_TITLE')?></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <?$APPLICATION->IncludeComponent(
          "bitrix:main.auth.form",
          "table",
          Array(
            "AUTH_FORGOT_PASSWORD_URL" => "",
            "AUTH_REGISTER_URL" => "",
            "AUTH_SUCCESS_URL" => "",
            "PROFILE_URL" => "/statistic_na/profile/"
          )
        );?>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "statistic_menu",
        Array(
          "ALLOW_MULTI_SELECT" => "Y",
          "CHILD_MENU_TYPE" => "st_second",
          "DELAY" => "N",
          "MAX_LEVEL" => "2",
          "MENU_CACHE_GET_VARS" => array(""),
          "MENU_CACHE_TIME" => "3600",
          "MENU_CACHE_TYPE" => "A",
          "MENU_CACHE_USE_GROUPS" => "Y",
          "ROOT_MENU_TYPE" => "st_first",
          "USE_EXT" => "N"
        )
      );?>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle mb-4">
      <h1><?=$APPLICATION->ShowTitle()?></h1>
    </div><!-- End Page Title -->

    <section class="section <?=$APPLICATION->ShowProperty("page_css_class")?>">