/*jslint browser: true*/
/*global $, jQuery, alert, console, Modernizr, Waypoint, ajaxpagination*/

$(document).ready(function () {
	"use strict";
	
	// apply active class to anchors that match current page
	(function addActive() {
		$('a[href^="' + location.pathname.split("/")[2] + '"]').parent('li').addClass('current-menu-item');
	}());
	
	// disables scroll when hovering interior element with overflow scroll
	/*(function disableScroll() {
		$('.past').hover(function () {
			$('body').css('overflow', 'hidden');
		}, function () {
			$('body').css('overflow', 'auto');
		});
	}());*/
	
	
	// init hero slider
	(function initClientSlider() {
		$('.clients .slick').slick({
			infinite: true,
			slidesToShow: 6,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			arrows: false,
			pauseOnHover: false,
			draggable: false,
      responsive: [{
        breakpoint: 960,
        settings: {
          slidesToShow: 4
        }
      }, {
        breakpoint: 580,
        settings: {
          slidesToShow: 3
        }
      }, {
        breakpoint: 480,
        settings: {
          slidesToShow: 2
        }
      }]
		});
	}());
  
	// init testimonial slider
	(function initTestimonialSlider() {
		$('.testimonials .slick').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 8000,
			arrows: false,
			pauseOnHover: true,
			draggable: false,
			dots: true
		});
	}());
  
  // init testimonial slider
	(function initProjectSlider() {
		$('.featured .slick').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
			arrows: true,
			pauseOnHover: true,
			draggable: false,
			dots: false
		});
	}());
  
	
	// subnav scroll to fixed
	(function initScrolltofixed() {
		$('.subnav').scrollToFixed();
    $('.socialshare.desk').scrollToFixed({
      marginTop: 20
    });
	}());
	
	// subnav waypoints
	(function initScrollingSubnav() {
		var subnavBtn = $('.subnav li a, .scrollbtn');
		subnavBtn.on('click', function (e) {
			e.preventDefault();
			// add/remove active class from btn
			subnavBtn.removeClass('active');
			$(this).addClass('active');
			// retrieve href value to match anchor id
			var getHref = $(this).attr('href').split("#"),
				href = getHref[getHref.length - 1];
			$("#" + href).velocity('scroll', 1000);
		});
		$('.contactscroll').on('click', function (e) {
			if ($('.flag').hasClass('home')) {
				e.preventDefault();
				$('#connect').velocity('scroll', 1000);
			}
		});
	}());
  
  (function initAjaxLoad() {
    $('.leader').on('click', function (e) {
      e.preventDefault();
      
      $('#loader').fadeIn(100);
      $('#overlay').fadeIn(100);
      var url = $(this).find('a').attr('href');
      
      $('#team-member .content-holder').load(url + ' .leader', function () {
        $('#team-member').addClass('open');
        $('#loader').fadeOut(100);
        $('body').addClass('noscroll');
        $('#overlay, .close').on('click', function () {
          $('#team-member').removeClass('open');
          $('#overlay').fadeOut(500);
          $('body').removeClass('noscroll');
        });
      });
    });
    
    $('.videogallery .lb').on('click', function (e) {
      e.preventDefault();
      
      $('#loader').fadeIn(100);
      $('#overlay').fadeIn(100);
      var url = $(this).find('a').attr('href');
      
      $('#vgallery .content-holder').load(url + ' .video', function () {
        $('#vgallery').addClass('open');
        $('#loader').fadeOut(100);
        $('body').addClass('noscroll');
        $('#overlay, .close').on('click', function () {
          $('#youtube_player')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
          $('#vgallery').removeClass('open');
          $('#overlay').fadeOut(500);
          $('body').removeClass('noscroll');
        });
      });
    });
  }());
  
  // init mobile menu
  (function mobmenuInit() {
    $('#mobmenu').css('visibility', 'visible');
    $("#mobmenu").mmenu({
      // options
    }, {
      // configuration
      offCanvas: {
        pageNodetype: "section"
      }
    });
    
    // When the browser / device is resized, the menu will close
    var API = $("#mobmenu").data("mmenu");
		$(window).resize(function () {
		  API.close();
		});
  }());
  
	
});
