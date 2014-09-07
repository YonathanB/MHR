/******************************************************************
*******************************************************************

Template Name: paris
Theme URI: http://themeforest.ninetofive.me/paris/
Description: paris | creative agency template
Author: ninetofive
Author URI: http://www.ninetofive.me
Version: 1.0
							
Designed & Handcrafted by Zan from ninetofive.me
									
*******************************************************************
******************************************************************/

// Preloader
$(window).load(function() { 
	$('video').show();
	setTimeout(function(){
		$('.preloader-overlay').fadeOut(1500);
		setTimeout(function(){
			$('.preloader-overlay').remove();
		}, 1500);
	}, 1500);
});

$(document).ready(function() { 

	"use strict";
	
	// Menu Scroll
	var nav = $('.topbar');
	var nav_height = $('section.hero').height()-60;
	$(window).scroll(function(){
		var scroll_nav = $('body').scrollTop();
		if (scroll_nav >= nav_height) {
			$(nav).addClass('scroll');
		}else{
			$(nav).removeClass('scroll');
		};
	});

	// Section Scrolling	   
	$('a.section-scroll').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length && target || $('[id=' + this.hash.slice(1) +']');
			if (target.length) {
				$('ul.menu li a').removeClass('active');
				$(this).addClass('active');
				var targetOffset = target.offset().top;
				if (target.hasClass('fade')) {
					targetOffset = targetOffset-200;
				}else{
					targetOffset = targetOffset-80;
				};
				$('html,body').animate({scrollTop: targetOffset}, 1000);
				return false;
			}
		}
	});

	// Scroll Fader
	$(window).scroll(function(){
		$('section.fade').each (function(){
			var section = $(this);
			if ((section.position().top-section.height()) < $(window).scrollTop()) {
				setTimeout(function(){
					$(section).animate({opacity: "1", marginTop: "0px"}, 1000, 'linear');
					$(section).removeClass('fade');
				}, 300);
			}
		});
	});

	// Portfolio
	$(function(){
		$('ul.portfolio').mixitup({
			targetSelector: '.portfolioitem',
			filterSelector: '.filter',
			easing: 'smooth',
			effects: ['fade', 'scale'],
			layoutMode: 'grid',
			targetDisplayGrid: 'inline-block'
		});
	});

	// Contact Form
	$('body').on('click', 'a#contact-submit' ,function(){
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var name = $('input#name').val();
		var email = $('input#email').val();
		var message = $('textarea#message').val();
		var signup = regex.test(email);
		if (signup == true && message !== '' && name !== '') {
			// Do something with the data and hide fields
			$('.modal-overlay').toggle("fade");
			$('.modal-overlay-container-wrapper').toggle("slide", { direction: "down" });
			$('input#name').addClass('done');
			$('input#email').addClass('done');
			$('textarea#message').addClass('done');
			$.ajax({
				url: 'contact.php',
				data: { email: email, name: name, message: message },
				type: 'POST'
			});
		}else if (signup == false || message == '' || name == ''){
			if (signup == false) {
				$('input#email').val('Please enter a valid email');
			}
			if(message == ''){
				$('textarea#message').val('Please enter a message');
			}
			if(name == ''){
				$('input#name').val('Please enter a name');
			};
		};
	});

	// FAQ
	$(".accordion").accordion({ header: ".header" });
	
	// Overlay
	$('.modal-open').on('click', function(){
		$('.modal-overlay').toggle("fade");
		$('.modal-overlay-container-wrapper').toggle("slide", { direction: "down" });
		// Content Selector
		var selector = $(this).attr('data-selector');
		$('#modal-content').html($('#'+selector).html());
		if ($(this).attr('data-name') !== '' && typeof $(this).attr('data-name') != 'undefined') {
			$('.contact-form h1').text('Contact '+$(this).attr('data-name'));
			$('textarea#message').attr('placeholder', 'Hi there '+$(this).attr('data-name'));
		}else{
			$('.contact-form h1').text('Contact Us');
			$('textarea#message').attr('placeholder', 'Message');
		};
	});

	// Bounce Effect
	var bounce = setInterval(function(){
		$('.bounce').effect("bounce", { direction:'down', times:3 }, 1000);
	}, 3000);
	$(window).scroll(function(){
		if ($(window).scrollTop() >= 0) {
			clearInterval(bounce);
		}
	});
	
	// Features
	$('.tabs').tabs();
	$('.progressbar').progressbar({
		value: Math.floor(Math.random() * 100)
	});

	// PieCharts
	$(function() {
		$('.chart').easyPieChart({
			lineWidth: 30,
			barColor: '#efefef',
			trackColor: '#b8b8b8',
			scaleColor: false,
			size: 200,
			lineCap: 'butt'
		});
	});
});