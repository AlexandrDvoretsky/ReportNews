<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$error='<ajax_result>Error!</ajax_result>';

if(!empty($_REQUEST['USER_DATA']) && !empty($_REQUEST['NEWS_ID']) && !empty($_REQUEST['IBLOCK_ID'])){

	if(check_bitrix_sessid()){

		if (CModule::IncludeModule("iblock")) {
		    $el = new CIBlockElement;

		    $PROP = array();
		    $PROP['USER'] = $_REQUEST["USER_DATA"];
		    $PROP['NEWS'] = $_REQUEST["NEWS_ID"];

		    $arLoadProductArray = Array(
		        "IBLOCK_ID" => $_REQUEST['IBLOCK_ID'],
		        "PROPERTY_VALUES" => $PROP,
		        "NAME" => 'Жалоба на новость',
    			"DATE_ACTIVE_FROM" => date("j.n.Y H:i:s"),	
		        "ACTIVE"=>'Y',
		        "CODE" => time(),
		    );

		    if($PRODUCT_ID = $el->Add($arLoadProductArray)) {
				$result = '<ajax_result>Ваше мнение учтено, №'.$PRODUCT_ID.'</ajax_result>';
			} else {
			   	$result = '<ajax_result>Ошибка! '.$el->LAST_ERROR.'</ajax_result>';
			}

			unset($_GET);
		}	
		echo $result;

	}else{
		echo $error;
	}

}else{

	if(CModule::IncludeModule("iblock"))
	{
		if($USER->isAuthorized()){
			$arUser = "[".$USER->GetID()."] (".$USER->GetLogin().") ".$USER->GetFullName();
		}else{
			$arUser = GetMessage('GUEST');
		}
		$arResult['USER_DATA'] = $arUser;
		$arResult['NEWS_ID'] = $arParams['NEWS_ID'];
	}	
}
$this->IncludeComponentTemplate();
?>
