<?php
B_PROLOG_INCLUDED === true || die();

require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/header.php";

?>
		<!-- Page Title -->
        <?php
        if ($APPLICATION->GetCurPage(false) !== '/') {
        ?>
		<div class="page-title dark-background">
			<div class="container position-relative">
				<h1>Заголовок страницы</h1>
				<p><?=$APPLICATION->ShowProperty("page_text_under_title")?></p>
				<nav class="breadcrumbs">
					<ol>
						<li><a href="#">Главная</a></li>
						<li><a href="#">Раздел 1</a></li>
						<li><a href="#">Раздел 1.1</a></li>
						<li class="current">Заголовок страницы</li>
					</ol>
				</nav>
			</div>
		</div>
        <?php }?> 
        <!-- End Page Title -->


		