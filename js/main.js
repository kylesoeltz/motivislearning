/*-----
    TOC:
        Section 1: Global/Nav
    -----*/

$(document).ready(function () {
	//mobile nav
	$(document).on('click', function(){
		if ($('body').hasClass('mobileNavVisible')) {
	        if (!$(event.target).closest('button.mobileNavToggle').length
	        	&& !$(event.target).closest('nav.main-nav ul').length
	        	&& !$(event.target).closest('nav.main-nav form.search').length
	        	&& !$(event.target).closest('nav.main-nav a.btn-solid-orange').length
	        	) {
				$('body').removeClass('mobileNavVisible');
			}
		}
	});

	$('.mobileNavToggle').on('click', function(){
		$('body').toggleClass('mobileNavVisible');
	});

});
