$(function(){

	//init plugins
	$('.cert ul').slick({
		variableWidth: true,
		dots: false,
		slidesToShow: 4,
  	slidesToScroll: 4,
	});
	$('.cert .slick-slide a').fancybox({
		centerOnScroll: true,
		padding: 0,
		titleShow: false,
		helpers: {
			overlay: {
				locked: false
			}
		}
	});
	$('input[type="radio"]').styler();

	function ankorAnimate(target){
		$(target).click(function(event) {
			event.preventDefault();
			var href=$(this).attr('href');
			var target=$(href);
			var top=target.offset().top;
			$('html,body').animate({
			scrollTop: top
			}, 1000);
		});
	}

	function closeWindow(link, target){
		$(link).click(function (e) {
			e.preventDefault();
			$('.overlay').hide();
			$(target).fadeOut();
		})
	}

function loadContent(clickLoad, container) {
	$(clickLoad).click(function(e){
		e.preventDefault();
		var loadContent = $(this).attr('href');
		var overlay = $('.overlay');
		var windowHeight = $(window).height();
		var pos = $(this).offset().top - windowHeight;

		if(!$(this).hasClass('ankor')){
			$.ajax({
				url: loadContent,
				cache: false,
				beforeSend: function() { $(container).html('Loading content, please wait...'); },
				success: function(html) {
					$(container).hide();
					$(container).html(html);
					$(overlay).show();
					$(container).fadeIn();
					var wrapHeaight = $(container).find('.wrap').height();
					if(wrapHeaight > windowHeight){
						$(container).addClass('max-height');
						if(pos > 50){
							$(container).css('top', pos);
						}
					}else{
						$(container).removeClass('max-height');
						$(container).css('top', '50%');
					}
				},
				error: function (request, status, error) {
					alert('Произошла ошибка '+ error +'. Перезагрузите страницу');
		    }
			});
		}
		});
	}//loadContent

	function order(){
		var order = $('#form-order');
		var checkboxes = $('#checkbox .jq-radio');
		var formObj = order.find('#adress-form');
		var areaObj = order.find('#area-text');
		var pickupObj = order.find('#pickup-text');
		var checkedObj = order.find('.checked');
		var inpDate = order.find('input[name="date"]');
		var linkDate = order.find('.date');

		function switchRadio(elem){
			switch (elem) {
				case 'rostov-styler':
					$(formObj).fadeIn();
					break;

				case 'aksai-styler':
					$(formObj).fadeIn();
					break;

				case 'area-styler':
					$(areaObj).fadeIn();
					break;

				case 'pickup-styler':
					$(pickupObj).fadeIn();
					break;
			}
		}

		var idObj = $(checkedObj).attr('id');

		switchRadio(idObj);

		$(checkboxes).on('click', function(){
			var idObj = $(this).attr('id');

			$('.blocks').hide();

			switchRadio(idObj);
		});
		$(inpDate).datepicker({
			beforeShowDay: $.datepicker.noWeekends,
			onSelect: function(dateText, inst){
				$(this).val(dateText);
			}
		});

		$(linkDate).click(function(e) {
			e.preventDefault();
			$.datepicker.regional["ru"];
			$(inpDate).show().focus().datepicker('show').hide();
		});
	}//order

	function calculation(){
			var main = $('#calc');
			var plus = main.find('.plus');
			var minus = main.find('.minus');
			var inp = main.find('input');

			function counts(target, arg){
				$(target).click(function(){
					var parent = $(this).closest('.count');
					var inp = parent.find('input');
					if(arg === '+'){
						inp.val(parseInt(inp.val()) + 1);
					}else{
						if($(inp).val() > 0){
							inp.val(parseInt(inp.val()) - 1);
						}
					}

					setTimeout(function(){ calcPrice() }, 800);
				});
			}//counts

			function inputOnlyNumber(target){
				$(target).bind("change keyup input click", function(){
					var onlyNumberReg = /[^0-9:]/g;
					if(this.value.match(onlyNumberReg)){
						$(this).val(0);
					}
					if($(this).val() === '' || $(this).val === NaN){
						$(this).val(0);
					}
				});
			}//inputOnlyNumber

			function calcPrice(){
				var inps = main.find('input[type="text"]');
				var args = [];
				var sum = 0;
				var contain = $('#price span');

				$(inps).each(function(indx, elem){
					var price = Number($(this).data('price'));
					var val = Number($(this).val());

					function n1(){

						if(price){
							var res = price * val;
							return(res);
						}else{
							return 0;
						}
					}

					args.push(n1());
				});

				for(var i = 0; i < args.length; i++){
					sum = sum + parseInt(args[i]);
				}
				$(contain).text(sum);
			}//calcPrice

			inputOnlyNumber(inp);
			counts(plus, '+');
			counts(minus, '-');

			$(inp).on("change keyup input", function(){
				setTimeout(function(){ calcPrice() }, 800);
			});

			calcPrice();
	}//calculation

	function mainSlider(){
		var main = $('.catalog-slide');
		var titl = main.find(' > h1');
		var texts = main.find(' > p');
		var slide = main.find(' > ul');
		var items = slide.find(' > li');
		var birk = items.find('.birk');
		var price = items.find('.price');

		$(birk).click(function(){
			var item = $(this).closest('li');

			$(items).removeClass();
			$(birk).hide();
			$(price).hide();
			$(titl).css('opacity', 0);
			$(texts).css('opacity', 0);

			function triggerClass(){
				$(birk).fadeIn();
				$(item).addClass(function(){
						$(this).addClass('active');
						var birk = $(this).find('.birk');
						var price = $(this).find('.price');
						var newTitl = birk.find('p').text();
						var newTexts = birk.find('span').text();

						$(titl).text(newTitl).animate({'opacity': 1}, 'fast');
						$(texts).text(newTexts).animate({'opacity': 1}, 'fast');
						$(birk).hide();
						$(price).fadeIn().css('display','flex');
					}
				);
			}

			if($(slide).css('margin-left') == '0px'){
				$(slide).animate({'margin-left': '-50%'}, 1200,
					function(){triggerClass();});
			}else{
				$(slide).animate({'margin-left': '0'}, 1200,
					function(){triggerClass();});
			}
		});
	}//mainSlider

	mainSlider();
	calculation();
	order();
	ankorAnimate('.ankor');
	loadContent('#menu li a', '#menu-window');
	loadContent('.advents li a', '#advents-window');
	closeWindow('.overlay', '.module-window');
});
