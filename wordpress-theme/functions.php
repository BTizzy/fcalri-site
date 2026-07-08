<?php
/**
 * Franklin Court Assisted Living — theme bootstrap.
 *
 * @package fcalri
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Theme constants.
if ( ! defined( 'FCALRI_THEME_VERSION' ) ) {
	define( 'FCALRI_THEME_VERSION', '1.0.0' );
}
if ( ! defined( 'FCALRI_THEME_DIR' ) ) {
	define( 'FCALRI_THEME_DIR', trailingslashit( get_template_directory() ) );
}
if ( ! defined( 'FCALRI_THEME_URI' ) ) {
	define( 'FCALRI_THEME_URI', trailingslashit( get_template_directory_uri() ) );
}

// Pull in the helper functions (loaded early so any hook below can use them).
require_once FCALRI_THEME_DIR . 'inc/template-functions.php';
require_once FCALRI_THEME_DIR . 'inc/walker.php';
require_once FCALRI_THEME_DIR . 'inc/customizer.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function fcalri_setup() {
	// Make the theme available for translation.
	load_theme_textdomain( 'fcalri', FCALRI_THEME_DIR . 'languages' );

	// Let WP manage the <title> tag.
	add_theme_support( 'title-tag' );

	// Enable featured images on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// HTML5 markup for the comment form, search form, comment list, gallery, caption.
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);

	// Selective refresh for widgets in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Automatic feed links in <head>.
	add_theme_support( 'automatic-feed-links' );

	// Wide and full alignment for the block editor.
	add_theme_support( 'align-wide' );

	// Responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 200,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		)
	);

	// Custom background (used as a thin option; not the primary design surface).
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'FBF8F1',
		)
	);

	// Register the primary nav menu.
	register_nav_menus(
		array(
			'primary' => __( 'Primary navigation', 'fcalri' ),
			'footer'  => __( 'Footer navigation', 'fcalri' ),
		)
	);

	// Add sensible image sizes for the FC site.
	add_image_size( 'fcalri-card',    640, 480, true );   // 4:3 service cards.
	add_image_size( 'fcalri-feature', 900, 720, true );   // 5:4 feature blocks.
	add_image_size( 'fcalri-hero',    1200, 1500, true ); // vertical hero crop.
}
add_action( 'after_setup_theme', 'fcalri_setup' );

/**
 * Set the content_width based on the theme's design.
 */
function fcalri_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fcalri_content_width', 1200 );
}
add_action( 'after_setup_theme', 'fcalri_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function fcalri_enqueue_assets() {

	// --- Google Fonts (same set as the static site) -------------------------
	wp_enqueue_style(
		'fcalri-fonts-preconnect',
		'https://fonts.googleapis.com',
		array(),
		null
	);
	// Note: preconnect tags are added directly in header.php so we can
	// include the crossorigin attribute correctly.

	wp_enqueue_style(
		'fcalri-fonts',
		'https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;1,9..144,400;1,9..144,500&family=JetBrains+Mono:wght@500;600&family=Source+Sans+3:wght@400;500;600;700&display=swap',
		array(),
		null
	);

	// --- Main stylesheet ---------------------------------------------------
	// assets/css/main.css is the static design system — enqueue it as the
	// primary stylesheet so it loads first.
	wp_enqueue_style(
		'fcalri-main',
		FCALRI_THEME_URI . 'assets/css/main.css',
		array( 'fcalri-fonts' ),
		FCALRI_THEME_VERSION
	);

	// The WP stylesheet (style.css) is registered by core; we just need to
	// make sure it depends on the main design system.
	wp_style_add_data( 'style', 'rtl', 'replace' );

	// --- Site script -------------------------------------------------------
	wp_enqueue_script(
		'fcalri-site',
		FCALRI_THEME_URI . 'assets/js/site.js',
		array(),
		FCALRI_THEME_VERSION,
		true
	);

	// Threaded comments script, when needed.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fcalri_enqueue_assets' );

/**
 * Add preconnect links to the head (Google Fonts) for performance.
 */
function fcalri_resource_hints( $hints, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$hints[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
	}
	return $hints;
}
add_filter( 'wp_resource_hints', 'fcalri_resource_hints', 10, 2 );

/**
 * Register the primary sidebar.
 */
function fcalri_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'fcalri' ),
			'id'            => 'footer-1',
			'description'   => __( 'Appears above the footer bottom row.', 'fcalri' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'fcalri_widgets_init' );

/**
 * Custom walker for the primary nav.
 */
function fcalri_nav_menu_args( $args ) {
	if ( 'primary' === ( $args['theme_location'] ?? '' ) ) {
		$args['walker']      = new Fcalri_Walker_Nav();
		$args['container']   = false;
		$args['items_wrap']  = '<ul class="nav-links">%3$s</ul>';
		$args['fallback_cb'] = 'fcalri_nav_fallback';
	}
	return $args;
}
add_filter( 'wp_nav_menu_args', 'fcalri_nav_menu_args' );

/**
 * Fallback when no menu is assigned — outputs the static list.
 */
function fcalri_nav_fallback( $args ) {
	fcalri_static_nav_list();
}

/**
 * Body class tweaks — useful for the front page and no-js fallback.
 */
function fcalri_body_classes( $classes ) {
	// The site is CSS-only at the markup level, so flag JS availability
	// so we can hide things conditionally if JS is on.
	if ( ! is_admin() ) {
		$classes[] = 'no-js';
	}
	if ( is_front_page() ) {
		$classes[] = 'is-front-page';
	}
	if ( is_page( 'contact' ) ) {
		$classes[] = 'is-page-contact';
	}
	return $classes;
}
add_filter( 'body_class', 'fcalri_body_classes' );

/**
 * Print the no-js class on <html> so the JS can flip it.
 */
function fcalri_no_js_class() {
	echo '<script>document.documentElement.classList.replace("no-js","js");</script>' . "\n";
}
add_action( 'wp_head', 'fcalri_no_js_class', 1 );

/**
 * Custom excerpt length for the (future) news/archive views.
 */
function fcalri_excerpt_length( $length ) {
	return 28;
}
add_filter( 'excerpt_length', 'fcalri_excerpt_length' );

/**
 * Custom excerpt "read more" string.
 */
function fcalri_excerpt_more( $more ) {
	return '…';
}
add_filter( 'excerpt_more', 'fcalri_excerpt_more' );

/**
 * Add a pingback header on singular views that support pings.
 */
function fcalri_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'fcalri_pingback_header' );

/**
 * Schema.org LocalBusiness JSON-LD on every page — important for AEO/SEO.
 */
function fcalri_local_business_schema() {
	if ( is_admin() ) {
		return;
	}
	$schema = array(
		'@context'        => 'https://schema.org',
		'@type'           => 'AssistedLivingFacility',
		'name'            => get_bloginfo( 'name' ),
		'url'             => home_url( '/' ),
		'description'     => get_bloginfo( 'description' ),
		'telephone'       => fcalri_phone_tel(),
		'email'           => fcalri_email_main(),
		'priceRange'      => '$$',
		'image'           => fcalri_asset_url( 'images/community-group.jpg' ),
		'address'         => array(
			'@type'           => 'PostalAddress',
			'streetAddress'   => fcalri_address_line1(),
			'addressLocality' => 'Bristol',
			'addressRegion'   => 'RI',
			'postalCode'      => '02809',
			'addressCountry'  => 'US',
		),
		'geo'             => array(
			'@type'    => 'GeoCoordinates',
			'latitude' => 41.6700,
			'longitude' => -71.2750,
		),
		'openingHoursSpecification' => array(
			array(
				'@type'         => 'OpeningHoursSpecification',
				'dayOfWeek'     => array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday' ),
				'opens'         => '08:00',
				'closes'        => '20:00',
			),
			array(
				'@type'         => 'OpeningHoursSpecification',
				'dayOfWeek'     => array( 'Saturday', 'Sunday' ),
				'opens'         => '09:00',
				'closes'        => '19:00',
			),
		),
		'parentOrganization' => array(
			'@type' => 'NGO',
			'name'  => 'East Bay Community Development Corp',
		),
	);
	echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>' . "\n";
}
add_action( 'wp_head', 'fcalri_local_business_schema', 50 );

/**
 * Add an inline <noscript> style so reveals are visible without JS.
 */
function fcalri_noscript_reveal_css() {
	?>
	<noscript><style>.reveal { opacity: 1 !important; transform: none !important; }</style></noscript>
	<?php
}
add_action( 'wp_head', 'fcalri_noscript_reveal_css', 99 );
