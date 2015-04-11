/*jslint browser: true*/
/*global $, jQuery, alert, console, Modernizr, Waypoint*/

$(document).ready(function () {
	"use strict";
	
	// apply active class to anchors that match current page
	(function addActive() {
		$('a[href^="' + location.pathname.split("/")[2] + '"]').parent('li').addClass('current-menu-item');
	}());
	
	
	(function offCanvasMenu() {
		$('.offCanvas-trigger').on('click', function (e) {
			e.preventDefault();
			$('body').toggleClass('offCanvas-open');
		});
		$('body.offCanvas-open .content').on('click', function (e) {
			$('body').removeClass('offCanvas-open');
		});
	}());
});
