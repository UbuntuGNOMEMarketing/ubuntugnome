(function($){
  jQuery( window ).resize(
		function() {
			var width = jQuery( window ).width();

			if ( 980 <= width ) {
        jQuery( '#menu-primary > .wrap' ).fadeIn();
				//jQuery( '.menu-toggle' ).removeClass( 'active' )
			} else {
        jQuery( '#menu-primary > .wrap' ).hide();
				//jQuery( '.menu > .wrap:visible' ).parent().children( '.menu-toggle' ).addClass( 'active' );
			}
		}
	);
})(jQuery);
