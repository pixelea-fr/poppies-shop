(function($){
	$(document).ready(function($) {

	});
	$(window).load(function() {
		$('.galerie').slick({
			slidesToShow: 2,
			slidesToScroll: 1,
			arrows: false,
			autoplay: true,
			autoplaySpeed: 2000,
			dots: true,
			infinite: true,
			appendDots: $('.dots'),
		});
	});
})(jQuery);