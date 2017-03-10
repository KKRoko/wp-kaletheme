

jQuery(function($) {
  	$('.nav-icon3').click(function(){
  		$(this).toggleClass('open');
  	});
    $(".nav-icon3").click(function () {
      $("#primary-menu").slideToggle(500,"swing");
    });

});
