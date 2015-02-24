/*jslint browser: true*/
/*global $, jQuery, alert, console, Modernizr, Waypoint*/

$(document).ready(function () {
	"use strict";
	
	// apply active class to anchors that match current page
	(function addActive() {
		$('a[href^="' + location.pathname.split("/")[2] + '"]').parent('li').addClass('current-menu-item');
	}());
	
	// animated fixed header
	(function initWaypoint() {
		var waypoint = new Waypoint({
			element: $('body'),
			handler: function () {
				$('header').toggleClass('scrolled');
			},
			offset: -20
		});
	}());
	
	// initialize slicks carousels
	(function initSlickSlider() {
		// slick featured slider
		$('.slick').slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			dots: true,
			autoplay: false,
			autoplaySpeed: 10000
		});
		// slick blogroll slider
		$('.slickcenter').slick({
			slidesToShow: 3,
			slidesToScroll: 3,
			autoplay: false,
			autoplaySpeed: 10000,
			dots: true
		});
		$('.slider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 8000,
			dots: true,
			infinite: false,
			cssEase: 'cubic-bezier(0.555, 0.005, 0.345, 0.995)'
		});
	}());
	
	
	// initialize isotope grid & sort
	(function initIsotope() {
		// isotope container
		var $container = $('#container');
		$container.isotope({
			itemSelector: '.investment',
			layoutMode: 'masonry'
		});
		// filter items on button click
		$('#filters').on('click', 'a', function () {
			var filterValue = $(this).attr('data-filter');
			$container.isotope({ filter: filterValue });
			// add/remove active class from btn
			$('#filters a').removeClass('active-btn');
			$(this).addClass('active-btn');
		});
	}());
	
	
	// initialize accordian functionality
	(function initAccordion() {
		$('.togglegroup').accordion();
	}());
	
	// scrolling sidenav
	(function initScrollingSidenav() {
		var scrollBtn = $('.sidenav li a');
		// on click, scroll screen to matching anchor position
		scrollBtn.on('click', function (e) {
			e.preventDefault();
			// add/remove active class from btn
			scrollBtn.removeClass('active');
			$(this).addClass('active');
			// retrieve href value to match anchor id
			var getHref = $(this).attr('href').split("#"),
				href = getHref[getHref.length - 1];
			$("#" + href).velocity('scroll', 1000);
		});
	}());
	
	// fixed sidenav
	(function fixedSidenav() {
		$('.scrollnav').scrollToFixed({
			marginTop: 100,
			limit: $('footer').offset().top - 260
		});
	}());
	
	// lightbox
	(function lightbox() {
		// establish lightbox btn
		var lb = $('.lb a, .plusmore, .member a');
		// on click, open lightbox with matching data-target and id
		lb.on('click', function (e) {
			e.preventDefault();
			// prevent page from scrolling
			$('body').css('overflow', 'hidden');
			var target = $(this).attr('data-target');
			$('#' + target).addClass('open');
			$('#poverlay').fadeIn(100);
			// click overlay or close button to close lightbox
			$('#poverlay, .close').on('click', function () {
				$('body').css('overflow', 'auto');
				$('#' + target).removeClass('open');
				$('#poverlay').fadeOut(500);
			});
		});
	}());
	
	// tabs functionality
	(function tabs() {
		var tabsNav = $('.tabsnav li a'),
			tabsContainer = $('.tabs');
		// on click, add active class to tab that matches id / href
		tabsNav.click(function (e) {
			e.preventDefault();
			var thisURL = $(this).attr('href').split('#')[1],
				tabContent = tabsContainer.find('#' + thisURL),
				tabParent = $(this).parents('.tabs');
			tabParent.find('.tab').removeClass('active');
			tabParent.find(tabsNav).removeClass('active');
			tabContent.addClass('active');
			$(this).addClass('active');
		});
	}());
	
});
