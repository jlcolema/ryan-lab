<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file.
* Wordpress will use those functions instead of the original functions then.
*/

/*Replaces "Blog - Latest News" with the post title :*/

add_filter('avf_title_args', 'fix_single_post_title', 10, 2);
function fix_single_post_title($args,$id)
{
	if ( $args['title'] == 'Blog - Latest News' )
	{
		$args['title'] = get_the_title($id);
		$args['link'] = get_permalink($id);
		$args['heading'] = 'h1';
	}

	return $args;
}

/* ADDS FULL WIDTH BANNER ATOP ALL PAGES - OR INTERIOR ONLY */
function after_head_image_func($content){
	if ( !is_home() && !is_front_page() ) {
		//echo "<div  align='center'><img class='avia_image' src='/wp-content/uploads/2015/12/maize-breeding-statistical-genetics-logo-1500-wide-cropped-centered-e5cc00.png' width='100%' /></div>";
	}
}
add_action('ava_after_main_container', 'after_head_image_func');

	/*------------------------------------*\
	   Ryan Lab Color Scheme
	\*------------------------------------*/

	// Notes...

	add_filter( 'avf_skin_options', 'ryan_lab_color_scheme' );

	function ryan_lab_color_scheme( $styles = "" ) {

		$styles["Ryan Lab"] = array(

			/* Color Scheme
			--------------------------------------*/

			// Name of scheme within list of choices

			'color_scheme'                          => 'Ryan Lab',

			/* Title
			--------------------------------------*/

			'style'                                 => 'color: #ffffff; background-color: #1572b8;',

			/* Fonts
			--------------------------------------*/

			'default_font'                          => 'Open Sans:400,600',
			'google_webfont'                        => 'Merriweather:300,400,700',

			/* Header (Logo Area)
			--------------------------------------*/

			// Background color
			'colorset-header_color-bg'              => '#ffffff',

			// Alternate background color
			'colorset-header_color-bg2'             => '#ffffff',

			// Primary color
			'colorset-header_color-primary'         => '#1b79b7',

			// Hightlight color
			'colorset-header_color-secondary'       => '#1b79b7',

			// Font color
			'colorset-header_color-color'           => '#000000',

			// Secondary font color
			'colorset-header_color-meta'            => '#000000',

			// Heading color
			'colorset-header_color-heading'         => '#000000',

			// Border color
			'colorset-header_color-border'          => '#ffffff',

			// Background image
			'colorset-header_color-img'             => '',

			// Custom background image
			'colorset-header_color-customimage'     => '',

			// Position of the image
			'colorset-header_color-pos'             => 'center center',

			// Repeat
			'colorset-header_color-repeat'          => 'repeat',

			// Attachment
			'colorset-header_color-attach'          => 'scroll',

			/* Main
			--------------------------------------*/

			// Background color
			'colorset-main_color-bg'                => '#ffffff',

			// Alternate background color
			'colorset-main_color-bg2'               => '#ffffff',

			// Primary color
			'colorset-main_color-primary'           => '#1b79b7',

			// Highlight color
			'colorset-main_color-secondary'         => '#1b79b7',

			// Font color
			'colorset-main_color-color'             => '#000000',

			// Secondary font color
			'colorset-main_color-meta'              => '#000000',

			// Heading color
			'colorset-main_color-heading'           => '#000000',

			// Border color
			'colorset-main_color-border'            => '#ffffff',

			// Background image
			'colorset-main_color-img'               => '',

			// Custom background image
			'colorset-main_color-customimage'       => '',

			// Position of the image
			'colorset-main_color-pos'               => 'center center',

			// Repeat
			'colorset-main_color-repeat'            => 'repeat',

			// Attachment
			'colorset-main_color-attach'            => 'scroll',


			/* Alternate
			--------------------------------------*/

			// Background color
			'colorset-alternate_color-bg'           => '#ffffff',

			// Alternate background color
			'colorset-alternate_color-bg2'          => '#ffffff',

			// Primary color
			'colorset-alternate_color-primary'      => '#1b79b7',

			// Highlight color
			'colorset-alternate_color-secondary'    => '#1b79b7',

			// Font color
			'colorset-alternate_color-color'        => '#000000',

			// Secondary font color
			'colorset-alternate_color-meta'         => '#000000',

			// Heading color
			'colorset-alternate_color-heading'      => '#000000',

			// Border color
			'colorset-alternate_color-border'       => '#ffffff',

			// Background image
			'colorset-alternate_color-img'          => '',

			// Custom background image
			'colorset-alternate_color-customimage'  => '',

			// Position of the image
			'colorset-alternate_color-pos'          => 'center center',

			// Repeat
			'colorset-alternate_color-repeat'       => 'repeat',

			// Attachment
			'colorset-alternate_color-attach'       => 'scroll',

			/* Footer
			--------------------------------------*/

			// Background color
			'colorset-footer_color-bg'              => '#1b79b7', // $primary-color

			// Alternate background color
			'colorset-footer_color-bg2'             => '#1b79b7',

			// Primary color
			'colorset-footer_color-primary'         => '#ffffff',

			// Highlight color
			'colorset-footer_color-secondary'       => '#ffffff',

			// Font color
			'colorset-footer_color-color'           => '#ffffff',

			// Secondary font color
			'colorset-footer_color-meta'            => '#ffffff',

			// Heading color
			'colorset-footer_color-heading'         => '#ffffff',

			// Border colors
			'colorset-footer_color-border'          => '#1b79b7', // $primary-color

			// Background image
			'colorset-footer_color-img'             => '',

			// Custom background image
			'colorset-footer_color-customimage'     => '',

			// Position of the image
			'colorset-footer_color-pos'             => 'center center',

			// Repeat
			'colorset-footer_color-repeat'          => 'repeat',

			// Attachment
			'colorset-footer_color-attach'          => 'scroll',

			/* Socket
			--------------------------------------*/

			// Background color
			'colorset-socket_color-bg'              => '#1b79b7', // $primary-color-dark

			// Alternate background color
			'colorset-socket_color-bg2'             => '#1b79b7',

			// Primary color
			'colorset-socket_color-primary'         => '#ffffff',

			// Highlight color
			'colorset-socket_color-secondary'       => '#ffffff',

			// Font color
			'colorset-socket_color-color'           => '#ffffff',

			// Secondary font color
			'colorset-socket_color-meta'            => '#ffffff',

			// Heading color
			'colorset-socket_color-heading'         => '#ffffff',

			// Border color
			'colorset-socket_color-border'          => '#1b79b7', // $primary-color-dark

			// Background image
			'colorset-socket_color-img'             => '',

			// Custom background image
			'colorset-socket_color-customimage'     => '',

			// Position of the image
			'colorset-socket_color-pos'             => 'center center',

			// Repeat
			'colorset-socket_color-repeat'          => 'repeat',

			// Attach
			'colorset-socket_color-attach'          => 'scroll',

			/* Body Background
			--------------------------------------*/

			'color-body_style'                      => 'stretched',
			'color-body_color'                      => '#ffffff',
			'color-body_attach'                     => 'scroll',
			'color-body_repeat'                     => 'repeat',
			'color-body_pos'                        => 'center center',
			'color-body_img'                        => '',
			'color-body_customimage'                => '',

		);

		return $styles;

	}

	/*------------------------------------*\
	   CSS Overrides
	\*------------------------------------*/

	// This pulls over the css directory from the parent
	// Enfold theme to allow for easier editing.

	function enfold_custom_css() {

		if ( ! is_admin() ) {

			// wp_enqueue_style( 'avia-screen-child', get_stylesheet_directory_uri() . '/assets/css/screen.css', array(), '2', 'all' );

			// avia-style

			// wp_dequeue_style( 'avia-style' );

			// wp_enqueue_style( 'avia-style-child', get_stylesheet_directory_uri().'/css/style.css', array(), '2', 'all' );

			// avia-custom

			// wp_dequeue_style( 'avia-custom' );

			// wp_enqueue_style( 'avia-custom-child', get_stylesheet_directory_uri().'/css/custom.css', array(), '2', 'all' );

			// avia-grid

			// wp_dequeue_style( 'avia-grid' );

			// wp_enqueue_style( 'avia-grid-child', get_stylesheet_directory_uri().'/css/grid.css', array(), '2', 'all' );

			// avia-base

			// wp_dequeue_style( 'avia-base');

			// wp_enqueue_style( 'avia-base-child', get_stylesheet_directory_uri().'/css/base.css', array(), '2', 'all' );

			// avia-layout

			// wp_dequeue_style( 'avia-layout' );

			// wp_enqueue_style( 'avia-layout-child', get_stylesheet_directory_uri().'/css/layout.css', array(), '2', 'all' );

			// avia-scs

			// wp_dequeue_style( 'avia-scs' );

			// wp_enqueue_style( 'avia-scs-child', get_stylesheet_directory_uri().'/css/shortcodes.css', array(), '2', 'all' );

			// avia-print

			// wp_dequeue_style( 'avia-print' );

			// wp_enqueue_style( 'avia-print-child', get_stylesheet_directory_uri() . '/assets/css/print.css', array(), '1', 'print' );

			// if ( is_rtl() ) {

				// avia-rtl

				// wp_dequeue_style( 'avia-rtl' );

				// wp_enqueue_style( 'avia-rtl-child', get_stylesheet_directory_uri() . '/assets/css/rtl.css', array(), '1', 'all' );

			// }

			/* Pull in Dynamic Styles based on selections within control panel Enfold Child options */

			// wp_dequeue_style( 'avia-dynamic' );

			// global $avia;

			// $safe_name = avia_backend_safe_string($avia->base_data['prefix']);
			// $safe_name = apply_filters('avf_dynamic_stylesheet_filename', $safe_name);

			// $version_number = get_option('avia_stylesheet_dynamic_version'.$safe_name);

			// if ( empty( $version_number ) ) $version_number = '1';

			// $upload_directory = wp_upload_dir();

			// wp_enqueue_style( 'avia-dynamic-child', $upload_directory['baseurl'] . '/dynamic_avia/enfold_child.css', array(), $version_number, 'all' );

		}

	}

	add_action( 'wp_enqueue_scripts', 'enfold_custom_css', 100 );
