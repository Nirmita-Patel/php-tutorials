const init = function() {
    /* ..............................................
	Loader 
    ................................................. */

    $(window).on('load', function() {
        $('.preloader').fadeOut();
        $('#preloader').delay(550).fadeOut('slow');
        $('body').delay(450).css({ 'overflow': 'visible' });
    });

    /* ..............................................
    Fixed Menu
    ................................................. */

    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 50) {
            $('.top-header').addClass('fixed-menu');
        } else {
            $('.top-header').removeClass('fixed-menu');
        }
    });

    /* ..............................................
    Gallery
    ................................................. */

    $('#slides').superslides({
        inherit_width_from: '.cover-slides',
        inherit_height_from: '.cover-slides',
        play: 5000,
        animation: 'fade',
    });

    $(".cover-slides ul li").append("<div class='overlay-background'></div>");

    /* ..............................................
    Map Full
    ................................................. */

    $(document).ready(function() {
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 100) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        $('#back-to-top').click(function() {
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
    });

    /* ..............................................
    Special Menu
    ................................................. */

    var Container = $('.container');
    Container.imagesLoaded(function() {
        var portfolio = $('.special-menu');
        portfolio.on('click', 'button', function() {
            $(this).addClass('active').siblings().removeClass('active');
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });
        var $grid = $('.special-list').isotope({
            itemSelector: '.special-grid'
        });
    });

    /* ..............................................
    BaguetteBox
    ................................................. */

    baguetteBox.run('.tz-gallery', {
        animation: 'fadeIn',
        noScrollbars: true
    });



    /* ..............................................
    Datepicker
    ................................................. */

    $('.datepicker').pickadate();

    $('.time').pickatime();
};
const pageDetail = $('#pageData');
const navLinks = $('.nav-link,.navbar-brand,.dropdown-item');
const ajaxService = function(fetchUrl, success) {
    $.ajax({
        url: fetchUrl,
        method: 'get'
    }).done(success).fail(function() {
        console.log("AJAX CALL ERROR " + fetchUrl);
    });
};
const pageAjaxData = function(result) {
    pageDetail.html('');
    pageDetail.html(result);
    init();
};

(function($) {
    "use strict";
    ajaxService('home.html', pageAjaxData);
    navLinks.click(function() {
        event.preventDefault();
        var href = $(this).attr('href');
        $('li.nav-item').removeClass('active');
        $(this).parent('li.nav-item').addClass('active');
        if (href.indexOf('#') > 0) {
            return;
        } else {
            ajaxService(href, pageAjaxData);
        }
    });
}(jQuery));