/**
 * grid.js
 *
 * masonry for
 */

( function( $ ) {
	$(window).load(function() {
		$('.top-page').masonry({
		  itemSelector: '.post'
		});
	});
} )( jQuery );

( function( $ ) {
	$(window).load(function() {
		$('.widget-area').masonry({
		  itemSelector: '.widget'
		});
	});
} )( jQuery );
