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
            var $subMenus = $('.menu-item-has-children').children('ul');
            //Handle when the document is clicked
            $(document).unbind().on('click', function(e){
                //Hide the sub-menu
                if($subMenus.css('display') == 'block'){                    
                    $('.icon-up').removeClass('icon-up').addClass('icon-down');
                    $('.menu-item-has-children').children('ul').toggle();
                }

                //Hide the mobile nav
                if($('body').hasClass('mobileNavVisible')){
                    $('body').removeClass('mobileNavVisible');
                }
            });

            //When solutions or the arrow is clicked
            $('.menu-item-has-children').unbind().on('click', function(e){
                e.preventDefault();
                e.stopPropagation();
                var $elm = $(this);
                if($elm.children('ul').css('display') == 'none'){
                    console.log('ok');
                    $elm.children('a').removeClass('icon-down').addClass('icon-up');
                    $elm.children('ul').slideToggle();
                }else{
                    $elm.children('a').removeClass('icon-up').addClass('icon-down');
                    $elm.children('ul').toggle();
                }            
            });

            //Do nothing when sub-menu is clicked
            $subMenus.unbind().on('click', function(e){
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
                if($subMenus.css('display') == 'block'){
                    $('.icon-up').removeClass('icon-up').addClass('icon-down');
                    $subMenus.toggle();
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