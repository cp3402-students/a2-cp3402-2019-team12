<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coffeecan
 */

?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer__wrap">
			<?php
			// Make sure there is a social menu to display.
			if ( has_nav_menu( 'social' ) ) { ?>
			<nav class="social-menu">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'social',
						'menu_class'     => 'social-links-menu',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>' . coffeecan_get_svg( array( 'icon' => 'chain' ) ),
					) );
				?>
			</nav><!-- .social-menu -->
			<?php } ?>

			<div class="site-info">
				<div><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'coffeecan' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'coffeecan' ), 'WordPress' ); ?></a></div>
				<div><?php printf( esc_html__( 'Theme: %1$s by %2$s', 'coffeecan' ), 'Coffeecan', '<a href="https://wordpress.org/" rel="designer">Team 12</a>' ); ?></div>
			</div><!-- .site-info -->
		</div><!-- .site-footer__wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
