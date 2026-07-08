<?php
/**
 * Template Name: Apartments
 *
 * @package fcalri
 */

get_header();
?>

<main id="main">

	<?php
	$hero_eyebrow   = __( 'Apartments', 'fcalri' );
	$hero_title     = __( 'Your private apartment.', 'fcalri' );
	$hero_lede      = __( 'Three floor plans, all with kitchenettes, walk-in showers, and large windows. Bring your own furniture — we\'ll bring the rest.', 'fcalri' );
	$hero_image     = 'apartment-bedroom.jpg';
	$hero_image_alt = __( 'A bright apartment bedroom with a large window and comfortable furnishings.', 'fcalri' );
	$hero_primary   = null;
	$hero_secondary = null;
	$hero_trust     = array();
	include locate_template( 'template-parts/hero.php' );
	?>

	<?php // Three unit type cards
	$unit_types = array(
		array(
			'name'        => __( 'Studio Apartment', 'fcalri' ),
			'size'        => '~330 sq ft',
			'description' => __( 'A cozy studio with a combined living and sleeping area. Ideal for residents who want a smaller footprint without giving up the comforts of home.', 'fcalri' ),
			'features'    => array(
				__( 'Kitchenette with refrigerator & microwave', 'fcalri' ),
				__( 'Walk-in shower with grab bars', 'fcalri' ),
				__( 'Large windows with courtyard view', 'fcalri' ),
				__( 'Individually controlled heat', 'fcalri' ),
				__( 'Emergency call system', 'fcalri' ),
			),
		),
		array(
			'name'        => __( 'Deluxe Studio', 'fcalri' ),
			'size'        => '~450 sq ft',
			'description' => __( 'Our most popular floor plan. A deluxe studio gives you a defined living area, more room for visiting family, and a kitchenette with full storage.', 'fcalri' ),
			'features'    => array(
				__( 'Larger kitchenette with breakfast bar', 'fcalri' ),
				__( 'Walk-in shower with built-in bench', 'fcalri' ),
				__( 'Defined living & sleeping areas', 'fcalri' ),
				__( 'Closet & storage room', 'fcalri' ),
				__( 'Large windows with courtyard view', 'fcalri' ),
				__( 'Emergency call system', 'fcalri' ),
			),
		),
		array(
			'name'        => __( 'One Bedroom', 'fcalri' ),
			'size'        => '~600 sq ft',
			'description' => __( 'A separate bedroom, a full living room, and a more spacious kitchenette. Best for couples or residents who want extra space for a home office or guest visits.', 'fcalri' ),
			'features'    => array(
				__( 'Separate bedroom with walk-in closet', 'fcalri' ),
				__( 'Full living room with dining nook', 'fcalri' ),
				__( 'Larger kitchenette with breakfast bar', 'fcalri' ),
				__( 'Walk-in shower with built-in bench', 'fcalri' ),
				__( 'Large windows with courtyard or street view', 'fcalri' ),
				__( 'Emergency call system', 'fcalri' ),
			),
		),
	);
	?>
	<section>
		<div class="container-wide">
			<div class="section-head" style="text-align:center; margin-left:auto; margin-right:auto;">
				<span class="eyebrow"><?php esc_html_e( 'Floor Plans', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'Three sizes. Same all-inclusive care.', 'fcalri' ); ?></h2>
				<p><?php esc_html_e( 'Every apartment is unfurnished so you can bring your own bed, dresser, and favorite chair. We provide the rest.', 'fcalri' ); ?></p>
			</div>

			<div class="card-grid cols-3" style="margin-top:var(--sp-5);">
				<?php foreach ( $unit_types as $unit ) : ?>
					<div class="card reveal">
						<div class="card-image" style="aspect-ratio: 4 / 3;">
							<?php fcalri_image( 'apartment-bedroom.jpg', $unit['name'] ); ?>
						</div>
						<div class="card-body">
							<div class="card-meta"><?php echo esc_html( $unit['size'] ); ?></div>
							<h3 class="card-title"><?php echo esc_html( $unit['name'] ); ?></h3>
							<p class="card-text"><?php echo esc_html( $unit['description'] ); ?></p>
							<ul style="font-size:0.9375rem; line-height:1.7; color:var(--c-ink-soft); padding-left:1.25em; margin:0 0 var(--sp-3);">
								<?php foreach ( $unit['features'] as $feature ) : ?>
									<li><?php echo esc_html( $feature ); ?></li>
								<?php endforeach; ?>
							</ul>
							<a href="<?php echo esc_url( fcalri_get_page_url( 'tour' ) ); ?>" class="btn btn-secondary" style="width:100%;">
								<?php esc_html_e( 'Schedule a tour', 'fcalri' ); ?>
							</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php // What's included ?>
	<section class="section-cream">
		<div class="container-narrow">
			<div class="section-head" style="text-align:center;">
				<span class="eyebrow"><?php esc_html_e( 'Included with every apartment', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'Everything in the monthly fee.', 'fcalri' ); ?></h2>
			</div>
			<ul style="font-size:1.0625rem; line-height:1.8; color:var(--c-ink-soft); columns:2; column-gap:var(--sp-5);">
				<li><?php esc_html_e( 'Heat, electric, water, and air conditioning', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Cable TV and Wi-Fi', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Three meals daily in the dining room', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Weekly housekeeping', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Personal laundry service', 'fcalri' ); ?></li>
				<li><?php esc_html_e( '24-hour personal emergency response', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Medication management', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Help with bathing, dressing, and grooming', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'All activities and weekly outings', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Transportation to medical appointments', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Wellness center access', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Use of all common spaces and the courtyard', 'fcalri' ); ?></li>
			</ul>
		</div>
	</section>

	<?php // Floor plans ?>
	<section>
		<div class="container-narrow" style="text-align:center;">
			<div class="section-head" style="text-align:center;">
				<span class="eyebrow"><?php esc_html_e( 'Floor plans', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'Detailed floor plans available on request.', 'fcalri' ); ?></h2>
			</div>
			<p style="color:var(--c-slate); max-width:560px; margin:0 auto var(--sp-4);">
				<?php esc_html_e( "We share detailed floor plans and a current availability list during the tour. If you'd like them in advance, just ask Michael Gargano — he'll send the package right over.", 'fcalri' ); ?>
			</p>
			<div class="btn-row" style="justify-content:center;">
				<a href="mailto:MGargano@ebcdc.org?subject=<?php echo esc_attr( rawurlencode( 'Floor plans request — Franklin Court' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Request floor plans', 'fcalri' ); ?></a>
				<a href="<?php echo esc_url( fcalri_get_page_url( 'tour' ) ); ?>" class="btn btn-secondary"><?php esc_html_e( 'Schedule a tour', 'fcalri' ); ?></a>
			</div>
		</div>
	</section>

	<?php // CTA
	$cta_eyebrow   = __( 'Move in', 'fcalri' );
	$cta_title     = __( 'Find the apartment that fits.', 'fcalri' );
	$cta_body      = __( 'Tour the residence, walk the floor plans, and meet the team. We\'ll save your spot on the waitlist while you decide.', 'fcalri' );
	$cta_primary   = array(
		'url'   => fcalri_get_page_url( 'tour' ),
		'label' => __( 'Schedule a tour', 'fcalri' ),
	);
	$cta_secondary = array(
		'url'   => 'tel:14013969020',
		'label' => '📞 ' . esc_html__( 'Call Michael — (401) 396-9020', 'fcalri' ),
	);
	include locate_template( 'template-parts/cta-band.php' );
	?>

</main>

<?php
get_footer();
