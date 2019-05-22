<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coffee_can
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<style>

</style>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'coffee-can' ); ?></a>

	<header>

  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?php bloginfo('template_url')?>/images/Latte Art techniques (online-video-cutter.com).mp4" type="video/mp4">
  </video>
  <div class="header_menu">
  <ul>

  <li><a href="#">About Us</a></li>
<li><a href="#">Menu</a></li>
<li><a href="#">What's New</a></li>
<li><a href="#">Logo</a></li>
<li><a href="#">Our Community</a></li>
<li><a href="#">Events</a></li>
<li><a href="#">Contact Us</a></li>


  </ul>
  
  </div>
 
  <div class="hero_area">
  <h2>The Coffee Can</h2>
  <p>A great coffee, every time</p>
</div>
 
  
    </header>

	<div id="content" class="site-content">
