$(document).ready(function(){
	
	$('a[href^="#"]').on('click',function (e) {
		e.preventDefault();

		var target = this.hash,
		$target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 900, 'swing', function () {
			window.location.hash = target;
		});
	});

	$(window).scroll(function(){
		var vph = $(window).height();
		if  ($(window).scrollTop() >= vph){
			$('#bars').css({position:'fixed',top:0,width:'100%'});
		} else {
			$('#bars').css({position:'relative'});
		}
	});

	var owl = $("#owl-demo");
 
  owl.owlCarousel({
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1000,5], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });

});