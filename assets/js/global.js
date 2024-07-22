// js Document

// Created on   : 14/07/2024.
// Last Update  : 14/07/2024.
// Theme Name   : Shipeh - Landing Page.
// Version      : 1.0.
// Author       : Shipeh.
// Developed by : IMAD GANNOUN


(function($) {
    "use strict";

// Scroll to top
$(window).scroll(function() {
    if ($(this).scrollTop() > 200) {
        $('.go-top').fadeIn(200);
    } else {
        $('.go-top').fadeOut(200);
    }
});

// Animate the scroll to top
$('.go-top').click(function(event) {
    event.preventDefault();

    $('html, body').animate({scrollTop: 0}, 300);
});



})(jQuery);