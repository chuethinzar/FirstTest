<?php
/**
 * scm_test Theme Customizer.
 *
 * @package scm_test
 */

if ( ! function_exists( 'scm_test_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog
	 *
	 * @see scm_test_custom_header_setup().
	 */
	function scm_test_style() {
		// Theme color
		$theme_text_color = get_header_textcolor();
		$body_bg_color = get_background_color();
		$theme_bgcolor1 = get_theme_mod( 'themename_menu_bgcolor' );
		$theme_textcolor1 = get_theme_mod( 'themename_menu_textcolor' );
		$theme_bgcolor2 = get_theme_mod( 'themename_theme_bgcolor' );
		$widget_title_fontawesome = get_theme_mod( 'themename_widget_title_fontawesome' );
		$widget_list_fontawesome = get_theme_mod( 'themename_widget_list_fontawesome' );
		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
	 		// Has the text been hidden?
	 		if ( 'blank' === $theme_text_color ) :
	 	?>
	 		.site-title,
	 		.site-description {
	 			position: absolute;
	 			clip: rect(1px, 1px, 1px, 1px);
	 		}
	 	<?php
	 		// If the user has set a custom color for the text use that.
	 		else :
	 	?>
	 		.site-title a,
	 		.site-description {
	 			color: #<?php echo esc_attr( $theme_text_color ); ?>;
	 		}
	 	<?php endif; ?>
			body,
			.site .site-header{
				background-color: #<?php echo esc_attr( $body_bg_color ); ?>
			}
			.site .header-menu ul li a,
			.site-main-single .post .widget.widget-related-post{
				background-color: <?php echo esc_attr( $theme_bgcolor1 ); ?>;
			}
			.site .header-menu ul li a{
				color: <?php echo esc_attr( $theme_textcolor1 ); ?>;
			}
			.widget_posts h2,
			.widget_posts .widget-list li,
			.site .site-content .content-area .site-main .top-page .post,
			.widget-area .widget,
			.site-content .pagination .nav-links .page-numbers.current,
			.pagetop,
			.site-footer .site-info,
			.site-main-single .page,
			.site-main-archive .top-page .post,
			.site-main-single .post{
				background-color: <?php echo esc_attr( $theme_bgcolor2 ); ?>;
			}
			.site-description,
			.widget_posts h2,
			.widget_posts .widget-list li p,
			.site .site-content .content-area .site-main .top-page .post .entry-header h2 a,
			.site .site-content .content-area .site-main .top-page .post .entry-summary,
			.site .site-content .content-area .site-main .top-page .post .entry-footer,
			.site .site-content .content-area .site-main .top-page .post .entry-footer a,
			.site-content .pagination .nav-links .page-numbers,
			.widget-area .widget .widget-title,
			.widget-area .widget ul li a,
			.widget-area .widget a,
			.site-footer .site-info h2,
			.site-main-single .page .page-header .page-title,
			.site-main-single .page .page-content ol li,
			.site-main-single .page .page-content a,
			.site-main-single .page .page-content h2,
			.site-main-single .page .page-content p,
			.site-main-single .post .entry-header h2,
			.site-main-single .post .entry-header .entry-meta,
			.site-main-single .post .entry-content,
			.site-main-single .post .post-navigation a,
			.site-main-single .post .widget.widget-related-post a,
			.site-main-single .post .widget.widget-related-post .widget-title,
			.site-main-archive .top-page .post .entry-header a,
			.site-main-archive .top-page .post .entry-summary,
			.site-main-archive .top-page .post .entry-footer a{
				color: <?php echo esc_attr( $theme_text_color ); ?>;
			}

		</style>
		<?php
	}
endif; // scm_test_style

if ( ! function_exists( 'scm_test_admin_header_style' ) ) :
/**
	 * Styles the header image displayed on the Appearance > Header admin panel.
	 *
	 * @see scm_test_custom_header_setup().
	 */
	function scm_test_admin_header_style() {
	?>
		<style type="text/css">
			.appearance_page_custom-header #headimg {
				border: none;
			}
			#headimg h1,
			#desc {
			}
			#headimg h1 {
			}
			#headimg h1 a {
			}
			#desc {
			}
			#headimg img {
			}
		</style>
	<?php
	}
endif; // scm_test_admin_header_style

if ( ! function_exists( 'scm_test_admin_header_image' ) ) :
	/**
	 * Custom header image markup displayed on the Appearance > Header admin panel.
	 *
	 * @see scm_test_custom_header_setup().
	 */
	function scm_test_admin_header_image() {
	?>
		<div id="headimg">
			<h1 class="displaying-header-text">
				<a id="name" style="<?php echo esc_attr( 'color: #' . get_header_textcolor() ); ?>" onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</h1>
			<div class="displaying-header-text" id="desc" style="<?php echo esc_attr( 'color: #' . get_header_textcolor() ); ?>"><?php bloginfo( 'description' ); ?></div>
			<?php if ( get_header_image() ) : ?>
			<img src="<?php header_image(); ?>" alt="">
			<?php endif; ?>
		</div>
	<?php
	}
endif; // scm_test_admin_header_image

if ( ! function_exists( 'themename_get_option' ) ) :
	function themename_get_option( $themename_name, $themename_default = false ) {
	$themename_config = get_option( 'themename' );

	if ( ! isset( $themename_config ) ) :
		return $sthemename_default;
	else:
		$themename_options = $themename_config;
	endif;
	if ( isset( $themename_options[$themename_name] ) ):
		return $themename_options[$themename_name];
	else:
		return $themename_default;
	endif;
	}
	endif;

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function themename_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport                      = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport               = 'postMessage';
}
add_action( 'customize_register', 'themename_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function scm_test_customize_preview_js() {
	wp_enqueue_script( 'scm_test_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'scm_test_customize_preview_js' );
?>
