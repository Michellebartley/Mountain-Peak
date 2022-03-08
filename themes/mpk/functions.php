<?php
/**
 * Mountain Peak functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mountain_Peak
 */

if ( ! defined( 'MPK_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'MPK_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mpk_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Mountain Peak, use a find and replace
		* to change 'mpk' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'mpk', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-primary' => esc_html__( 'Primary', 'mpk' ),
			'menu-about' => esc_html__( 'About', 'mpk' ),
			'menu-store' => esc_html__( 'Store', 'mpk' ),
			'menu-contact' => esc_html__( 'Contact', 'mpk' ),
		)
	);

	/*
	* Footer Widget 1
	*/
	function custom_footer_widget_one() {
		$args = array(
			'id' 			=>	'footer-widget-col-one',
			'name'			=>	__('Footer Column One', 'text_domain'),
			'description'	=>	__('Column One', 'text_domain'),
			'before_title'	=>	'<h3 class="title">',
			'after_title'	=>	'</h3>',
			'before_widget'	=>	'<div id="%1$s" class="widget %2$s">',
			'after_widget'	=>	'</div>'
		);
		register_sidebar( $args );
	}
	add_action( 'widgets_init', 'custom_footer_widget_one');

	/*
	* Footer Widget 2
	*/
	function custom_footer_widget_two() {
		$args = array(
			'id' 			=>	'footer-widget-col-two',
			'name'			=>	__('Footer Column Two', 'text_domain'),
			'description'	=>	__('Column Two', 'text_domain'),
			'before_title'	=>	'<h3 class="title">',
			'after_title'	=>	'</h3>',
			'before_widget'	=>	'<div id="%1$s" class="widget %2$s">',
			'after_widget'	=>	'</div>'
		);
		register_sidebar( $args );
	}
	add_action( 'widgets_init', 'custom_footer_widget_two');

	/*
	* Footer Widget 3
	*/
	function custom_footer_widget_three() {
		$args = array(
			'id' 			=>	'footer-widget-col-three',
			'name'			=>	__('Footer Column Three', 'text_domain'),
			'description'	=>	__('Column Three', 'text_domain'),
			'before_title'	=>	'<h3 class="title">',
			'after_title'	=>	'</h3>',
			'before_widget'	=>	'<div id="%1$s" class="widget %2$s">',
			'after_widget'	=>	'</div>'
		);
		register_sidebar( $args );
	}
	add_action( 'widgets_init', 'custom_footer_widget_three');


	/*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add theme support for Custom Header
	add_theme_support( 'custom-header' );

	function mpk_custom_header_setup() {
		$defaults = array(
			// Display the header text along with the image
			'header-text'           => false,
			// Header text color default
			'default-text-color'        => '#fff',
			// Header image random rotation default
			'random-default'        => false,
			// Enable upload of image file in admin 
			'uploads'       => false,
			// function to be called in theme head section
			'wp-head-callback'      => 'wphead_cb',
			//  function to be called in preview page head section
			'admin-head-callback'       => 'adminhead_cb',
			// function to produce preview markup in the admin screen
			'admin-preview-callback'    => 'adminpreview_cb',
			);
	}
	add_action( 'after_setup_theme', 'mpk_custom_header_setup' );

	$header_info = array(
		'width'         => 1920,
		'height'        => 800,
		'default-image' => get_template_directory_uri() . '/assets/img/home-bg.png',
	);
	add_theme_support( 'custom-header', $header_info );
	
	$header_images = array(
		'Home' => array(
				'url'           => get_template_directory_uri() . '/assets/img/home-bg.png',
				'thumbnail_url' => get_template_directory_uri() . '/assets/img/home-bg.png',
				'description'   => 'Home Page',
		),
		'Story' => array(
				'url'           => get_template_directory_uri() . '/assets/img/ourStory-bg.png',
				'thumbnail_url' => get_template_directory_uri() . '/assets/img/ourStory-bg.png',
				'description'   => 'Our Story',
		),  
	);
	register_default_headers( $header_images );

	// function change_header($url_for_image) {
	// 	if (is_home()) 
	// 		$url_for_image = "https://mountainpeak.local/wp-content/uploads/2022/03/cropped-home-bg.png";
	
	// 	if (is_single())
	// 		$url_for_image = "https://mountainpeak.local/wp-content/uploads/2022/03/ourStory-bg.png";
	
	// 	return $url_for_image;
	// }
	// add_filter('mpk_mod_header_image', 'change_header');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
		
	add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'mpk_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mpk_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mpk_content_width', 1920 );
}
add_action( 'after_setup_theme', 'mpk_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mpk_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mpk' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mpk' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mpk_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mpk_scripts() {
	wp_enqueue_style( "mpk-app", get_template_directory_uri( ).'/assets/css/app.css');
	wp_enqueue_style( "bootstrap-icons", 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css');
	wp_enqueue_style( 'mpk-style', get_stylesheet_uri(), array(), MPK_VERSION );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mpk_scripts' );

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> – <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Block Editor additions.
 */
require get_template_directory() . '/inc/block-editor.php';


