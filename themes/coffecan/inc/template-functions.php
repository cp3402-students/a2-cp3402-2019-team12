<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package CoffeCan
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function coffecan_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
        $classes[] = 'archive-view';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'has-sidebar';
	} else {
	    $classes[] = 'no-sidebar';
    }

	// adds a class telling us if the page siderbar is in use.
    if (is_active_sidebar('siderbar-2')) {
        $classes[] = 'has-page-sidebar';
    }

	return $classes;
}
add_filter( 'body_class', 'coffecan_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function coffecan_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'coffecan_pingback_header' );
