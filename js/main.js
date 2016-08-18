'use strict';

/*
 * TOC:
 *    Section 1: Page load JS
 *    Section 2: Navigation JS
 *    Section 3: Footer JS
 *    Section ?: On Ready
 */

//Section 1
var mainJS = {
    init: function(){
        navJS.init();
        footerJS.init();
    }
}

//Section 2
var navJS = {
    init: function(){        
        ( function( $ ) {
            //On document click
            $(document).unbind().on('click', function(e){
                $('.sub-menu-vis').removeClass('sub-menu-vis').children('ul').toggle();
                $('.icon-up').removeClass();               
                $('.mobileNavVisible').removeClass('mobileNavVisible');
            });

            //Toggle the sub-menu when link is clicked
            $('.menu-item-has-children').first().unbind().on('click', function(e){
                e.preventDefault();
                e.stopPropagation();
                var $elm = $(this);
                $elm.children('a').toggleClass('icon-up');
                $elm.hasClass('sub-menu-vis') ? $elm.removeClass('sub-menu-vis').children('ul').toggle() : $elm.addClass('sub-menu-vis').children('ul').slideToggle();
            });

            //Show mobile nav when toggle is clicked
            $('.mobileNavToggle').unbind().on('click', function(e){
                e.stopPropagation();
                $('body').addClass('mobileNavVisible');
            });

            //Do nothing when sub-menu is clicked
            $('.sub-menu').unbind().on('click', function(e){
                e.stopPropagation();    
            });

            //Close menu when close is clicked
            $('.main-nav li:first').unbind().on('click', function(e){
                e.stopPropagation();
                $('.mobileNavVisible').removeClass('mobileNavVisible');
                $('.sub-menu-vis').removeClass('sub-menu-vis').children('ul').toggle();
                $('.icon-up').removeClass();
            });

            //Do nothing when mobile nav is clicked
            $('.main-nav ul').unbind().on('click', function(e){
                e.stopPropagation();
            });

            // show page subnav only if this page is a child of main nav
            if($('.secondary-nav .current_page_ancestor').length > 0){
                $('.secondary-nav').show();
            }
        } )( jQuery );
    }
}

//Section 3
var footerJS = {
    init: function(){
        ( function( $ ) {
            $('.matchHeight').matchHeight();
        } )( jQuery );
    }
}

//Section ?
jQuery(function(){
    mainJS.init();
});