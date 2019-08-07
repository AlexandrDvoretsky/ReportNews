<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

   
<?$APPLICATION->IncludeComponent(
	"custom:report.news",
	"",
	Array(
		"AJAX_MODE" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "news",
		"NEWS_ID" => $arResult["ID"]
	)
);?>

