(function($){
  jQuery( window ).resize(
		function() {
			var width = jQuery( window ).width();

			if ( 980 <= width ) {
        jQuery( '.menu > .wrap' ).fadeIn();
				//jQuery( '.menu-toggle' ).removeClass( 'active' )
			} else {
        jQuery( '.menu > .wrap' ).hide();
				//jQuery( '.menu > .wrap:visible' ).parent().children( '.menu-toggle' ).addClass( 'active' );
			}
		}
	);
})(jQuery);
