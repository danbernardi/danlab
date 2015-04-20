/*jslint browser: true*/
/*global $, jQuery, alert, console, Modernizr, Waypoint*/
var j$ = jQuery.noConflict();

j$(document).ready(function () {
	"use strict";
	
	// apply active class to anchors that match current page
	(function addActive() {
		j$('header #on-canvas-menu li').on('click', function () {
      j$('header #on-canvas-menu li').removeClass('current-menu-item');
      j$(this).addClass('current-menu-item');
    });
	}());
	
	
	(function onCanvasMenu() {
		j$("#on-canvas-menu").mmenu({
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
  
  (function disableAjax() {
    j$('li.no-ajaxy > a').addClass('no-ajaxy');
  }());
  
  (function getMenuHTML() {
    var getEl = j$('.add-html').find('a').attr('data-target'),
      getImg = j$('.aboutme-holder').attr('data-img'),
      getText = j$('.aboutme-holder').attr('data-text'),
      constHTML = '';
    
    if (getImg !== undefined && getText !== undefined) {
      constHTML = '<img src="' + getImg + '"><p class="bio">' + getText + '</p>';
      j$(getEl).find('.mm-listview').prepend(constHTML);
    } else if (getImg !== undefined) {
      constHTML = '<img src="' + getImg + '">';
      j$(getEl).find('.mm-listview').prepend(constHTML);
    } else if (getText !== undefined) {
      constHTML = '<p class="bio">' + getText + '</p>';
      j$(getEl).find('.mm-listview').prepend(constHTML);
    } else {
      return false;
    }
  }());
});
