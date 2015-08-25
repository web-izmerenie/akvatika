<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
$tplPath = $APPLICATION->GetTemplatePath();
require($_SERVER['DOCUMENT_ROOT'].$tplPath.'/inc/get_constant.php');
?>
<head>
  <script type="text/javascript" src="<?=$tplPath;?>bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="<?=$tplPath;?>scripts/ajaxPage.js"></script>
</head>
<body>
	<?$APPLICATION->ShowPanel();?>
	<section class="wrap"><a href="#close" class="close"></a>
    <h1>Покупайте воду оптом</h1>
    <ul>
      <li><img src="<?=$tplPath;?>img/precent.png"/>
        <div class="text">Постоянным покупателям компания <br/>
          предлагает гибкую систему скидок.
        </div>
      </li>
			<li><img src="<?=$tplPath;?>img/call.png"/>
				<div class="text"><?=$INFO_ADVENT;?></div>
			</li>
    </ul>
  </section>
</body>
