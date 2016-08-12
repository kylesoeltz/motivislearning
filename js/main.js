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
        //Handle when the document is clicked
        ( function( $ ) {
            $(document).unbind().on('click', function(e){
                //Hide the sub-menu
                if($('.solutions').hasClass('sub-menu-vis')){
                    $('.solutions').removeClass('sub-menu-vis');
                    $('.icon-up').removeClass('icon-up').addClass('icon-down');
                    $('.sub-menu').toggle();
                }

                //Hide the mobile nav
                if($('body').hasClass('mobileNavVisible')){
                    $('body').removeClass('mobileNavVisible');
                }
            });

            //When solutions or the arrow is clicked
            $('.solutions').unbind().on('click', function(e){
                e.preventDefault();
                e.stopPropagation();
                var $elm = $(this);
                if($elm.hasClass('sub-menu-vis')){
                    $elm.removeClass('sub-menu-vis');
                    $('.icon-up').removeClass('icon-up').addClass('icon-down');
                    $('.sub-menu').toggle();
                }else{
                    $('.icon-down').removeClass('icon-down').addClass('icon-up');
                    $elm.addClass('sub-menu-vis');
                    $('.sub-menu').slideToggle();
                }            
            });

            //Do nothing when sub-menu is clicked
            $('.sub-menu').unbind().on('click', function(e){
                e.stopPropagation();
            });

            //Show the mobile nav
            $('.mobileNavToggle').unbind().on('click', function(e){
                e.stopPropagation();
                $('body').addClass('mobileNavVisible');
            });

            //Do nothing when mobile nav is clicked
            $('.main-nav ul').unbind().on('click', function(e){
                e.stopPropagation();
            });

            //Close menu when close is clicked
            $('.main-nav li:first').unbind().on('click', function(e){
                e.stopPropagation();
                $('body').removeClass('mobileNavVisible');
                if($('.solutions').hasClass('sub-menu-vis')){
                    $('.solutions').removeClass('sub-menu-vis');
                    $('.icon-up').removeClass('icon-up').addClass('icon-down');
                    $('.sub-menu').toggle();
                }
            });
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