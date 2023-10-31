'use strict';

$(window).on('load', function () {
	/*------------------
		Preloder
	--------------------*/
	$('.loader').fadeOut();
	$('#preloder').delay(400).fadeOut('slow');
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
	function currentHSnumber() {
		$('.hero-slider .owl-dots').clone().appendTo('.hero-slider');
		$('.hero-slider .owl-dots:last-child').addClass('owl-dots-number');
		var av = $('.owl-dots-number').innerHeight() / 2;
		$('.owl-dots-number').css('marginTop', -av);
	}
	currentHSnumber();

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

/*------------------
		Fitness Section
	--------------------*/

/**
 * divideBy100
 * @param {*} number - number to divide
 * @description divide number by 100
 * @example divideBy100(100) // 1
 * @returns {number}
 */
function divideBy100(number) {
	return number / 100;
}

module.exports = divideBy100;

/**
 * divide
 * @param {*} numberOne any number
 * @param {*} numberTwo any number
 * @description divide numberOne by numberTwo
 * @example divide(100, 10) // 10
 * @returns {number}
 */
function divide(numberOne, numberTwo) {
	return numberOne / numberTwo;
}

/**
 * multiply
 * @param {*} numberOne any number
 * @param {*} numberTwo any number
 * @description multiply numberOne by numberTwo
 * @example multiply(100, 10) // 1000
 * @returns {number}
 */

function multiply(numberOne, numberTwo) {
	return numberOne * numberTwo;
}

let userName = document.querySelector('#name');
let userAge = document.querySelector('#age');
let userGender = document.querySelector('#gender');

document.querySelector('.label-next').addEventListener('click', function () {
	if (
		userName.value === '' ||
		userAge.value === '' ||
		userGender.value === ''
	) {
		document.querySelector('#warning').style.display = 'block';
	} else {
		document.querySelector('.login').style.transform = 'translateY(-540px)';
		document.querySelector('.label-next').style.transform = 'scale(0.5)';
		document.querySelector('.label-next').style.marginTop = '0px';
		document.querySelector('.label-next').style.marginBottom = '0px';
		document.querySelector('.label-next').style.fontSize = '0.5rem';
		document.querySelector('.label-next').style.color = 'transparent';
	}
});

let userHeight = document.querySelector('#height');
let userWeight = document.querySelector('#weight');
let userActivity = document.querySelector('#activity');
let userWorkout = document.querySelector('#workout');
let userMotivation = document.querySelector('#motivation');

document.querySelector('#check').addEventListener('click', function () {
	if (
		userHeight.value === '' ||
		userWeight.value === '' ||
		userActivity.value === '' ||
		userWorkout.value === '' ||
		userMotivation.value === ''
	) {
		document.querySelector('#warning').style.display = 'block';
	} else {
		document.querySelector('#check').style.display = 'none';
		// document.querySelector(".sg1").style.display = "flex";
		let h = userHeight.value * 1;
		let w = userWeight.value * 1;
		let age = userAge.value * 1;
		let gender = userGender.value;
		// let bmi = w / ((h / 100) * (h / 100));
		let bmi = divide(w, multiply(divideBy100(h), divideBy100(h)));
		if (bmi < 18.5) {
			//underweight
			if (gender === 'Male') {
				//Male
				if (age < 20) {
					//Teenage
					document.querySelector('.sg1').style.display = 'flex';
				} else if (age >= 20 && age < 30) {
					//20s
					document.querySelector('.sg2').style.display = 'flex';
				} else if (age >= 30 && age < 40) {
					//30s
					document.querySelector('.sg3').style.display = 'flex';
				} else if (age >= 40 && age < 50) {
					//40s
					document.querySelector('.sg4').style.display = 'flex';
				} else if (age >= 50 && age < 60) {
					//50s
					document.querySelector('.sg5').style.display = 'flex';
				} else if (age >= 60) {
					//60s
					document.querySelector('.sg6').style.display = 'flex';
				}
			} else if (gender === 'Female') {
				//Female
				if (age < 20) {
					//Teenage
					document.querySelector('.sg7').style.display = 'flex';
				} else if (age >= 20 && age < 30) {
					//20s
					document.querySelector('.sg8').style.display = 'flex';
				} else if (age >= 30 && age < 40) {
					//30s
					document.querySelector('.sg9').style.display = 'flex';
				} else if (age >= 40 && age < 50) {
					//40s
					document.querySelector('.sg10').style.display = 'flex';
				} else if (age >= 50 && age < 60) {
					//50s
					document.querySelector('.sg11').style.display = 'flex';
				} else if (age >= 60) {
					//60s
					document.querySelector('.sg12').style.display = 'flex';
				}
			}
		} else if (bmi >= 18.5 && bmi < 25) {
			//healthy
			if (gender === 'Male') {
				//Male
				if (age < 20) {
					//Teenage
					document.querySelector('.sg13').style.display = 'flex';
				} else if (age >= 20 && age < 30) {
					//20s
					document.querySelector('.sg14').style.display = 'flex';
				} else if (age >= 30 && age < 40) {
					//30s
					document.querySelector('.sg15').style.display = 'flex';
				} else if (age >= 40 && age < 50) {
					//40s
					document.querySelector('.sg16').style.display = 'flex';
				} else if (age >= 50 && age < 60) {
					//50s
					document.querySelector('.sg17').style.display = 'flex';
				} else if (age >= 60) {
					//60s
					document.querySelector('.sg18').style.display = 'flex';
				}
			} else if (gender === 'Female') {
				//Female
				if (age < 20) {
					//Teenage
					document.querySelector('.sg19').style.display = 'flex';
				} else if (age >= 20 && age < 30) {
					//20s
					document.querySelector('.sg20').style.display = 'flex';
				} else if (age >= 30 && age < 40) {
					//30s
					document.querySelector('.sg21').style.display = 'flex';
				} else if (age >= 40 && age < 50) {
					//40s
					document.querySelector('.sg22').style.display = 'flex';
				} else if (age >= 50 && age < 60) {
					//50s
					document.querySelector('.sg23').style.display = 'flex';
				} else if (age >= 60) {
					//60s
					document.querySelector('.sg24').style.display = 'flex';
				}
			}
		} else if (bmi >= 25 && bmi < 30) {
			//overweight
			if (gender === 'Male') {
				//Male
				if (age < 20) {
					//Teenage
					document.querySelector('.sg25').style.display = 'flex';
				} else if (age >= 20 && age < 30) {
					//20s
					document.querySelector('.sg26').style.display = 'flex';
				} else if (age >= 30 && age < 40) {
					//30s
					document.querySelector('.sg27').style.display = 'flex';
				} else if (age >= 40 && age < 50) {
					//40s
					document.querySelector('.sg28').style.display = 'flex';
				} else if (age >= 50 && age < 60) {
					//50s
					document.querySelector('.sg29').style.display = 'flex';
				} else if (age >= 60) {
					//60s
					document.querySelector('.sg30').style.display = 'flex';
				}
			} else if (gender === 'Female') {
				//Female
				if (age < 20) {
					//Teenage
					document.querySelector('.sg31').style.display = 'flex';
				} else if (age >= 20 && age < 30) {
					//20s
					document.querySelector('.sg32').style.display = 'flex';
				} else if (age >= 30 && age < 40) {
					//30s
					document.querySelector('.sg33').style.display = 'flex';
				} else if (age >= 40 && age < 50) {
					//40s
					document.querySelector('.sg34').style.display = 'flex';
				} else if (age >= 50 && age < 60) {
					//50s
					document.querySelector('.sg35').style.display = 'flex';
				} else if (age >= 60) {
					//60s
					document.querySelector('.sg36').style.display = 'flex';
				}
			}
		} else if (bmi >= 30) {
			//obese
			if (gender === 'Male') {
				//Male
				if (age < 20) {
					//Teenage
					document.querySelector('.sg37').style.display = 'flex';
				} else if (age >= 20 && age < 30) {
					//20s
					document.querySelector('.sg38').style.display = 'flex';
				} else if (age >= 30 && age < 40) {
					//30s
					document.querySelector('.sg39').style.display = 'flex';
				} else if (age >= 40 && age < 50) {
					//40s
					document.querySelector('.sg40').style.display = 'flex';
				} else if (age >= 50 && age < 60) {
					//50s
					document.querySelector('.sg41').style.display = 'flex';
				} else if (age >= 60) {
					//60s
					document.querySelector('.sg42').style.display = 'flex';
				}
			} else if (gender === 'Female') {
				//Female
				if (age < 20) {
					//Teenage
					document.querySelector('.sg43').style.display = 'flex';
				} else if (age >= 20 && age < 30) {
					//20s
					document.querySelector('.sg44').style.display = 'flex';
				} else if (age >= 30 && age < 40) {
					//30s
					document.querySelector('.sg45').style.display = 'flex';
				} else if (age >= 40 && age < 50) {
					//40s
					document.querySelector('.sg46').style.display = 'flex';
				} else if (age >= 50 && age < 60) {
					//50s
					document.querySelector('.sg47').style.display = 'flex';
				} else if (age >= 60) {
					//60s
					document.querySelector('.sg48').style.display = 'flex';
				}
			}
		}
	}
});
