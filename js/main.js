/*=
	Jorge Fco. / Dev
	main.js — 2017
*/
(function($){
	//Vars
	var slider = $('#main-slider');
	var carousel = $('#carousel');

	//Functions
	main = {
		init: function(){
			$('.selectpicker').selectpicker();
			main.Slider();
			main.Carousel();
		},
		Slider: function(){
			slider.owlCarousel({
				loop:true,
				margin:0,
				nav:false,
				dots: true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:1
					}
				}
			});
		},
		Carousel: function(){
			carousel.owlCarousel({
				loop:true,
				margin:25,
				nav:false,
				dots: true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:3
					}
				}
			});
		}
	};
	//Init
	main.init();
})(jQuery);