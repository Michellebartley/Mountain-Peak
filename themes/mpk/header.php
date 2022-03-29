<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mountain_Peak
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mpk' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="container pt-2 pb-2 main-header-container">

		<div class="row container-xxxl">

			<div class="col-md-4 leftCol">
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
			<div class="col-md 5 spacer"></div>

			<div class="col-md-3 rightCol justify-content-center align-items-center">

				<div class="col-md-5 d-inline-flex justify-content-end align-items-right">
					<?php aws_get_search_form( true ); ?>
				</div>

				<div class="col cart d-inline-flex justify-content-end align-items-right">
					<a href="<?php echo wc_get_cart_url(); ?>"<i class="bi bi-bag"></i>
					</a>
					<a href="<?php echo wc_get_cart_url(); ?>"> 
						<p class="item_count"><?php echo WC() ->cart->get_cart_contents_count(); ?></p>
					</a>
				</div>

				<div class="col account d-inline-flex justify-content-end align-items-right">
					<a href="https://mountainpeak.local/account/">
						<i class="bi bi-person-circle"></i>
					</a> 
				</div>
			</div>
		</div>

		<div class="row align-items-center">
			<div class="col site-header__logo">
				<?php the_custom_logo();?>
			</div>
		</div>
				
		<div class="row site-header__text">
			<h1>Uncompromising… Quality Outdoor Equipment.</h1>
			<h4>Outfitting Adventure Seekers Since 1985.</h4>
			<button class="btn btn-md" role="button">	
				<a href="https://mountainpeak.local/shop/">
					SHOP NOW
				</a> 
			</button>
		</div>
	</div>
	<div class="text-center bg-image">		
		<div class="img-container">
			<img src="<?php header_image(); ?>">
		</div>
	</div>
</header><!-- #masthead -->