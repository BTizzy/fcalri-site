<?php
/**
 * Franklin Court — Theme Customizer integration.
 *
 * Adds a "Franklin Court" panel exposing the editable site identity
 * (phone, address, hours, accent color) that template-functions.php reads.
 *
 * @package fcalri
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'WP_Customize_Manager' ) ) {
	return;
}

add_action( 'customize_register', 'fcalri_customize_register' );

/**
 * Register theme options with the Customizer.
 *
 * @param WP_Customize_Manager $wp_customize WP_Customize_Manager instance.
 */
function fcalri_customize_register( $wp_customize ) {

	// --- Panel ---------------------------------------------------------------
	$wp_customize->add_panel(
		'fcalri',
		array(
			'title'       => __( 'Franklin Court', 'fcalri' ),
			'description' => __( 'Edit the phone, address, hours, and other site-wide contact info that appears in the header and footer.', 'fcalri' ),
			'priority'    => 30,
		)
	);

	// --- Section: Contact info ----------------------------------------------
	$wp_customize->add_section(
		'fcalri_contact',
		array(
			'title'    => __( 'Contact info', 'fcalri' ),
			'panel'    => 'fcalri',
			'priority' => 10,
		)
	);

	// Phone.
	$wp_customize->add_setting(
		'fcalri_phone',
		array(
			'default'           => '(401) 253-3679',
			'sanitize_callback' => 'fcalri_sanitize_text',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'fcalri_phone',
		array(
			'label'       => __( 'Phone (display format)', 'fcalri' ),
			'description' => __( 'Shown in the topbar and contact card. tel: link is auto-generated.', 'fcalri' ),
			'section'     => 'fcalri_contact',
			'type'        => 'text',
		)
	);

	// Address line 1.
	$wp_customize->add_setting(
		'fcalri_address_line1',
		array(
			'default'           => '180 Franklin Street',
			'sanitize_callback' => 'fcalri_sanitize_text',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'fcalri_address_line1',
		array(
			'label'   => __( 'Address line 1', 'fcalri' ),
			'section' => 'fcalri_contact',
			'type'    => 'text',
		)
	);

	// Address line 2.
	$wp_customize->add_setting(
		'fcalri_address_line2',
		array(
			'default'           => 'Bristol, RI 02809',
			'sanitize_callback' => 'fcalri_sanitize_text',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'fcalri_address_line2',
		array(
			'label'   => __( 'Address line 2 (city, state, zip)', 'fcalri' ),
			'section' => 'fcalri_contact',
			'type'    => 'text',
		)
	);

	// Main email.
	$wp_customize->add_setting(
		'fcalri_email_main',
		array(
			'default'           => 'frontdesk@ebcdc.org',
			'sanitize_callback' => 'fcalri_sanitize_email',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'fcalri_email_main',
		array(
			'label'   => __( 'General email', 'fcalri' ),
			'section' => 'fcalri_contact',
			'type'    => 'email',
		)
	);

	// --- Section: Hours ------------------------------------------------------
	$wp_customize->add_section(
		'fcalri_hours',
		array(
			'title'    => __( 'Hours of operation', 'fcalri' ),
			'panel'    => 'fcalri',
			'priority' => 20,
		)
	);

	$wp_customize->add_setting(
		'fcalri_hours_weekday',
		array(
			'default'           => 'Mon–Fri · 8 AM – 8 PM',
			'sanitize_callback' => 'fcalri_sanitize_text',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'fcalri_hours_weekday',
		array(
			'label'   => __( 'Weekday hours line', 'fcalri' ),
			'section' => 'fcalri_hours',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'fcalri_hours_weekend',
		array(
			'default'           => 'Weekends & Holidays · 9 AM – 7 PM',
			'sanitize_callback' => 'fcalri_sanitize_text',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'fcalri_hours_weekend',
		array(
			'label'   => __( 'Weekend hours line', 'fcalri' ),
			'section' => 'fcalri_hours',
			'type'    => 'text',
		)
	);

	// --- Section: Brand color -----------------------------------------------
	$wp_customize->add_section(
		'fcalri_brand',
		array(
			'title'    => __( 'Brand colors', 'fcalri' ),
			'panel'    => 'fcalri',
			'priority' => 30,
		)
	);

	$wp_customize->add_setting(
		'fcalri_accent_color',
		array(
			'default'           => '#A8553A',
			'sanitize_callback' => 'fcalri_sanitize_hex_color',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'fcalri_accent_color',
			array(
				'label'       => __( 'Accent color', 'fcalri' ),
				'description' => __( 'Used for the brick/copper accent (links, buttons, eyebrow text).', 'fcalri' ),
				'section'     => 'fcalri_brand',
			)
		)
	);
}

/**
 * Output the accent color override as inline CSS so it overrides main.css.
 */
add_action( 'wp_head', 'fcalri_print_accent_color_css', 100 );

function fcalri_print_accent_color_css() {
	$color = fcalri_accent_color();
	if ( '#A8553A' === $color ) {
		return; // default — no override needed.
	}
	?>
	<style id="fcalri-accent-color">
		:root {
			--c-accent: <?php echo esc_html( $color ); ?>;
			--c-accent-dk: <?php echo esc_html( fcalri_darken_hex( $color, 0.15 ) ); ?>;
		}
		.btn-primary { background: var(--c-accent); }
		.btn-primary:hover { background: var(--c-accent-dk); }
		a { color: var(--c-accent); }
		a:hover { color: var(--c-accent-dk); }
		.eyebrow { color: var(--c-accent); }
		.nav-link.is-active::after,
		.nav-link:hover::after { background: var(--c-accent); }
		.card-meta { color: var(--c-accent); }
		.day-name { color: var(--c-accent); }
		.day-card.is-today { border-color: var(--c-accent); }
		.nav-cta:hover { background: var(--c-accent); }
		.nav-link em { color: var(--c-accent); }
	</style>
	<?php
}

/**
 * Darken a hex color by $amount (0–1). Used to derive the hover variant.
 */
function fcalri_darken_hex( $hex, $amount = 0.15 ) {
	$hex = ltrim( $hex, '#' );
	if ( strlen( $hex ) === 3 ) {
		$hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
	}
	if ( strlen( $hex ) !== 6 ) {
		return '#A8553A';
	}
	$r = hexdec( substr( $hex, 0, 2 ) );
	$g = hexdec( substr( $hex, 2, 2 ) );
	$b = hexdec( substr( $hex, 4, 2 ) );
	$r = max( 0, (int) round( $r * ( 1 - $amount ) ) );
	$g = max( 0, (int) round( $g * ( 1 - $amount ) ) );
	$b = max( 0, (int) round( $b * ( 1 - $amount ) ) );
	return sprintf( '#%02X%02X%02X', $r, $g, $b );
}

/**
 * Sanitize callbacks.
 */
function fcalri_sanitize_text( $value ) {
	return sanitize_text_field( (string) $value );
}

function fcalri_sanitize_email( $value ) {
	return sanitize_email( (string) $value );
}

function fcalri_sanitize_hex_color( $value ) {
	$value = trim( (string) $value );
	if ( '' === $value ) {
		return '';
	}
	if ( preg_match( '/^#([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$/', $value ) ) {
		return strtoupper( $value );
	}
	return '#A8553A';
}
