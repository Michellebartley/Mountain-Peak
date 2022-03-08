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

	<footer id="colophon" class="site-footer">

	<div class="text-white pt5 pb5">
		<div class="container">
			<div class="row d-inline-flex">
				<div class="col-med-4">
					<?php dynamic_sidebar( 'footer-widget-col-one' )?>
				</div>
				<div class="col-med-4">
					Company
				</div>
				<div class="col-med-4 ms-auto">
					Keep in Touch
				</div>
			</div>
		</div>
	</div>

	<div class="container"></div>

	<div class="container pt-2 pb-2">
		<div class="row d-flex align-items-center">
			<div class="col">
				<p>&copy; <?php bloginfo('name');?> <?php echo date('Y'); ?> All rights reserved | Created by <a href="https://michellebartley.ca">Michelle Bartley</a> </p>
			</div>
		</div>
	</div>













	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
