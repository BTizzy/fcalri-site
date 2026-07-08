<?php
/**
 * Front page template — the static home page content.
 *
 * Uses the template parts from /template-parts/ and the helpers in
 * /inc/template-functions.php. The page content here is meant to be the
 * canonical site home; if a static front page is set in Settings → Reading,
 * this template is used for that page.
 *
 * @package fcalri
 */

get_header();
?>

<main id="main">

	<?php
	// 1. HERO
	$hero_eyebrow   = __( 'East Bay · Bristol, Rhode Island', 'fcalri' );
	$hero_title     = 'Care that feels<br>like <em>home.</em>';
	$hero_lede      = sprintf(
		/* translators: %s: emphasis on "30 residents. Real relationships. One careful attention." */
		__( 'For three decades, Franklin Court has been a small, family-run assisted living community in the heart of historic Bristol — within walking distance of downtown, the harbor, and the East Bay Bike Path. %s', 'fcalri' ),
		'<strong>30 residents. Real relationships. One careful attention.</strong>'
	);
	$hero_image     = 'community-group.jpg';
	$hero_image_alt = __( 'Franklin Court residents enjoying an outing together with a member of the care team.', 'fcalri' );
	$hero_primary   = array(
		'url'   => fcalri_get_page_url( 'tour' ),
		'label' => __( 'Schedule a Visit', 'fcalri' ),
	);
	$hero_secondary = array(
		'url'   => 'tel:' . fcalri_phone_tel(),
		'label' => __( 'Call (401) 253-3679', 'fcalri' ),
	);
	$hero_trust     = array(
		__( '★ Part of EBCDC', 'fcalri' ),
		__( '★ All-Inclusive Services', 'fcalri' ),
		__( '★ 24-Hour Care', 'fcalri' ),
		__( '★ Locally Owned', 'fcalri' ),
	);
	include locate_template( 'template-parts/hero.php' );
	?>

	<?php
	// 2. STATS
	include locate_template( 'template-parts/stats-strip.php' );
	?>

	<?php // 3. MISSION
	$current_day_key = strtolower( current_time( 'l' ) ); // e.g. 'wednesday'.
	?>
	<section class="section-paper">
		<div class="container-narrow" style="text-align:center;">
			<span class="eyebrow"><?php esc_html_e( 'Our Promise', 'fcalri' ); ?></span>
			<h2 class="reveal"><?php esc_html_e( 'The mission of Franklin Court is to serve every resident with the utmost care, respect, and dignity — while preserving their independence.', 'fcalri' ); ?></h2>
			<p style="font-size:var(--fs-md); color:var(--c-slate); margin-top:var(--sp-3);" class="reveal">
				<?php esc_html_e( "We're a small community by design. That means our care team knows your loved one's name, their morning routine, and which grandchild's photo hangs in their room.", 'fcalri' ); ?>
			</p>
		</div>
	</section>

	<?php // 4. FEATURE 1: Heritage meets home ?>
	<?php
	$feature_eyebrow   = __( 'Our Setting', 'fcalri' );
	$feature_title     = __( 'Heritage meets home.', 'fcalri' );
	$feature_body      = '<p>' . sprintf(
		/* translators: %s: "Kaiser Mill complex" — wrapped in <strong>. */
		__( "We're housed in the award-winning %s — a thoughtfully restored textile mill in Bristol's historic district. The result is something rare in assisted living: rooms with character, sunlight through original mill windows, and a courtyard anchored by a 19th-century brick walkway.", 'fcalri' ),
		'<strong>' . esc_html__( 'Kaiser Mill complex', 'fcalri' ) . '</strong>'
	) . '</p>'
	. '<p>' . __( "Step outside and you're a five-minute walk from the heart of Bristol — Hope Street shops, the Independence Park waterfront, and neighbors who have known each other for generations. This isn't an out-of-town campus. It's a neighborhood.", 'fcalri' ) . '</p>';
	$feature_image     = 'courtyard-pathway.jpg';
	$feature_image_alt = __( 'The brick pathway through the courtyard at Franklin Court in Bristol, RI.', 'fcalri' );
	$feature_reverse   = false;
	$feature_bg        = 'section-cream';
	$feature_cta       = array(
		'url'   => fcalri_get_page_url( 'life-at' ),
		'label' => __( 'Explore our community', 'fcalri' ),
	);
	include locate_template( 'template-parts/feature-block.php' );
	?>

	<?php // 5. FEATURE 2: All-inclusive ?>
	<?php
	$feature_eyebrow   = __( 'Our Care', 'fcalri' );
	$feature_title     = __( 'All-inclusive means no surprises.', 'fcalri' );
	$feature_body      = '<p>' . __( 'One predictable monthly fee covers private apartments, three daily meals, housekeeping, medication management, personal care assistance, activities, transportation to appointments, and round-the-clock nursing. No tiered add-ons. No surprise invoices for "extras" you assumed were standard.', 'fcalri' ) . '</p>';
	$feature_list      = array(
		__( '24-hour personal emergency call response', 'fcalri' ),
		__( 'Assistance with bathing, dressing & grooming', 'fcalri' ),
		__( 'Medication management & pharmacy coordination', 'fcalri' ),
		__( 'Weekly housekeeping & personal laundry', 'fcalri' ),
		__( 'Wellness center & on-site clinic coordination', 'fcalri' ),
	);
	$feature_image     = 'community-group.jpg';
	$feature_image_alt = __( 'Franklin Court residents and a caregiver enjoying an outing together.', 'fcalri' );
	$feature_reverse   = true;
	$feature_bg        = '';
	$feature_cta       = array(
		'url'   => fcalri_get_page_url( 'tour' ),
		'label' => __( 'Talk with admissions', 'fcalri' ),
	);
	include locate_template( 'template-parts/feature-block.php' );
	?>

	<?php // 6. SERVICE GRID ?>
	<section class="section-cream">
		<div class="container-wide">
			<div class="section-head">
				<span class="eyebrow"><?php esc_html_e( 'Life at Franklin Court', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'Everything you need, included.', 'fcalri' ); ?></h2>
				<p><?php esc_html_e( 'From dining to the library to the wellness center — every service and amenity is part of the monthly fee. There are no hidden tiers.', 'fcalri' ); ?></p>
			</div>

			<div class="card-grid cols-3">
				<div class="card reveal">
					<div class="card-image">
						<?php fcalri_image( 'indoor-living-room.jpg', __( 'A sun-filled living room with comfortable armchairs.', 'fcalri' ) ); ?>
					</div>
					<div class="card-body">
						<div class="card-meta"><?php esc_html_e( 'Daily life', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Your private apartment', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'Studio, deluxe studio, or one-bedroom apartments — each with a kitchenette, walk-in shower, and individually controlled heat.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-image">
						<?php fcalri_image( 'sitting-room-coffee.jpg', __( 'A cozy sitting room with floral sofas and natural light.', 'fcalri' ) ); ?>
					</div>
					<div class="card-body">
						<div class="card-meta"><?php esc_html_e( 'Spaces', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Common rooms & parlors', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'Several inviting living rooms, a formal library, sunroom, media room with surround sound, and the East Bay Community Room for gatherings.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-image">
						<?php fcalri_image( 'courtyard-pathway.jpg', __( 'A brick path through the landscaped courtyard at Franklin Court.', 'fcalri' ) ); ?>
					</div>
					<div class="card-body">
						<div class="card-meta"><?php esc_html_e( 'Outdoors', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Enclosed courtyard', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'A landscaped, fully-enclosed outdoor courtyard with walking paths, patio seating, and space for cookouts during warmer months.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M3 5h18v14H3z M3 9h18 M7 13v4 M11 13v4 M15 13v4"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Wellness', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( '24-hour care', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'Nursing staff on-site around the clock. Personal emergency response in every apartment. Help with bathing, dressing, and medication management.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Dining', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Three daily meals', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'Full-service dining three times a day in our main dining room, with a private dining room available for family celebrations.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M2 12h4 M18 12h4 M12 2v4 M12 18v4"/><circle cx="12" cy="12" r="6"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Programming', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Activities & outings', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'Daily programming including exercise, walking groups, arts and crafts, games, and weekly outings to restaurants, parks, and Bristol landmarks.', 'fcalri' ); ?></p>
					</div>
				</div>
			</div>

			<div style="text-align:center; margin-top:var(--sp-5);">
				<a href="<?php echo esc_url( fcalri_get_page_url( 'life-at' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'See the full community', 'fcalri' ); ?></a>
			</div>
		</div>
	</section>

	<?php // 7. ACTIVITIES THIS WEEK
	$week_today = $current_day_key;
	include locate_template( 'template-parts/week-calendar.php' );
	?>

	<?php // 8. TESTIMONIAL / QUOTE
	$quote_text   = __( '"Moving my mother to Franklin Court was the hardest and best decision we made as a family. The staff didn\'t just take care of her — they loved her. For three years we watched her come back to herself in a way we didn\'t think was possible."', 'fcalri' );
	$quote_source = '<strong>' . esc_html__( 'Margaret R.', 'fcalri' ) . '</strong> · ' . esc_html__( 'Daughter of a Franklin Court resident', 'fcalri' );
	$quote_bg     = 'section-cream';
	include locate_template( 'template-parts/quote.php' );
	?>

	<?php // 9. CTA BAND
	$cta_eyebrow   = __( 'A New Beginning', 'fcalri' );
	$cta_title     = __( 'Come walk our halls.', 'fcalri' );
	$cta_body      = __( 'The best way to understand Franklin Court is to visit. Bring your family, share a meal in our dining room, and meet the people who will care for your loved one.', 'fcalri' );
	$cta_primary   = array(
		'url'   => fcalri_get_page_url( 'tour' ),
		'label' => __( 'Schedule a Visit', 'fcalri' ),
	);
	$cta_secondary = array(
		'url'   => 'tel:' . fcalri_phone_tel(),
		'label' => '📞 ' . fcalri_phone_display(),
	);
	include locate_template( 'template-parts/cta-band.php' );
	?>

</main>

<?php
get_footer();
