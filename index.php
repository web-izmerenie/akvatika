<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
require($_SERVER['DOCUMENT_ROOT'].$tplPath.'/inc/get_constant_tel.php');
?>
<section class="catalog-slide">
	<p>Негазированная минеральная природная столовая вода</p>
	<h1>«Серебряная «Усть-Быстра»</h1>
	<ul>
		<li class="active">
			<div class="row">
				<div class="column">
					<ul class="blocks">
						<li><span>Доставка напрямую от производителя</span></li>
						<li><span>Доставка по графику</span></li>
					</ul>
					<ul class="advent-list">
						<li>Содержит природные ионы йода и серебра.</li>
						<li>
							Очищаем воду без обратного осмоса,
							сохраняя все природные элементы, полезные для человека.
						</li>
						<li>
							Скважина расположена
							в заповедной зоне Ростовской области.
						</li>
					</ul>
				</div>
				<div class="column"><img src="<?=$tplPath?>/img/boutle1.png"><span class="price"><span>120</span></span>
					<div class="birk"><span>
							Негазированная минеральная
							природная столовая вода</span>
						<p>«Серебряная «Усть-Быстра»</p>
					</div>
				</div>
			</div>
		</li>
		<li>
			<div class="row">
				<div class="column"><img src="<?=$tplPath?>/img/boutle2.png"><span class="price">160</span>
					<div class="birk"><span>Негазированная минеральная природная столовая вода</span>
						<p>«Горная Серебряная»</p>
					</div>
				</div>
				<div class="column">
					<ul class="blocks">
						<li><span>Доставка напрямую от производителя</span></li>
						<li><span>Доставка по графику</span></li>
					</ul>
					<ul class="advent-list">
						<li>
							Относится к водам гидрокарбонатного натриево-кальциевого состава
							и полезна для взрослы и детей.
						</li>
						<li>
							Очищаем воду без обратного осмоса,
							сохраняя все природные элементы, полезные для человека.
						</li>
						<li>
							Скважина расположена с биосферным заповедником
							в Карачаево-Черкесской Республике.
						</li>
					</ul>
				</div>
			</div>
		</li>
	</ul>
</section>
<section id="order" class="order">
	<h1>Заказать</h1>
	<p>Наш менеджер свяжется с вами в течение 30 минут</p>
	<form method="POST">
		<div class="row">
			<div id="form-order" class="column">
				<h1>Доставка</h1>
				<div id="checkbox">
					<input type="radio" name="city" id="rostov" value="Ростов-на-Дону" checked="checked">
					<label for="rostov">Ростов-на-Дону</label>
					<input type="radio" name="city" id="aksai" value="Аксай">
					<label for="aksai">Аксай</label>
					<input type="radio" name="city" id="area" value="Область">
					<label for="area">Область</label>
					<input type="radio" name="city" id="pickup" value="Самовывоз">
					<label for="pickup">Самовывоз</label>
				</div>
				<div id="adress-form" class="blocks">
					<div class="inline">
						<input type="text" name="street" placeholder="Улица" class="require">
						<input type="text" name="number" placeholder="Дом" maxlength="4" class="require">
						<input type="text" name="flat" placeholder="Кв." maxlength="4" class="require">
					</div>
					<div class="flex">
						<input type="text" name="phone" placeholder="Телефон" maxlength="15" class="require"><a href="#date" class="date">Укажите дату доставки</a>
						<input type="text" name="date" value="" placeholder="дата">
					</div>
					<textarea name="msg" placeholder="Дополнительная информация" maxlength="300"></textarea>
				</div>
				<div id="area-text" class="blocks">
					<p>Позвоните пожалуйста по телефону 8 (863) 266-10-04, <br>
						чтобы уточнить условия доставки
					</p>
				</div>
				<div id="pickup-text" class="blocks">
					<p>Вы можете самостоятельно забрать воду по адресу: <br>
						г. Ростов-на-Дону, ул. Павленко, 15 лит.  А <br>
						(въезд с улицы Мечникова, 35)
					</p>
				</div>
			</div>
			<div id="info" class="column">
				<p>Не забудьте спросить у нашего менеджера:</p>
				<div class="flex">
					<ul>
						<li>Кулер</li>
						<li>Помпу</li>
						<li>Стаканодержатели</li>
					</ul>
					<ul>
						<li>Стаканчики</li>
						<li>Чехол на бутыль</li>
					</ul>
				</div><img src="<?=$tplPath?>/img/avto.png">
			</div>
		</div>
		<div class="row">
			<div id="calc" class="column">
				<ul>
					<li><img src="<?=$tplPath?>/img/min_boutle1.png">
						<div class="text"><span>
								Негазированная минеральная
								природная столовая вода</span>
							<p>«Серебряная «Усть-Быстра»</p>
						</div>
						<div class="count">
							<div class="manag"><span class="plus">+</span><span class="minus">-</span></div>
							<input type="text" name="count1" placeholder="0" value="0" maxlength="2" data-price="120">
							<label>шт.</label>
						</div>
					</li>
					<li><img src="<?=$tplPath?>/img/min_boutle2.png">
						<div class="text"><span>
								Негазированная минеральная
								природная столовая вода</span>
							<p>«Горная Серебряная»</p>
						</div>
						<div class="count">
							<div class="manag"><span class="plus">+</span><span class="minus">-</span></div>
							<input type="text" name="count2" placeholder="0" value="0" maxlength="2" data-price="160">
							<label>шт.</label>
						</div>
					</li>
					<li><img src="<?=$tplPath?>/img/min_boutle3.png">
						<div class="text">
							<p>Ваша тара на обмен</p><span>Поликарбонатная, чистая,<br>
								без брака</span>
						</div>
						<div class="count">
							<div class="manag"><span class="plus">+</span><span class="minus">-</span></div>
							<input type="text" name="count3" placeholder="0" value="0" maxlength="2" data-price="-50">
							<label>шт.</label>
						</div>
					</li>
				</ul>
			</div>
			<div id="price" class="column">
				<p>Сумма Заказа</p><span>0</span>
			</div>
			<input type="submit" value="Заказать">
		</div>
	</form>
</section>
<section class="cert">
	<ul>
		<li> <a href="../img/cert1.jpg" rel="galery"><img src="<?=$tplPath?>/img/cert1.jpg"></a></li>
		<li> <a href="../img/cert2.jpg" rel="galery"><img src="<?=$tplPath?>/img/cert2.jpg"></a></li>
		<li> <a href="../img/cert3.jpg" rel="galery"><img src="<?=$tplPath?>/img/cert3.jpg"></a></li>
		<li> <a href="../img/cert4.jpg" rel="galery"><img src="<?=$tplPath?>/img/cert4.jpg"></a></li>
		<li> <a href="../img/cert1.jpg" rel="galery"><img src="<?=$tplPath?>/img/cert1.jpg"></a></li>
		<li> <a href="../img/cert2.jpg" rel="galery"><img src="<?=$tplPath?>/img/cert2.jpg"></a></li>
		<li> <a href="../img/cert3.jpg" rel="galery"><img src="<?=$tplPath?>/img/cert3.jpg"></a></li>
		<li> <a href="../img/cert4.jpg" rel="galery"><img src="<?=$tplPath?>/img/cert4.jpg"></a></li>
	</ul>
</section>
<section class="advents">
	<h1>Хотите покупать воду дешевле?</h1>
	<ul>
		<li><a href="../html/advents1.html"><img src="<?=$tplPath?>/img/hand.png">
				<p>Станьте нашим постоянным покупателем</p></a></li>
		<li><a href="../html/advents2.html"><img src="<?=$tplPath?>/img/bottles.png">
				<p>Покупайте воду оптом <br> от … бутылей</p></a></li>
		<li><a href="../html/advents3.html"><img src="<?=$tplPath?>/img/car.png">
				<p>Заберите воду самостоятельно</p></a></li>
	</ul>
	<h2>Узнайте подробности по телефону: <?=$TELEPHONE;?></h2>
</section>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
