'use strict';


$(window).on('load', function () {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut();
	$("#preloder").delay(400).fadeOut("slow");

});

(function ($) {
	/*------------------
		Navigation
	--------------------*/
	$('.nav-switch').on('click', function (event) {
		$('.main-menu').slideToggle(400);
		event.preventDefault();
	});


	/*------------------
		Background Set
	--------------------*/
	$('.set-bg').each(function () {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});


	/*------------------
		Hero Slider
	--------------------*/
	$('.hero-slider').owlCarousel({
		loop: false,
		nav: false,
		dots: true,
		mouseDrag: false,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		items: 1,
		margin: 0,
		autoplay: false
	}).on('changed.owl.carousel', function (event) {
		$('.hero-slider .owl-dots:last-child').remove();
		currentHSnumber();
	})
	var dot = $('.hero-slider .owl-dot');
	dot.each(function () {
		var index = $(this).index() + 1;
		if (index < 10) {
			$(this).html('0').append(index);
			$(this).append('<span>.</span>');
		} else {
			$(this).html(index);
			$(this).append('<span>.</span>');
		}
	});
	function currentHSnumber() {
		$('.hero-slider .owl-dots').clone().appendTo('.hero-slider');
		$('.hero-slider .owl-dots:last-child').addClass('owl-dots-number');
		var av = $('.owl-dots-number').innerHeight() / 2;
		$('.owl-dots-number').css('marginTop', -av);
	}
	currentHSnumber();


})(jQuery);

