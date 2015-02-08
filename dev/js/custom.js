/*! 
Custom Script
*/
(function($){
    $(function(){
	
		var $screenSize = 600,
			$menuLink = $('.menu-button'),
			$body = $('body');

			mobile();
			easeScroll();

		//=============//
		//= FUNCTIONS =//
		//=============// 

		function mobile() {
			//Nav-Button 
			$menuLink.on('click', function(e) {
				$body.toggleClass('nav-open');
				e.preventDefault();
			});
			}
			//Window resize
			$(window).resize(function(){
				if($(this).innerWidth()  >= $screenSize) {
					$body.removeClass('nav-open');
				}
			});
		
		function easeScroll() {
			//Animate Scroll
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html,body').animate({
						scrollTop: target.offset().top
					}, 500);
					return false;
					}
				}
			});

			//Highlight Menu
			$(window).scroll(function (event) {
				var inview = '#' + $('section > .frame:in-viewport:first').siblings('.anchor').attr('id'),
					$link = $('.main-nav a').filter('[href=' + inview + ']');
				if (inview && $link.length && !$link.is('.active')) {
					console.log(inview);
					$('.main-nav a').removeClass('active');
					$link.addClass('active');
				}
			});
	
		}


    });
})(jQuery);


