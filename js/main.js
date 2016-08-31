'use strict';

/*
 * TOC:
 *    Section 1: Page load JS
 *    Section 2: Navigation JS
 *    Section 3: Footer JS
 *    Section 4: Category and selectpicker
 *    Section 5: Animations
 *    Section ?: On Ready
 */

//Section 1: Page load JS
var mainJS = {
    init: function(){
        navJS.init();
        footerJS.init();
        categoryFilterJS.init();
        animationsJS.init();
    }
}

//Section 2: Navigation JS
var navJS = {
    init: function(){
        ( function( $ ) {
            //On document click
            $(document).on('click', function(e){
                $('.sub-menu-vis').removeClass('sub-menu-vis').children('ul').toggle();
                $('.icon-up').removeClass();
                $('.mobileNavVisible').removeClass('mobileNavVisible');
            });

            //Toggle the sub-menu when link is clicked
            $('.menu-item-464').on('click', function(e){
                e.preventDefault();
                e.stopPropagation();
                var $elm = $(this);
                $elm.children('a').toggleClass('icon-up');
                $elm.hasClass('sub-menu-vis') ? $elm.removeClass('sub-menu-vis').children('ul').toggle() : $elm.addClass('sub-menu-vis').children('ul').slideToggle(200);
            });

            //Show mobile nav when toggle is clicked
            $('.mobileNavToggle').on('click', function(e){
                e.stopPropagation();
                $('body').addClass('mobileNavVisible');
            });

            //Do nothing when sub-menu is clicked
            $('.sub-menu').on('click', function(e){
                e.stopPropagation();
            });

            //Close menu when close is clicked
            $('.main-nav li:first').on('click', function(e){
                e.stopPropagation();
                $('.mobileNavVisible').removeClass('mobileNavVisible');
                $('.sub-menu-vis').removeClass('sub-menu-vis').children('ul').toggle();
                $('.icon-up').removeClass();
            });

            //Do nothing when mobile nav is clicked
            $('.main-nav ul').on('click', function(e){
                e.stopPropagation();
            });

            // show page subnav only if this page is a child of main nav
            if($('.secondary-nav .current_page_ancestor').length > 0){
                $('.secondary-nav').show();
            }

            //Handle the sticky secondary nav
            $(window).on('scroll', function(e){
                var calculatedHeight = $('.nav-header').outerHeight() + $('.page-header').outerHeight();
                var $elm = $('.secondary-nav');
                var isPositionFixed = ($elm.css('position') == 'fixed');

                if($(this).scrollTop() > calculatedHeight && !isPositionFixed) {
                    $($elm).addClass('fixed-secondary-nav');
                }
                if($(this).scrollTop() < calculatedHeight && isPositionFixed) {
                    $($elm).removeClass('fixed-secondary-nav');
                }
            });
        } )( jQuery );
    }
}

//Section 3: Footer JS
var footerJS = {
    init: function(){
        ( function( $ ) {
            $('.matchHeight').matchHeight();
        } )( jQuery );
    }
}

//Section 4: Category and selectpicker
var categoryFilterJS = {
    init: function(){
        ( function( $ ) {
            $('.selectpicker select').selectpicker();
            $('.selectpicker').on('change', 'select', function(e) {
                $(this).parents('form').find('input[type=submit]').click();
            });
        } )( jQuery );
    }
}

//Section 5: Animations
var animationsJS = {
    init: function(){
        ( function( $ ) {
            $(window).scroll(function(){
                fadeInObject();
            });
            $(document).on('ready', function(){
                fadeInObject();
            });
            function fadeInObject() {
                var scrollBottom = $(window).scrollTop() + $(window).height();
                $('.scroll-fade').each(function(){
                    if (scrollBottom > $(this).offset().top) {
                        $(this).addClass('fade-in')
                    }
                });
            }
        } )( jQuery );
    }
}




//Section ?
jQuery(function(){
    mainJS.init();
});

