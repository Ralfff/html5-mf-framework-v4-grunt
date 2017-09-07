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
				$body.toggleClass('nav_is_open');
				e.preventDefault();
			});
			}

		
		function easeScroll() {
			//Animate Scroll
			$('a[href*=\\#]:not([href=\\#])').click(function() {
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

		//Function Trigger Interval 
		function debouncer( func , timeout ) {
			var timeoutID , timeout = timeout || 200;
			return function () {
				var scope = this , args = arguments;
				clearTimeout( timeoutID );
				timeoutID = setTimeout( function () {
					func.apply( scope , Array.prototype.slice.call( args ) );
				} , timeout );
			};
		}

		//Debounce resizing Interval 
		$( window ).resize( debouncer( function ( e ) {
			if($(this).innerWidth()  >= $screenSize) {
				$body.removeClass('nav_is_open');
			}
		}, 200)
		);


    });
})(jQuery);


