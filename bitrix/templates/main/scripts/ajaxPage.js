$(function(){
	function closeWindow(link, target){
		$(link).click(function (e) {
			e.preventDefault();
			$('.overlay').hide();
			$(target).fadeOut();
		})
	}

	closeWindow('.close', '.module-window');
});
