jQuery(function ($) {
/* -----------------------------------------
	Plugins
----------------------------------------- */

	// matchHeight
	$('.match-height').matchHeight();

	// Owl Carousel
	$('.process-carousel').owlCarousel({
		center: true,
		items: 1,
		loop: true,
		margin: 20,
		responsive:{
			600: {
				items: 2
			}
		}
	});

});
