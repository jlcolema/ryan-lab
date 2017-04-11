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
            'google_webfont'                        => 'Open Sans:400,600',

            /* Header (Logo Area)
            --------------------------------------*/

            // Background color
            'colorset-header_color-bg'              => '#ffffff',

            // Alternate background color
            'colorset-header_color-bg2'             => '#f8f8f8',

            // Primary color
            'colorset-header_color-primary'         => '#2d5c88',

            // Hightlight color
            'colorset-header_color-secondary'       => '#444444',

            // Font color
            'colorset-header_color-color'           => '#333333',

            // Secondary font color
            'colorset-header_color-meta'            => '#808080',

            // Heading color
            'colorset-header_color-heading'         => '#000000',

            // Border color
            'colorset-header_color-border'          => '#e1e1e1',

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
            'colorset-main_color-bg2'               => '#fcfcfc',

            // Primary color
            'colorset-main_color-primary'           => '#2d5c88',

            // Highlight color
            'colorset-main_color-secondary'         => '#3d71a1',

            // Font color
            'colorset-main_color-color'             => '#666666',

            // Secondary font color
            'colorset-main_color-meta'              => '#919191',

            // Heading color
            'colorset-main_color-heading'           => '#222222',

            // Border color
            'colorset-main_color-border'            => '#e1e1e1',

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
            'colorset-alternate_color-bg'           => '#fcfcfc',

            // Alternate background color
            'colorset-alternate_color-bg2'          => '#ffffff',

            // Primary color
            'colorset-alternate_color-primary'      => '#2d5c88',

            // Highlight color
            'colorset-alternate_color-secondary'    => '#3d71a1',

            // Font color
            'colorset-alternate_color-color'        => '#666666',

            // Secondary font color
            'colorset-alternate_color-meta'         => '#8f8f8f',

            // Heading color
            'colorset-alternate_color-heading'      => '#222222',

            // Border color
            'colorset-alternate_color-border'       => '#e1e1e1',

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
            'colorset-footer_color-bg'              => '#222222', // $primary-color

            // Alternate background color
            'colorset-footer_color-bg2'             => '#333333',

            // Primary color
            'colorset-footer_color-primary'         => '#ffffff',

            // Highlight color
            'colorset-footer_color-secondary'       => '#aaaaaa',

            // Font color
            'colorset-footer_color-color'           => '#dddddd',

            // Secondary font color
            'colorset-footer_color-meta'            => '#919191',

            // Heading color
            'colorset-footer_color-heading'         => '#919191',

            // Border colors
            'colorset-footer_color-border'          => '#444444', // $primary-color

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
            'colorset-socket_color-bg'              => '#333333', // $primary-color-dark

            // Alternate background color
            'colorset-socket_color-bg2'             => '#555555',

            // Primary color
            'colorset-socket_color-primary'         => '#ffffff',

            // Highlight color
            'colorset-socket_color-secondary'       => '#aaaaaa',

            // Font color
            'colorset-socket_color-color'           => '#eeeeee',

            // Secondary font color
            'colorset-socket_color-meta'            => '#999999',

            // Heading color
            'colorset-socket_color-heading'         => '#ffffff',

            // Border color
            'colorset-socket_color-border'          => '#444444', // $primary-color-dark

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
