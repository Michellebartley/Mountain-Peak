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
		<div class="site-info col-12 pb-3">
			<div class="contianer p-2">
				<div class="row container-xxxl">
					<div class="col-md-4">
						<nav id="site-navigation" class="main-navigation align-items-center">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-primary',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
						</nav><!-- #site-navigation -->
					</div>
				</div>		
			</div>
			<?php
			printf( esc_html__( ' Copyright © 2022 Mountain Peaks All rights reserved'));
			?>
		</div><!-- .site-info -->	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
