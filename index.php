<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Агрегаты\"");
?><?if (IsModuleInstalled("advertising")):?> <?$APPLICATION->IncludeComponent(
	"bitrix:advertising.banner",
	"bootstrap",
	Array(
		"BS_ARROW_NAV" => "Y",
		"BS_BULLET_NAV" => "Y",
		"BS_CYCLING" => "N",
		"BS_EFFECT" => "fade",
		"BS_HIDE_FOR_PHONES" => "Y",
		"BS_HIDE_FOR_TABLETS" => "N",
		"BS_KEYBOARD" => "Y",
		"BS_PAUSE" => "Y",
		"BS_WRAP" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DEFAULT_TEMPLATE" => "-",
		"NOINDEX" => "Y",
		"QUANTITY" => "3",
		"TYPE" => "MAIN"
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'Y'
)
);?> <?endif?> <?
global $trendFilter;
$trendFilter = array('PROPERTY_TREND' => '4');
?>
<h2></h2><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>