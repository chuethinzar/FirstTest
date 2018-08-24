/**
 * customizer.js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );
	// Header background color.
	wp.customize( 'themename_menu_bgcolor', function( value ) {
		value.bind( function( newval ) {
			$( '.site .header-menu ul li a' ).css({'background-color': newval});
			$( '.site-main-single .post .widget.widget-related-post' ).css({'background-color': newval});
		} );
	} );
	wp.customize( 'themename_menu_textcolor', function( value ) {
		value.bind( function( newval ) {
			$( '.site .header-menu ul li a' ).css({'color': newval});
			$( '.widget_posts h2' ).css({'color': newval});
		$( '.widget_posts .widget-list li p' ).css({'color': newval});
		$( '.site .site-content .content-area .site-main .top-page .post .entry-header h2 a' ).css({'color': newval});
		$( '.site .site-content .content-area .site-main .top-page .post .entry-summary' ).css({'color': newval});
		$( '.site .site-content .content-area .site-main .top-page .post .entry-footer' ).css({'color': newval});
		$( '.site .site-content .content-area .site-main .top-page .post .entry-footer a' ).css({'color': newval});
		$( '.site-content .pagination .nav-links .page-numbers' ).css({'color': newval});
		$( '.widget-area .widget .widget-title' ).css({'color': newval});
		$( '.widget-area .widget ul li a' ).css({'color': newval});
		$( '.widget-area .widget a' ).css({'color': newval});
		$( '.site-footer .site-info h2' ).css({'color': newval});
		$( '.site-main-single .page .page-header .page-title' ).css({'color': newval});
		$( '.site-main-single .page .page-content ol li' ).css({'color': newval});
		$( '.site-main-single .page .page-content a' ).css({'color': newval});
		$( '.site-main-single .page .page-content h2' ).css({'color': newval});
		$( '.site-main-single .page .page-content p' ).css({'color': newval});
		$( '.site-main-single .post .entry-header h2' ).css({'color': newval});
		$( '.site-main-single .post .entry-header .entry-meta' ).css({'color': newval});
		$( '.site-main-single .post .entry-content' ).css({'color': newval});
		$( '.site-main-single .post .post-navigation a' ).css({'color': newval});
		$( '.site-main-single .post .widget.widget-related-post a' ).css({'color': newval});
		$( '.site-main-single .post .widget.widget-related-post .widget-title' ).css({'color': newval});
		$( '.site-main-archive .top-page .post .entry-header a' ).css({'color': newval});
		$( '.site-main-archive .top-page .post .entry-summary' ).css({'color': newval});
		$( '.site-main-archive .top-page .post .entry-footer a' ).css({'color': newval});
		} );
	} );
	wp.customize( 'themename_theme_bgcolor', function( value ) {
		value.bind( function( newval ) {
			$( '.widget_posts h2' ).css({'background-color': newval});
			$( '.widget_posts .widget-list li' ).css({'background-color': newval});
			$( '.site .site-content .content-area .site-main .top-page .post' ).css({'background-color': newval});
			$( '.widget-area .widget' ).css({'background-color': newval});
			$( '.site-content .pagination .nav-links .page-numbers.current' ).css({'background-color': newval});
			$( '.pagetop' ).css({'background-color': newval});
			$( '.site-footer .site-info' ).css({'background-color': newval});
			$( '.site-main-single .page' ).css({'background-color': newval});
			$( '.site-main-single .post' ).css({'background-color': newval});
			$( '.site-main-archive .top-page .post' ).css({'background-color': newval});
		} );
	} );

	// Widget Title Font-awesome
	wp.customize( 'themename_widget_title_fontawesome', function( value ) {
		value.bind( function( newval ) {
			var val = "\\" + newval;
			$('<style>.widget .widget-title::before{content:"' + val + '" !important}</style>').appendTo('head');
		} );
	} );
	// Widget List Font-awesome
	wp.customize( 'themename_widget_list_fontawesome', function( value ) {
		value.bind( function( newval ) {
			var val = "\\" + newval;
			$('<style>.widget ul li::before{content:"' + val + '" !important}</style>').appendTo('head');
		} );
	} );
} )( jQuery );
