<?php
/**
 * Franklin Court — Template helper functions.
 *
 * @package fcalri
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Returns the canonical theme version, used both for asset cache-busting and
 * to declare compatibility with the WP version in functions.php.
 */
if ( ! defined( 'FCALRI_THEME_VERSION' ) ) {
	define( 'FCALRI_THEME_VERSION', '1.0.0' );
}

/**
 * Phone — always return in (401) 253-3679 format for display, with E.164
 * stripped version for tel: links.
 */
function fcalri_phone_display() {
	$phone = get_theme_mod( 'fcalri_phone', '(401) 253-3679' );
	return apply_filters( 'fcalri_phone_display', $phone );
}

function fcalri_phone_tel() {
	$display = fcalri_phone_display();
	$digits  = preg_replace( '/[^0-9+]/', '', $display );
	return apply_filters( 'fcalri_phone_tel', $digits );
}

/**
 * Street address (line 1 + line 2) for the topbar / footer.
 * Each line is its own mod so it can be edited separately.
 */
function fcalri_address_line1() {
	return apply_filters( 'fcalri_address_line1', get_theme_mod( 'fcalri_address_line1', '180 Franklin Street' ) );
}
function fcalri_address_line2() {
	return apply_filters( 'fcalri_address_line2', get_theme_mod( 'fcalri_address_line2', 'Bristol, RI 02809' ) );
}

function fcalri_address_single() {
	return trim( fcalri_address_line1() . ', ' . fcalri_address_line2() );
}

function fcalri_address_map_query() {
	return rawurlencode( fcalri_address_single() );
}

/**
 * Hours — two lines for the topbar / footer card.
 */
function fcalri_hours_weekday() {
	return apply_filters( 'fcalri_hours_weekday', get_theme_mod( 'fcalri_hours_weekday', 'Mon–Fri · 8 AM – 8 PM' ) );
}
function fcalri_hours_weekend() {
	return apply_filters( 'fcalri_hours_weekend', get_theme_mod( 'fcalri_hours_weekend', 'Weekends & Holidays · 9 AM – 7 PM' ) );
}

/**
 * General front-desk email.
 */
function fcalri_email_main() {
	return apply_filters( 'fcalri_email_main', get_theme_mod( 'fcalri_email_main', 'frontdesk@ebcdc.org' ) );
}

/**
 * Accent color — exposed in the Customizer. Returns the CSS var() string.
 */
function fcalri_accent_color() {
	return apply_filters( 'fcalri_accent_color', get_theme_mod( 'fcalri_accent_color', '#A8553A' ) );
}

/**
 * Today's "is the office open?" string for the topbar.
 * Returns a short label like "Open today 8:00 AM – 8:00 PM".
 */
function fcalri_today_status() {
	$hour = (int) current_time( 'H' ); // server local hour.
	if ( is_admin() ) {
		// Show static label inside wp-admin to avoid timezone confusion.
		return __( 'Open today 8:00 AM – 8:00 PM', 'fcalri' );
	}
	$is_weekend = in_array( (int) current_time( 'w' ), array( 0, 6 ), true ); // 0=Sun,6=Sat.
	if ( $is_weekend ) {
		$opens  = 9;
		$closes = 19;
	} else {
		$opens  = 8;
		$closes = 20;
	}
	$state  = ( $hour >= $opens && $hour < $closes ) ? __( 'Open', 'fcalri' ) : __( 'Closed', 'fcalri' );
	$format = $is_weekend ? __( 'Open weekends 9:00 AM – 7:00 PM', 'fcalri' ) : __( 'Open today 8:00 AM – 8:00 PM', 'fcalri' );

	if ( __( 'Closed', 'fcalri' ) === $state ) {
		$format = $is_weekend ? __( 'Closed · opens 9:00 AM', 'fcalri' ) : __( 'Closed · opens 8:00 AM', 'fcalri' );
	}

	return $format;
}

/**
 * Resolve an asset path under the theme's /assets/ directory.
 * Falls back to the parent theme if the child is missing the file.
 */
function fcalri_asset_url( $relative_path ) {
	$relative_path = ltrim( $relative_path, '/' );
	if ( file_exists( get_stylesheet_directory() . '/assets/' . $relative_path ) ) {
		return get_stylesheet_directory_uri() . '/assets/' . $relative_path;
	}
	if ( file_exists( get_template_directory() . '/assets/' . $relative_path ) ) {
		return get_template_directory_uri() . '/assets/' . $relative_path;
	}
	return '';
}

/**
 * Static nav fallback — used by walker / header when no menu is set.
 * Mirrors the links in the original static site, in the same order.
 */
function fcalri_static_nav_items() {
	return array(
		array(
			'label' => __( 'Home', 'fcalri' ),
			'url'   => home_url( '/' ),
			'slug'  => 'home',
		),
		array(
			'label' => __( 'About', 'fcalri' ),
			'url'   => fcalri_get_page_url( 'about' ),
			'slug'  => 'about',
		),
		array(
			'label' => __( 'Life at Franklin Court', 'fcalri' ),
			'url'   => fcalri_get_page_url( 'life-at' ),
			'slug'  => 'life-at',
		),
		array(
			'label' => __( 'Apartments', 'fcalri' ),
			'url'   => fcalri_get_page_url( 'apartments' ),
			'slug'  => 'apartments',
		),
		array(
			'label' => __( 'Activities', 'fcalri' ),
			'url'   => fcalri_get_page_url( 'activities' ),
			'slug'  => 'activities',
		),
		array(
			'label' => __( 'Family Resources', 'fcalri' ),
			'url'   => fcalri_get_page_url( 'family-resources' ),
			'slug'  => 'family-resources',
		),
		array(
			'label' => __( 'Contact', 'fcalri' ),
			'url'   => fcalri_get_page_url( 'contact' ),
			'slug'  => 'contact',
		),
	);
}

/**
 * Try to find a page by slug, then by title, and return its permalink.
 * Falls back to a constructed URL if no page is found.
 */
function fcalri_get_page_url( $slug ) {
	$page = get_page_by_path( sanitize_title( $slug ) );
	if ( ! $page ) {
		// Some installs may have used "About Us" etc — try the title too.
		$titles = array(
			'about'             => 'About',
			'life-at'           => 'Life at Franklin Court',
			'apartments'        => 'Apartments',
			'activities'        => 'Activities',
			'family-resources'  => 'Family Resources',
			'contact'           => 'Contact',
			'employment'        => 'Employment',
			'tour'              => 'Schedule a Tour',
		);
		if ( isset( $titles[ $slug ] ) ) {
			$page = get_page_by_title( $titles[ $slug ] );
		}
	}
	if ( $page ) {
		return get_permalink( $page );
	}
	// Last-resort fallback: same path the static site used.
	return home_url( '/' . ltrim( $slug, '/' ) . '/' );
}

/**
 * Render a static nav list. Used when no WP menu is assigned.
 * Echoes the <ul> markup; safe to escape.
 */
function fcalri_static_nav_list( $context = 'desktop' ) {
	$items   = fcalri_static_nav_items();
	$classes = ( 'mobile' === $context ) ? 'mobile-menu__list' : 'nav-links';
	echo '<ul class="' . esc_attr( $classes ) . '">';
	foreach ( $items as $item ) {
		$is_current = ( is_page( $item['slug'] ) || ( 'home' === $item['slug'] && is_front_page() ) );
		printf(
			'<li><a class="nav-link%s" href="%s">%s</a></li>',
			$is_current ? ' is-active' : '',
			esc_url( $item['url'] ),
			esc_html( $item['label'] )
		);
	}
	echo '</ul>';
}

/**
 * Staff directory — single source of truth for every page that lists staff.
 * Kept here (not as a CPT) so the static content stays in sync and editable.
 *
 * Each entry:
 *   name, role, email, phone, photo (image slug, optional)
 */
function fcalri_staff_directory() {
	return apply_filters(
		'fcalri_staff_directory',
		array(
			array(
				'name'  => 'Angela Cabral',
				'role'  => __( 'Administrator', 'fcalri' ),
				'email' => 'ACabral@ebcdc.org',
				'phone' => '401-396-8976',
			),
			array(
				'name'  => 'Amy Leitao',
				'role'  => __( 'Nursing & Wellness Director', 'fcalri' ),
				'email' => 'ALeitao@ebcdc.org',
				'phone' => '401-396-9493',
			),
			array(
				'name'  => 'Michael Gargano',
				'role'  => __( 'Admissions Director / Property Manager', 'fcalri' ),
				'email' => 'MGargano@ebcdc.org',
				'phone' => '401-396-9020',
			),
			array(
				'name'  => 'Natalia Rivera',
				'role'  => __( 'Front Desk', 'fcalri' ),
				'email' => 'NRivera@ebcdc.org',
				'phone' => '401-253-3679 ext. 0',
			),
			array(
				'name'  => 'Jacqui Cummings',
				'role'  => __( 'Unidine Food Services Director', 'fcalri' ),
				'email' => 'JCummings@unidine.com',
				'phone' => '401-396-9460',
			),
			array(
				'name'  => 'Debra Whitmore',
				'role'  => __( 'Activities / Resident Services Director', 'fcalri' ),
				'email' => 'DWhitmore@ebcdc.org',
				'phone' => '401-253-3679 ext. 0',
			),
			array(
				'name'  => 'Ana Cabral',
				'role'  => __( 'Housekeeping Director', 'fcalri' ),
				'email' => 'acabral@ebcdc.org',
				'phone' => '401-253-3679 ext. 0',
			),
		)
	);
}

/**
 * Render a single staff card (used by About + Contact + template-parts/staff-card).
 */
function fcalri_render_staff_card( $member, $args = array() ) {
	$defaults = array(
		'show_email' => true,
		'show_phone' => true,
		'wrap'       => 'div',
	);
	$args = wp_parse_args( $args, $defaults );

	$tag = in_array( $args['wrap'], array( 'div', 'article', 'li' ), true ) ? $args['wrap'] : 'div';

	$tel_link = preg_replace( '/[^0-9]/', '', $member['phone'] );
	if ( strlen( $tel_link ) === 10 ) {
		$tel_link = '1' . $tel_link; // US default.
	}
	?>
	<<?php echo esc_html( $tag ); ?> class="card reveal" style="padding:var(--sp-4); text-align:center;">
		<div class="card-body" style="padding:0;">
			<div aria-hidden="true" style="width:64px; height:64px; border-radius:50%; background:var(--c-cream); color:var(--c-accent); display:grid; place-items:center; margin:0 auto var(--sp-2); font-family:var(--f-display); font-size:1.5rem; font-weight:500;">
				<?php echo esc_html( strtoupper( substr( $member['name'], 0, 1 ) ) ); ?>
			</div>
			<div class="card-meta"><?php echo esc_html( $member['role'] ); ?></div>
			<h3 class="card-title" style="font-size:var(--fs-lg);"><?php echo esc_html( $member['name'] ); ?></h3>
			<?php if ( ! empty( $member['email'] ) && $args['show_email'] ) : ?>
				<p style="margin:0 0 4px; font-size:0.9375rem;">
					<a href="mailto:<?php echo esc_attr( $member['email'] ); ?>"><?php echo esc_html( $member['email'] ); ?></a>
				</p>
			<?php endif; ?>
			<?php if ( ! empty( $member['phone'] ) && $args['show_phone'] ) : ?>
				<p style="margin:0; font-size:0.9375rem;">
					<a href="tel:<?php echo esc_attr( $tel_link ); ?>" style="color:var(--c-ink-soft); text-decoration:none;"><?php echo esc_html( $member['phone'] ); ?></a>
				</p>
			<?php endif; ?>
		</div>
	</<?php echo esc_html( $tag ); ?>>
	<?php
}

/**
 * Weekly activities calendar — single source of truth.
 * Mirrors the 7-day grid from the static site (Mon Jul 6 – Sun Jul 12, 2026).
 *
 * Returned as a nested array: $week[ $day_key ] = array of events.
 * Each event: array( 'time' => '9:30 AM', 'title' => 'Exercise Class' ).
 */
function fcalri_week_calendar() {
	return apply_filters(
		'fcalri_week_calendar',
		array(
			'monday'    => array(
				'name'  => __( 'Monday', 'fcalri' ),
				'date'  => 'Jul 6',
				'events' => array(
					array( 'time' => '9:30 AM',  'title' => 'Exercise Class' ),
					array( 'time' => '9:30 AM',  'title' => 'Walking Group' ),
					array( 'time' => '10:15 AM', 'title' => 'Manicures & Hand Massage' ),
					array( 'time' => '1:00 PM',  'title' => 'General Store' ),
					array( 'time' => '2:00 PM',  'title' => 'Bingo! Bingo!' ),
				),
			),
			'tuesday'   => array(
				'name'  => __( 'Tuesday', 'fcalri' ),
				'date'  => 'Jul 7',
				'events' => array(
					array( 'time' => '9:30 AM',  'title' => 'Exercise Class' ),
					array( 'time' => '9:30 AM',  'title' => 'Walking Group' ),
					array( 'time' => '10:15 AM', 'title' => 'Christian Worship' ),
					array( 'time' => '2:00 PM',  'title' => 'Left, Right, Center' ),
					array( 'time' => '3:00 PM',  'title' => 'Catholic Mass' ),
				),
			),
			'wednesday' => array(
				'name'  => __( 'Wednesday', 'fcalri' ),
				'date'  => 'Jul 8',
				'events' => array(
					array( 'time' => '9:30 AM',  'title' => 'Breakfast Outing — Farnsworth' ),
					array( 'time' => '10:00 AM', 'title' => 'Cards in the Cafe' ),
					array( 'time' => '2:00 PM',  'title' => 'Pokeno in the Cafe' ),
				),
			),
			'thursday'  => array(
				'name'  => __( 'Thursday', 'fcalri' ),
				'date'  => 'Jul 9',
				'events' => array(
					array( 'time' => '9:30 AM',  'title' => 'Exercise' ),
					array( 'time' => '11:00 AM', 'title' => 'Slater Park Trip with Bag Lunch' ),
					array( 'time' => '2:30 PM',  'title' => 'Bingo! Bingo!' ),
				),
			),
			'friday'    => array(
				'name'  => __( 'Friday', 'fcalri' ),
				'date'  => 'Jul 10',
				'events' => array(
					array( 'time' => '9:30 AM',  'title' => 'Exercise Class' ),
					array( 'time' => '9:30 AM',  'title' => 'Walking Group' ),
					array( 'time' => '10:15 AM', 'title' => 'Word Games' ),
					array( 'time' => '1:00 PM',  'title' => 'General Store' ),
					array( 'time' => '2:00 PM',  'title' => 'Wii Bowling in Community Room' ),
				),
			),
			'saturday'  => array(
				'name'  => __( 'Saturday', 'fcalri' ),
				'date'  => 'Jul 11',
				'events' => array(
					array( 'time' => '9:30 AM',  'title' => 'Rosary — Private Dining Room' ),
					array( 'time' => '10:30 AM', 'title' => 'Chair Dancing with Nellie' ),
					array( 'time' => '2:00 PM',  'title' => 'Movie Time & Snack' ),
				),
			),
			'sunday'    => array(
				'name'  => __( 'Sunday', 'fcalri' ),
				'date'  => 'Jul 12',
				'events' => array(
					array( 'time' => '9:30 AM',  'title' => 'Rosary — Private Dining Room' ),
					array( 'time' => '10:00 AM', 'title' => 'Adult Coloring — Cafe' ),
					array( 'time' => '2:00 PM',  'title' => 'Movie Time — Media Room' ),
				),
			),
		)
	);
}

/**
 * Render the weekly calendar. Wraps in <div class="week-grid">…</div>.
 *
 * @param array $args Optional. Set 'today' => 'tuesday' to highlight a day.
 */
function fcalri_render_week_calendar( $args = array() ) {
	$defaults = array( 'today' => '' );
	$args     = wp_parse_args( $args, $defaults );
	$week     = fcalri_week_calendar();

	echo '<div class="week-grid">';
	foreach ( $week as $key => $day ) {
		$classes = array( 'day-card' );
		if ( ! empty( $args['today'] ) && $args['today'] === $key ) {
			$classes[] = 'is-today';
		}
		?>
		<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
			<span class="day-name"><?php echo esc_html( $day['name'] ); ?></span>
			<span class="day-date"><?php echo esc_html( $day['date'] ); ?></span>
			<ul class="day-events">
				<?php foreach ( $day['events'] as $event ) : ?>
					<li class="day-event">
						<span class="day-event-time"><?php echo esc_html( $event['time'] ); ?></span>
						<?php echo esc_html( $event['title'] ); ?>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php
	}
	echo '</div>';
}

/**
 * Output <picture>-less <img> with sensible fallback for the FC site.
 * Keeps the markup simple — the CSS handles object-fit/aspect-ratio.
 */
function fcalri_image( $slug, $alt = '', $attrs = array() ) {
	$url = fcalri_asset_url( 'images/' . ltrim( $slug, '/' ) );
	if ( ! $url ) {
		return;
	}
	$defaults = array(
		'loading' => 'lazy',
		'decoding' => 'async',
	);
	$attrs    = wp_parse_args( $attrs, $defaults );
	$attr_str = '';
	foreach ( $attrs as $name => $value ) {
		$attr_str .= ' ' . esc_attr( $name ) . '="' . esc_attr( $value ) . '"';
	}
	printf(
		'<img src="%s" alt="%s"%s>',
		esc_url( $url ),
		esc_attr( $alt ),
		$attr_str // already escaped in the loop above.
	);
}
