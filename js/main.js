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
        youtubeJS.init();
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
                $('.secondary-nav').before('<div style="height:0px;" class="secondary-nav-placeholder"></div>');
                $('.secondary-nav').show();
            }

            //Handle the sticky secondary nav
            $(window).on('scroll', function(e){
                var calculatedHeight = $('.nav-header').outerHeight() + $('.page-header').outerHeight();
                var $elm = $('.secondary-nav');
                var isPositionFixed = ($elm.css('position') == 'fixed');

                if($(this).scrollTop() > calculatedHeight && !isPositionFixed) {
                    $($elm).addClass('fixed-secondary-nav');
                    $('.secondary-nav-placeholder').css("height", $elm.outerHeight());
                }
                if($(this).scrollTop() < calculatedHeight && isPositionFixed) {
                    $($elm).removeClass('fixed-secondary-nav');
                    $('.secondary-nav-placeholder').css("height", "0");
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
            $('.tag-select').on('change', 'select', function(e) {
                var tagUrl = '/insights/tag/' + $(this).val();
                $(this).parents('form').attr('action', tagUrl).find('input[type=submit]').click();
            });
            $('.category-select').on('change', 'select', function(e) {
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

//Section 5: Responsive Youtube Videos
var youtubeJS = {
    init: function(){
        ( function( $ ) {
            $(document).ready( function(){
                // Find all YouTube videos
                var $allVideos = $('iframe[src*="youtube.com"]');
                // Figure out and save aspect ratio for each video
                $allVideos.each(function() {
                  $(this)
                    .data('aspectRatio', this.height / this.width)
                    // and remove the hard coded width/height
                    .removeAttr('height')
                    .removeAttr('width');
                });
                // When the window is resized
                $(window).resize(function() {
                  // Resize all videos according to their own aspect ratio
                  $allVideos.each(function() {
                    var newWidth = $(this).parent().width();
                    var $el = $(this);
                    $el
                      .width(newWidth)
                      .height(newWidth * $el.data('aspectRatio'));
                  });
                // Kick off one resize to fix all videos on page load
                }).resize();
            });
        } )( jQuery );
    }
}



//Section ?
jQuery(function(){
    mainJS.init();
});

