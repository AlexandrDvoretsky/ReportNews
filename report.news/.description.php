<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentDescription = array(
	"NAME"=>GetMessage("COMPONENT_TITLE"),
	"DESCRIPTION"=>GetMessage("COMPONENT_DESC"),
	"ICON" => "/images/icon.gif",
	"SORT" => 10,
	"PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "news_ext",
			"NAME" => GetMessage("COMPONENT_TITLE"),
			"SORT" => 10
		)
	)
);
?>
