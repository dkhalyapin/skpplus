(function($){
$(function() {

	//Toogle Menu
		$(".toggle-menu").click(function() {
		$(this).toggleClass("on");
		$(this).next().next().find(".main-menu").slideToggle();
		return false;
	});

	// Слайдер акций
	var slider = $(".slider");
	slider.owlCarousel({		
		items: 1,		
		loop: true,
		autoplay: true,
		smartSpeed: 700,		
		dots: true
	});

	$(".slider-nav .next").click(function(){
		slider.trigger('next.owl.carousel');		
	});
	$(".slider-nav .prev").click(function(){
		slider.trigger('prev.owl.carousel');		
	});
	
	//Валидация номера с помощь Masked Input
	$("#inputTel").mask("8 (999) 999-99-99");
	
	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//Одинаковая высота колонок
	$('.s-contacts-wrapper .item').matchHeight();

	//Replace all SVG images with inline SVG
	$('img.img-svg').each(function(){
		var $img = $(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');

		$.get(imgURL, function(data) {
				// Get the SVG tag, ignore the rest
				var $svg = $(data).find('svg');

				// Add replaced image's ID to the new SVG
				if(typeof imgID !== 'undefined') {
					$svg = $svg.attr('id', imgID);
				}
				// Add replaced image's classes to the new SVG
				if(typeof imgClass !== 'undefined') {
					$svg = $svg.attr('class', imgClass+' replaced-svg');
				}

				// Remove any invalid XML tags as per http://validator.w3.org
				$svg = $svg.removeAttr('xmlns:a');

				// Check if the viewport is set, if the viewport is not set the SVG wont't scale.
				if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
					$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
				}

				// Replace image with new SVG
				$img.replaceWith($svg);

			}, 'xml');

	});	

});
})(jQuery);