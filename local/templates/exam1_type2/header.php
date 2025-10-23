<?php 
B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Application;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

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
      <a href="dashboard.html" class="logo d-flex align-items-center">
        <img src="<?=TEMPLATE_PATH?>/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Статистика</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Ivanov</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Ivanov</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile.html">
                <i class="bi bi-person"></i>
                <span>Мой профиль</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <div class="col-12 mb-3 mt-3 d-flex justify-content-center">
                <button 
                  class="btn btn-secondary btn-sm"
                  type="submit"
                  name="logout_butt"
                  value="Выйти"   
                >
                  Выйти
                </button>
              </div>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile -->

      </ul>
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