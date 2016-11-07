jQuery(document).ready(function() {
	var activityIndicatorOn = function() {
		jQuery( '<div id="imagelightbox-loading"></div>' ).appendTo( 'body' );
	}
	
	activityIndicatorOff = function() {
		jQuery( '#imagelightbox-loading' ).addClass('loaded');
		setTimeout(function(){
			jQuery( '#imagelightbox-loading' ).remove();
		}, 250);
	}
	
	overlayOn = function() {
		jQuery( '<div id="imagelightbox-overlay"></div>' ).appendTo( 'body' );
	}
	
	overlayOff = function() {
		jQuery( '#imagelightbox-overlay' ).remove();
	}
	
	closeButtonOn = function( instance ) {
		jQuery( '<button type="button" id="imagelightbox-close" title="Close">X</button>' ).appendTo( 'body' ).on( 'click touchend', function(){ jQuery( this ).remove(); instance.quitImageLightbox(); return false; });
	}
	
	closeButtonOff = function() {
		jQuery( '#imagelightbox-close' ).remove();
	}
	
	captionOn = function() {
		var description = jQuery( 'a[href="' + jQuery( '#imagelightbox' ).attr( 'src' ) + '"] img' ).attr( 'alt' );
		if( description.length > 0 ) {
				jQuery( '<div id="imagelightbox-caption">' + description + '</div>' ).appendTo( 'body' );
		}
	}
	
	captionOff = function() {
		jQuery( '#imagelightbox-caption' ).remove();
	}
	
	var selectorA = 'a[data-imagelightbox="a"]';
	var instanceA = jQuery(selectorA).imageLightbox({
		onLoadStart: function() { activityIndicatorOn(); captionOff(); },
		onLoadEnd:	 function() { activityIndicatorOff(); captionOn(); },
		onStart: function() { overlayOn(); closeButtonOn(instanceA) },
		onEnd: function() { overlayOff(); closeButtonOff(); captionOff();}
	});
});