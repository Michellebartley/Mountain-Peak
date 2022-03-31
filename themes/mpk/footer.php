<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mountain_Peak
 */

?>

	<footer id="colophon" class="site-footer pt-5 pl-5 pr-5">

	<div class="footer-row text-white pt5 pb5">
		<div class="container col-12">
			<div class="row d-flex">
				<div class="col-4 sm-6">
					<?php dynamic_sidebar( 'footer-widget-col-two' )?>
				</div>
				<div class="col-4 sm-6">
					<?php dynamic_sidebar( 'footer-widget-col-two' )?>
				</div>
				<div class="col-4 sm-12 ms-auto sm-hidden newsletter-signup">
					<?php dynamic_sidebar( 'footer-widget-col-three' )?>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="container"></div> -->

	<div class="container pt-5 pb-3">
		<div class="row d-flex align-items-center">
			<div class="col-12 copyright">
				<p>&copy; <?php bloginfo('name');?> <?php echo date('Y'); ?> All rights reserved | Created by <a href="https://michellebartley.ca"><span>Michelle Bartley</span></a> </p>
			</div>
		</div>
	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
