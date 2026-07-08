<?php
/**
 * Template Name: About
 *
 * @package fcalri
 */

get_header();
?>

<main id="main">

	<?php
	// Hero — same structure as the home page, but a different image + title.
	$hero_eyebrow   = __( 'Our Story', 'fcalri' );
	$hero_title     = __( 'A small, family-run residence with deep roots in Bristol.', 'fcalri' );
	$hero_lede      = __( 'Franklin Court has been part of the East Bay community for more than 30 years — first opened in 1993, and now operated as part of the East Bay Community Development Corporation family of programs.', 'fcalri' );
	$hero_image     = 'about-courtyard.jpg';
	$hero_image_alt = __( 'The courtyard at Franklin Court surrounded by historic Kaiser Mill brickwork.', 'fcalri' );
	$hero_primary   = null;
	$hero_secondary = null;
	$hero_trust     = array();
	include locate_template( 'template-parts/hero.php' );
	?>

	<?php // Mission & Philosophy ?>
	<section>
		<div class="container-narrow">
			<div class="section-head" style="text-align:center;">
				<span class="eyebrow"><?php esc_html_e( 'Mission & Philosophy', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'Care, respect, dignity — and the preservation of independence.', 'fcalri' ); ?></h2>
			</div>
			<p style="font-size:var(--fs-md); color:var(--c-ink-soft);">
				<?php esc_html_e( 'The mission of Franklin Court Assisted Living is to serve our Residents with the utmost care, respect, and dignity while preserving their independence.', 'fcalri' ); ?>
			</p>
			<p>
				<?php esc_html_e( "Franklin Court is part of the East Bay Community Development Corporation (EBCDC), a nonprofit that has served Rhode Island's East Bay since 1969. EBCDC operates a network of housing, child-care, and senior programs across the region — and Franklin Court is one of its flagship residences. As a nonprofit organization, we reinvest every dollar into staff training, building upkeep, and resident programming rather than into shareholder returns.", 'fcalri' ); ?>
			</p>
			<p>
				<?php esc_html_e( "Our philosophy is simple: assisted living should feel like home, not a hospital. That means smaller resident counts, longer-tenure caregivers, and a care plan built around each resident's life story — not a checklist of services.", 'fcalri' ); ?>
			</p>
		</div>
	</section>

	<?php // A home within a neighborhood ?>
	<section class="section-cream">
		<div class="container-narrow">
			<div class="section-head" style="text-align:center;">
				<span class="eyebrow"><?php esc_html_e( 'A home within a neighborhood', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'Walkable, historic, and connected.', 'fcalri' ); ?></h2>
			</div>
			<p>
				<?php esc_html_e( "Franklin Court sits inside Bristol's historic district, in the award-winning Kaiser Mill complex — a thoughtfully restored textile mill on the corner of Franklin and Wood. From our front door, residents are a five-minute walk to:", 'fcalri' ); ?>
			</p>
			<ul style="font-size:1.0625rem; line-height:1.8; color:var(--c-ink-soft);">
				<li><?php esc_html_e( 'Hope Street shops, restaurants, and the Bristol Theatre', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Independence Park and the Bristol Harbor waterfront', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Mt. Hope Farm and the Mount Hope Bridge viewpoint', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'The East Bay Bike Path', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Slater Park and the Audubon Society of Rhode Island', 'fcalri' ); ?></li>
			</ul>
			<p>
				<?php esc_html_e( "Outings to the local library, the Fourth of July parade, and Bristol's weekly farmers' market are regular events on the activity calendar. Our residents aren't hidden away — they're part of the town.", 'fcalri' ); ?>
			</p>
		</div>
	</section>

	<?php // Team — staff cards ?>
	<section>
		<div class="container-wide">
			<div class="section-head" style="text-align:center; margin-left:auto; margin-right:auto;">
				<span class="eyebrow"><?php esc_html_e( 'Our Team', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'The people who care for your family.', 'fcalri' ); ?></h2>
				<p><?php esc_html_e( 'Franklin Court is staffed around the clock. Our leadership team is here six days a week and reachable by phone or email any time.', 'fcalri' ); ?></p>
			</div>

			<div class="card-grid cols-3" style="margin-top:var(--sp-5);">
				<?php foreach ( fcalri_staff_directory() as $member ) : ?>
					<?php fcalri_render_staff_card( $member ); ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php // CTA — Come for a visit
	$cta_eyebrow   = __( 'A New Beginning', 'fcalri' );
	$cta_title     = __( 'Come for a visit.', 'fcalri' );
	$cta_body      = __( "Meet our team, share a meal with our residents, and see what makes Franklin Court different. We'd love to show you around.", 'fcalri' );
	$cta_primary   = array(
		'url'   => fcalri_get_page_url( 'tour' ),
		'label' => __( 'Schedule a visit', 'fcalri' ),
	);
	$cta_secondary = array(
		'url'   => fcalri_get_page_url( 'contact' ),
		'label' => __( 'Contact us', 'fcalri' ),
	);
	include locate_template( 'template-parts/cta-band.php' );
	?>

</main>

<?php
get_footer();
