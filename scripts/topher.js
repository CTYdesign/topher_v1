console.log('Get Schwifty!');


/* Resize content divs to viewport height */

var clientHeight = $( window ).height();
  $('#clientHero').css('height', 707);

;(function ($) {
    'use strict';
    var $body    = $('html, body'),
        content  = $('#main').smoothState({
            prefetch: true,
            pageCacheSize: 4,
            onStart: {
                duration: 250,
                render: function (url, $container) {
                    content.toggleAnimationClass('is-exiting');
                    $body.animate({
                        scrollTop: 0
                    });
                }
            }
        }).data('smoothState');
})(jQuery);

/* =================
 * Mobile Navigation
 ===================*/

function toggleNav() {
    if ($('.navigation').hasClass('show-nav')) {
        $('.navigation').removeClass('show-nav').addClass('hide-nav');
    } else 
            if ($('.navigation').hasClass('hide-nav')) {
                $('.navigation').removeClass('hide-nav').addClass('show-nav');
            }
            else {
                $('.navigation').addClass('show-nav');
    }
}

$(function() {
    $('.toggle-nav').click(function() {
        toggleNav();
    });
});

$(function() {
$('.nav-trigger').click(function(e) {
  e.preventDefault();
  $('.trigger-top, .trigger-middle, .trigger-bottom').toggleClass('open');
});
});

