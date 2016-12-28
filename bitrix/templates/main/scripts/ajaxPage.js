$(function(){
	function closeWindow(link, target){
		$(link).click(function (e) {
			e.preventDefault();
			$('.overlay').hide();
			$(target).fadeOut();
		});
	}

	function YandexMap(container, zoom){
		var coordinat = $(container).data('coordinat');
		var arCoordinat = coordinat.split(',');
		var lat = Number(arCoordinat[0]);
		var lan = Number(arCoordinat[1]);

		ymaps.ready(init);
		var map;

		function init(){
			map = new ymaps.Map("map", {
				center: [lat,lan],
				zoom: zoom,
				controls: ['typeSelector', 'zoomControl']
			});

			myPlacemark = new ymaps.Placemark([lat, lan]);

			map.geoObjects.add(myPlacemark);
			map.behaviors.disable("scrollZoom");
		}
	}

	closeWindow('.close', '.module-window');
	if($('#map').length) {
		YandexMap('#map', 17);
	}
});
