(function($){
  $('.menu-toggle').click(function(){

  	if( $(this).hasClass('genericon-menu') ) {

  		$('#menu-primary .wrap').addClass('open');
  		$(this).removeClass('genericon-menu').addClass('genericon-close-alt');

  	} else {

  		$('#menu-primary .wrap').removeClass('open');
  		$(this).removeClass('genericon-close-alt').addClass('genericon-menu');

  	}

  	return false;

  });
})(jQuery);
