<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package CoffeCan
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses coffecan_header_style()
 */
function coffecan_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'coffecan_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'flex-width'             => true,
		'wp-head-callback'       => 'coffecan_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'coffecan_custom_header_setup' );


