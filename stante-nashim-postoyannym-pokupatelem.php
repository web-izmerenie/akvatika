<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("");
CModule::IncludeModule("iblock");
$tplPath = $APPLICATION->GetTemplatePath();
require($_SERVER['DOCUMENT_ROOT'].$tplPath.'/inc/get_constant.php');
?><script type="text/javascript" src="<?=$tplPath;?>bower_components/jquery/dist/jquery.min.js"></script> <script type="text/javascript" src="<?=$tplPath;?>scripts/ajaxPage.js"></script> <?$APPLICATION->ShowPanel();?> <section class="wrap"><a href="#close" class="close"></a>
<h1>Станьте нашим постоянным покупателем</h1>
<ul>
	<li><img src="<?=$tplPath;?>img/precent.png">
	<div class="text">
		Постоянным покупателям компания <br>
		 предлагает гибкую систему скидок.
	</div>
 </li>
	<li><img src="<?=$tplPath;?>img/trail.png">
	<div class="text">
		<h2>
		Также компания «Акватика» предлагает всем нашим клиентам услугу «Доставка по графику». </h2>
	</div>
	<div class="more-text">
		 При заключении договора на поставку воды, вы указываете конкретные дни недели или месяца, в которые вам будет осуществляться доставка. В течении действия договора мы поставляем вам воду в указанные дни без дополнительных звонков и напоминаний с вашей стороны.
	</div>
 </li>
	<li><img src="<?=$tplPath;?>img/call.png">
	<div class="text">
		<?=$INFO_ADVENT;?>
	</div>
 </li>
</ul>
 </section> <br>