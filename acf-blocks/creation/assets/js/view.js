(function ($) {
	$(document).ready(function ($) {
		function setHeightToWidth() {
			const width = $('.grid figure:nth-child(1)').width(); // Obtenez la largeur de l'élément
			const height = width; // Calculez la hauteur en fonction de la largeur
			$('.grid').css('grid-template-rows', 'repeat(4, ' + height + 'px)'); // Appliquez la hauteur calculée à l'élément
		};
	  
		setHeightToWidth();
	  
		// Appelez la fonction à chaque redimensionnement de la fenêtre
		$(window).resize(function () {
		  setHeightToWidth();
		});
	  });
	  

})(jQuery);