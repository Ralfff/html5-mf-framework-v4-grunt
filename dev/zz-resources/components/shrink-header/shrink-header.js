//Highlight Menu
	$(window).scroll(function (event) {
		//Animate Shrink Header
		var scroll = $(window).scrollTop();
		if (scroll > 200) {
			$('.logo-container').addClass('slide-up');
		} else {
			$('.logo-container').removeClass('slide-up');
		}
	});