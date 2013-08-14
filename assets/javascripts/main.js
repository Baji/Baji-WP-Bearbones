$(document).ready(function(){
	$('body').addClass('js');
	
	// global vars
	var header = $('.hero');
	var HeaderWrap = $('.hero-title');
	var windowScroll;

	$(window).scroll(function(){
		headingParallax();
	});
				
				
	function headingParallax() {
		// how much have we scrolled?
		windowScroll = $(window).scrollTop();

		// parallax then fade out
		HeaderWrap.css({
		'margin-top' : -(windowScroll/3)+"px",
			'opacity' : 1-(windowScroll/350)
		});
	}



	// navigation
	var menu = $('#menu'),
		menuLink = $('#menu > ul > li.has-dd');

	$(menuLink).hover(function(){
		$(this).addClass('is-active');
		$(this).find('ul.sub-dd').removeClass('is-hidden').addClass('is-active');
	}, function(){
		$(this).removeClass('is-active');
		$(this).find('ul.sub-dd').removeClass('is-active').addClass('is-hidden');
	});



	// responsive navigation panel
	var $menu = $('#menu'),
    $menulink = $('.menu-link'),
    $wrap = $('#wrap'),
    $subDDLink = $('.has-dd');
    
    $menulink.click(function() {
    	$menulink.toggleClass('active');
    	$wrap.toggleClass('active');
    	return false;
	});

});