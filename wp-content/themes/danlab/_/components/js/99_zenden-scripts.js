/*jslint browser: true*/
/*global $, jQuery, alert, console, Modernizr, Waypoint*/

$(document).ready(function () {
	"use strict";
	
	// apply active class to anchors that match current page
	(function addActive() {
		$('a[href^="' + location.pathname.split("/")[2] + '"]').parent('li').addClass('current-menu-item');
	}());
	
	
	(function onCanvasMenu() {
		$("#on-canvas-menu").mmenu({
      // options
      offCanvas: false,
      slidingSubmenus: true
    }, {
         // configuration
      offCanvas: {
        pageNodetype: "section"
      }
    });
	}());
});
