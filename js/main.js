'use strict';

var navJS = {
    init: function(){
        //Handle when the document is clicked
        $(document).unbind().on('click', function(e){
            //Hide the sub-menu
            if($('.solutions').hasClass('sub-menu-vis')){
                $('.solutions').removeClass('sub-menu-vis');
                $('.sub-menu, .fa-down, .fa-up').toggle();
            }

            //Hide the mobile nav
            if($('body').hasClass('mobileNavVisible')){
                $('body').removeClass('mobileNavVisible');
            }
        });

        //When solutions or the arrow is clicked
        $('.solutions').unbind().on('click', function(e){
            e.stopPropagation();
            var $elm = $(this);
            ($elm.hasClass('sub-menu-vis')) ? $elm.removeClass('sub-menu-vis') : $elm.addClass('sub-menu-vis');
            $('.sub-menu').slideToggle();
            $('.fa-down, .fa-up').toggle();
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
                $('.sub-menu, .fa-down, .fa-up').toggle();
            }
        });
    }
}

$(function(){
    navJS.init();
});