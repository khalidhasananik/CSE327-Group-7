// Loaded: Always
'use strict';

/**
 * Fade out the loader and preloader elements when the window has fully loaded.
 *
 * This function binds to the 'load' event of the window and fades out the
 * elements with the specified classes after a delay.
 *
 * @jQuery - The jQuery object.
 * @external "jQuery.fn"
 * @function external:"jQuery.fn".fadeOut
 * @returns {void}
 */

$(window).on('load', function () {
	$('.loader').fadeOut();
	$('#preloder').delay(400).fadeOut('slow');
});

(function ($) {
	/**
	 * jQuery object.
	 * @external jQuery
	 * @see {@link http://api.jquery.com/jQuery/}
	 */

	/**
	 * Toggle the visibility of the main menu when the navigation switch is clicked.
	 *
	 * This function binds to a 'click' event on an element with the class 'nav-switch' and
	 * toggles the visibility of an element with the class 'main-menu' using a slide animation.
	 * Additionally, it prevents the default behavior of the event to avoid page navigation.
	 *
	 * @function
	 * @param {Event} event - The click event object.
	 * @returns {void}
	 */

	$('.nav-switch').on('click', function (event) {
		$('.main-menu').slideToggle(400);
		event.preventDefault();
	});

	$('.set-bg').each(function () {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});

	$('.hero-slider')
		.owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			mouseDrag: true,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			items: 1,
			margin: 0,
			autoplay: true,
		})
		.on('changed.owl.carousel', function (event) {
			$('.hero-slider .owl-dots:last-child').remove();
			currentHSnumber();
		});
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

	/**
	 * Current HS number
	 * @return {null}
	 */
	function currentHSnumber() {
		$('.hero-slider .owl-dots').clone().appendTo('.hero-slider');
		$('.hero-slider .owl-dots:last-child').addClass('owl-dots-number');
		var av = $('.owl-dots-number').innerHeight() / 2;
		$('.owl-dots-number').css('marginTop', -av);
	}
	currentHSnumber();

	/*------------------
		Brands Slider
	--------------------*/
	$('.brands-slider').owlCarousel({
		loop: true,
		nav: false,
		dots: false,
		margin: 40,
		autoplay: true,
		responsive: {
			0: {
				items: 2,
			},
			480: {
				items: 3,
			},
			768: {
				items: 5,
			},
		},
	});

	$('.carousel-testimony').owlCarousel({
		center: true,
		loop: true,
		items: 1,
		margin: 30,
		stagePadding: 0,
		nav: false,
		autoplay: true,
		// navText: [
		// 	'<span class="ion-ios-arrow-back">',
		// 	'<span class="ion-ios-arrow-forward">',
		// ],
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 3,
			},
			1000: {
				items: 3,
			},
		},
	});

	/*------------------
		Circle progress
	--------------------*/
	$('.circle-progress').each(function () {
		var cpvalue = $(this).data('cpvalue');
		var cpcolor = $(this).data('cpcolor');
		var cpid = $(this).data('cpid');

		$(this).append(
			'<div class="' +
				cpid +
				'"></div><div class="progress-value"><h3>' +
				cpvalue +
				'%</h3></div>'
		);

		if (cpvalue < 100) {
			$('.' + cpid).circleProgress({
				value: '0.' + cpvalue,
				size: 123,
				thickness: 6,
				fill: cpcolor,
				emptyFill: 'rgba(0, 0, 0, 0)',
			});
		} else {
			$('.' + cpid).circleProgress({
				value: 1,
				size: 240,
				thickness: 3,
				fill: cpcolor,
				emptyFill: 'rgba(0, 0, 0, 0)',
			});
		}
	});
})(jQuery);
