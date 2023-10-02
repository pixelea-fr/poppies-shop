(function ($) {
	$(document).ready(function ($) {
		function heightGal() {
			const width = $('.gallery figure:nth-child(1)').width(); // Get the width of the element
			const height = width; // Calculate height based on the width
			const gridTemplateRowsValue = 'repeat(2, ' + height + 'px ' + height + 'px ' + (height / 1.5) + 'px' + ')';
			$('.gallery').css('grid-template-rows', gridTemplateRowsValue); // Apply the calculated height to the element
		}
	
		heightGal();
	
		// Call the function on window resize
		$(window).resize(function () {
			heightGal();
		});
	});
	
})(jQuery);