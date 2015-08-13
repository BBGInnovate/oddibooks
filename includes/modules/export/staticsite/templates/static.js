jQuery( document ).ready( function( $ ) {
	$( document ).keydown( function( e ) {
		var url = false;
		if ( e.which == 37 ) {  // Left arrow key code
			url = $( 'a.previous' ).attr( 'href' );
		}
		else if ( e.which == 39 ) {  // Right arrow key code
			url = $( 'a.next' ).attr( 'href' );
		}
		if ( url && ( !$( 'textarea, input' ).is( ':focus' ) ) ) {
			window.location = url;
		}
	} );

	jQuery('#toc').hide();
	jQuery('.toc-btn a, a.close').on('click', function() {
		if(jQuery('#toc').css('display') == 'none') {
			jQuery('.toc-btn a').addClass('tabbed');
			jQuery('.toc-btn').addClass('bg-color');
			jQuery('#toc').toggle({ duration:200 });
			return false;
		} else {
			jQuery('.toc-btn a').removeClass('tabbed');
			jQuery('.toc-btn').removeClass('bg-color');
			jQuery('#toc').toggle({ duration:100 });
			return false;
		}
	});

	/* Sit footer at bottom of page 			
	if(i="msie" && jQuery.browser.version.substr(0,3)=="7.0") {
	} else {
		var height = jQuery(window).height() - jQuery(".sticky").height() - jQuery(".footer").height();
		jQuery(".wrapper").css("min-height", height - 190);
		jQuery(".wrapper #wrap").css("min-height", height - 140);
	} */



} );