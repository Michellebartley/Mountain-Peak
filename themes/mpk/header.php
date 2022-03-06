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

	<div class="container pt-2 pb-2">

		<div class="row">

			<div class="col-md-4">
				<nav id="site-navigation" class="main-navigation">
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

			<div class="col-md-8">
				<div class="col-md-5">
					<?php aws_get_search_form( true ); ?>
				</div>
				<div class="col cart">
					<i class="bi bi-bag"></i>
					<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></a>
				</div>
				<div class="col account">
					<i class="bi bi-person-circle"></i>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col site-header__logo">
				<?php the_custom_logo();?>
			</div>
		</div>
	</div>
	</header><!-- #masthead -->
