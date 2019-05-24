<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coffee_can
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
jQuery('.owl-carousel3').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
navText:["<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i></div>","<div class='nav-btn next-slide'><i class='fas fa-chevron-right'></i></div>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
		1200:{
            items:2
        }
    }
});		
</script>

</body>
</html>
