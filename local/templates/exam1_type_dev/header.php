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
				<h1><?$APPLICATION->ShowTitle(false); ?></h1>
				<p><?=$APPLICATION->ShowProperty("page_text_under_title")?></p>
				<nav class="breadcrumbs">
					<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "template-dev", Array(
							"PATH" => "",
                            "SITE_ID" => "s1",
                            "START_FROM" => "0",
                        ),
                        false
                    );?>
				</nav>
			</div>
		</div>
        <?php }?> 
        <!-- End Page Title -->


		