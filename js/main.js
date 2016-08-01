var navJS = {
	init: function(){
		$(document).unbind().on('click', function(e){
			//Hide the sub nav
			if($('.solutions').hasClass('sub-menu-vis')){
				$('.solutions').removeClass('sub-menu-vis');
				$('.sub-menu').toggle();
			}

			//Hide the mobile nav
			if($('body').hasClass('mobileNavVisible')){
				$('body').removeClass('mobileNavVisible');
			}
		});

		//Set up non-mobile drop down
		$('.solutions').unbind().on('click', function(e){
			e.stopPropagation();
			var $elm = $(this);
			($elm.hasClass('sub-menu-vis')) ? $elm.removeClass('sub-menu-vis') : $elm.addClass('sub-menu-vis');
			$('.sub-menu').toggle();
		});

		//Do nothing when you click on the sub-menu
		$('.sub-menu').unbind().on('click', function(e){
			e.stopPropagation();
		});

		//Do nothing when you click on the mobile nav space
		$('.main-nav ul').unbind().on('click', function(e){
			e.stopPropagation();
		});

		//Show the mobile nav
		$('.mobileNavToggle').unbind().on('click', function(e){
			e.stopPropagation();
			$('body').addClass('mobileNavVisible');
		});

		//Close button
		$('.main-nav ul li:first').unbind().on('click', function(){
			$('body').removeClass('mobileNavVisible');
		});
	}
}

$(function(){
	navJS.init();
});