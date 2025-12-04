<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?define("TEMPLATE_PATH",'/local/templates/exam1_type2/');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=TEMPLATE_PATH?>assets/img/favicon.png" rel="icon">

  <!-- Vendor CSS Files -->
  <link href="<?=TEMPLATE_PATH?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=TEMPLATE_PATH?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=TEMPLATE_PATH?>assets/css/style.css" rel="stylesheet">

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

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="dashboard.html">
          <i class="bi bi-grid"></i>
          <span><?=$APPLICATION->ShowTitle(false)?></span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#main-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Основные</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="main-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Отчеты</span>
            </a>
          </li>
          <li>
            <a href="tables.html">
              <i class="bi bi-circle"></i><span>Данные</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#add-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-files"></i><span>Дополнительные</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="add-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Базы</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Информация</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#sample-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Пример раздела</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="sample-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Пример пункта</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Пример пункта</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Пример пункта</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Пример пункта</span>
            </a>
          </li>
        </ul>        
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="profile.html">
          <i class="bi bi-person"></i>
          <span>Профиль</span>
        </a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Пустая страница</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle mb-4">
      <h1>Дашборд</h1>
    </div><!-- End Page Title -->

    <section class="section <?=$APPLICATION->ShowProperty("page_css_class")?>">