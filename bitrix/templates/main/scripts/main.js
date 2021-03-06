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
		$(link).on('click', function (e) {
			e.preventDefault();
			$('.overlay').hide();
			$(target).fadeOut();
		});
	}

function loadContent(clickLoad, container) {
	$(clickLoad).click(function(e){
		e.preventDefault();
		var loadContent = $(this).attr('href');
		var overlay = $('.overlay');
		var windowHeight = $(window).height();
		var pos = $(this).offset().top - windowHeight;
		var loading = $('.loading');

		if(!$(this).hasClass('ankor')){
			$.ajax({
				url: loadContent,
				cache: false,
				beforeSend: function() {
					$(container).hide();
					$(overlay).show();
					$(loading).show();
				},
				success: function(html) {
					$(container).html(html);
					$(loading).hide();
					$(container).fadeIn();
					var wrapHeaight = $(container).find('.wrap').height();
					if(wrapHeaight > windowHeight){
						$(container).addClass('max-height');
						if(pos > 50){
							$(container).css('top', pos - 50);
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
		var hideCalc = false;
		var orderForm = $('#form-order');
		var checkboxes = $('#checkbox .jq-radio');
		var formObj = orderForm.find('#adress-form');
		var areaObj = orderForm.find('#area-text');
		var pickupObj = orderForm.find('#pickup-text');
		var checkedObj = orderForm.find('.checked');
		var inpDate = orderForm.find('input[name="date"]');
		var linkDate = orderForm.find('.date');
		var blocks = orderForm.find('.blocks');
		var calc = $('#calc-row');

		function switchRadio(elem){
			switch (elem) {
				case 'rostov-styler':
					$(formObj).fadeIn();
					hideCalc = false;
					break;

				case 'aksai-styler':
					$(formObj).fadeIn();
					hideCalc = false;
					break;

				case 'area-styler':
					$(areaObj).fadeIn();
					hideCalc = true;
					break;

				case 'pickup-styler':
					$(pickupObj).fadeIn();
					hideCalc = true;
					break;
			}

			if(hideCalc){
				$(calc).hide();
			}else{
				$(calc).fadeIn();
			}
		}

		var idObj = $(checkedObj).attr('id');

		switchRadio(idObj);

		$(checkboxes).on('click', function(){
			var idObj = $(this).attr('id');

			$(blocks).hide();

			switchRadio(idObj);
		});

		var disableddates = ["02-01-2017", "03-01-2017", "07-01-2017"];

		function DisableSpecificDates(date) {
			var string = jQuery.datepicker.formatDate('dd-mm-yy', date);
			var day = date.getDay();
			var disablesArr = [];

			if(disableddates.indexOf(string) == -1 && day != 0) {
				disablesArr.push(true);
			}

			return(disablesArr);
		}

		$(inpDate).datepicker({
			beforeShowDay: DisableSpecificDates,
			minDate:"1d",
			onSelect: function(dateText, inst){
				$(this).val(dateText);
				$(linkDate).text(dateText);
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

					setTimeout(function(){ calcPrice(); }, 800);
				});
			}//counts

			function inputOnlyNumber(target){
				$(target).bind("change keyup input click", function(){
					var onlyNumberReg = /[^0-9:]/g;
					if(this.value.match(onlyNumberReg)){
						$(this).val(0);
					}
					if($(this).val() === '' || $(this).is(NaN)){
						$(this).val(0);
					}
				});
			}//inputOnlyNumber

			function calcPrice(){
				var inps = main.find('input[type="text"]');
				var args = [];
				var sum = 0;
				var contain = $('#price span');
				var inp = main.find('input[name="price"]');

				$(inps).each(function(indx, elem){
					var price = Number($(this).data('price'));
					var val = Number($(this).val());

					$(this).click(function(event) {
						if($(this).val() == 0)
							$(this).val('');
					});

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

				if(sum < 0){
					return false;
				}

				$(contain).text(sum);
			}//calcPrice

			inputOnlyNumber(inp);
			counts(plus, '+');
			counts(minus, '-');

			$(inp).on("change keyup input", function(){
				setTimeout(function(){ calcPrice(); }, 800);
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
		var bottle = items.find('img');

		$(slide).find('> li:first-child').addClass('active');

		function flipAnimate(target, status){
			if(status === 'show'){
				$(target).removeClass('flipOutX')
					.addClass('animated flipInX');
			}else{
				$(target).removeClass('flipInX')
					.addClass('animated flipOutX');
			}
		}

		$(items).each(function(){
			if(!$(this).hasClass('active')){
				$(this).find('img').addClass('action');
			}
		});

		$(main).on('click', '.birk, .action', function(){
			var item = $(this).closest('li');

			setTimeout(function(){$(items).removeClass();}, 500);
			$(birk).hide();
			$(titl).css('opacity', 0);
			$(texts).css('opacity', 0);
			flipAnimate(price, 'hide');

			function triggerClass(){
				$(birk).fadeIn();
				$(bottle).addClass('action');

				$(item).addClass(function(){
						$(this).addClass('active');
						var birk = $(this).find('.birk');
						var price = $(this).find('.price');
						var newTitl = birk.find('p').text();
						var newTexts = birk.find('span').text();
						var imgAction = $(this).find('.action');

						$(titl).text(newTitl).animate({'opacity': 1}, 'fast');
						$(texts).text(newTexts).animate({'opacity': 1}, 'fast');
						$(birk).hide();
						flipAnimate(price, 'show');
						$(price).css('display','flex');
						$(imgAction).removeClass();
					}
				);
			}//triggerClass

			if($(slide).css('margin-left') == '0px'){
				$(slide).animate({'margin-left': '-50%'}, 1000, 'easeInOutSine',
					function(){triggerClass();});
			}else{
				$(slide).animate({'margin-left': '0'}, 1000, 'easeInOutSine',
					function(){triggerClass();});
			}
		});
	}//mainSlider

	function validateForm(){
		$('#order form ').on('click', '.require, .error-date', function(){
			$(this).removeClass('error-input');
			$('.error').fadeOut(1000).remove();
			$(this).removeClass('error-date');
		});

		$('#order form').submit(function(event){
			var error = false;
			var inputText = $(this).find(".require");
			var alertWindow = $('#alert-window');
			var wrap = alertWindow.find('.wrap');
			var inpPrice = $(this).find('input[name="price"]');
			var text = $('input[type="text"]');
			var area = $('textarea');
			var inpDate = $(this).find('input[name="date"]');
			var linkDate = $(this).find('.date');

			inputText.each(function(){
				if($(this).val().replace(/\s/g,'') == ''){
				  $(this).val('');
				}
				if($(this).val() === ''){
					error = true;
					$(this).addClass('error-input');
				}
			});

			if($(inpDate).val() === ''){
				$(linkDate).addClass('error-date');
				error = true;
			}

			$(wrap).find('h1').remove();

			if(error){
				event.preventDefault();
				$('.overlay').show();
				$(wrap).append('<h1>Вы заполнили не все поля.</h1>');
				$(alertWindow).fadeIn();
			}else{
				$(inpPrice).val($('#price span').text());
				$.ajax({
					type: "POST",
					url: $(this).attr('action'),
					data: $(this).serialize(),
				  success: function(){
						$(wrap).append('<h1>Спасибо за ваш заказ!</h1>');
						$('.overlay').show();
						$(alertWindow).fadeIn();
						$(this).find(".error").remove();
						$('#price span').text('0');
						$('#order form').trigger('reset');
						$(linkDate).text('Укажите дату доставки');
          },
          error: function(){
              alert('error');
							event.preventDefault();
          }
        });
				return false;
			}
		});
	}//validate form

	function seo_text(){
		$('.additional-text').click(function() {
			if($(this).hasClass('active')){
				$(this).animate({'height':'150px'}, 500)
					.removeClass('active');
			}else{
				$(this).animate({'height':'100%'}, 500)
					.addClass('active');
			}
		});
	}

	seo_text();
	validateForm();
	mainSlider();
	calculation();
	order();
	ankorAnimate('.ankor');
	loadContent('#menu li a', '#menu-window');
	loadContent('.advents li a', '#advents-window');
	closeWindow('.overlay', '.module-window');
	closeWindow('.close', '.module-window');
});
