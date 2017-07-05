(function ($) {
  $(document).ready(function(){
    
    $(".navscroll").hide();
	
	// fade in .navbar
	$(function () {
		$(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar
			if ($(this).scrollTop() > 100) {
				$('.navscroll').fadeIn();
			} else {
				$('.navscroll').fadeOut();
			}
		});


	$(".cupon").hide();	
	$(".agent").hide();	


	$("#coupon").on('click', function(){
      $(".cupon").toggle();
	});//hide coupon

	$("#agent").on('click', function(){
      $(".agent").toggle();
	});//hide coupon
	

	$("#myCarousel").carousel();


	
	}); //document ready

});
  }(jQuery));