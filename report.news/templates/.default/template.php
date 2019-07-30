<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<form
	<?if($arParams['AJAX_MODE']=="Y"){?>
		id='ajax_mode' name="form_ajax_mode"
	<?}else{?>
		id='ajax_off' method="GET" name='form_ajax_off' action="<?=POST_FORM_ACTION_URI?>"
	<?}?>
	>
	<?= bitrix_sessid_post() ?>
	<input type="hidden" name="USER_DATA" value="<?=$arResult['USER_DATA']?>">
	<input type="hidden" name="NEWS_ID" value="<?=$arResult['NEWS_ID']?>">
	<input type="hidden" name="IBLOCK_ID" value="<?=$arParams['IBLOCK_ID']?>">
	<a href="javascript:void(0)"
	
	<?if($arParams['AJAX_MODE']=="Y"){?>
		id="ajax"
	<?}else{?>	
		id="get"
	<?}?>

	name="submit"><?=GetMessage('REPORT')?></a>
	<p></p>
</form>










