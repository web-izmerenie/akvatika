$(function(){

	//init plugins
	$('input').styler();
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
});
