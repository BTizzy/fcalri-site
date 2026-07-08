<?php
/**
 * Template Name: Activities
 *
 * @package fcalri
 */

get_header();
?>

<main id="main">

	<?php
	$hero_eyebrow   = __( 'Activities & Outings', 'fcalri' );
	$hero_title     = __( 'A calendar shaped by our residents.', 'fcalri' );
	$hero_lede      = __( 'Our Activities Director meets monthly with residents to plan the upcoming programming. We honor what you loved before — and introduce you to what you might love next.', 'fcalri' );
	$hero_image     = 'community-group.jpg';
	$hero_image_alt = __( 'Franklin Court residents enjoying an outing with a member of the care team.', 'fcalri' );
	$hero_primary   = null;
	$hero_secondary = null;
	$hero_trust     = array();
	include locate_template( 'template-parts/hero.php' );
	?>

	<?php // Intro — programming philosophy ?>
	<section>
		<div class="container-narrow">
			<div class="section-head" style="text-align:center;">
				<span class="eyebrow"><?php esc_html_e( 'Programming philosophy', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( "Five days a week, never the same week twice.", 'fcalri' ); ?></h2>
			</div>
			<p>
				<?php esc_html_e( 'Programming at Franklin Court is built around six pillars: wellness, arts, music, outings, spiritual life, and social games. We aim for four or five activities a day, with a mix of in-house programs and off-site outings. Most programs are open to all residents — and we tailor the calendar to residents with varying levels of mobility, cognition, and interest.', 'fcalri' ); ?>
			</p>
			<p>
				<?php esc_html_e( "Outings are a regular highlight. Recent favorites include the Bristol Fourth of July parade, fall foliage rides down the East Bay Bike Path, weekly breakfast outings to the Farnsworth, and theater trips to the Bristol Theatre and Trinity Rep.", 'fcalri' ); ?>
			</p>
		</div>
	</section>

	<?php // Weekly calendar (same as home)
	$week_today        = '';
	$week_show_buttons = false;
	include locate_template( 'template-parts/week-calendar.php' );
	?>

	<?php // Sample monthly programming ?>
	<section class="section-cream">
		<div class="container-wide">
			<div class="section-head" style="text-align:center; margin-left:auto; margin-right:auto;">
				<span class="eyebrow"><?php esc_html_e( 'Sample monthly programming', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'Six pillars of programming.', 'fcalri' ); ?></h2>
			</div>

			<div class="card-grid cols-3" style="margin-top:var(--sp-5);">
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M4 12h2 M8 8v8 M12 5v14 M16 8v8 M20 12h-2"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Pillar 1', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Wellness & Fitness', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'Daily morning exercise class, walking groups, chair yoga, balance workshops, and on-site clinic visits with our nursing team.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 2l3 6 6 1-4.5 4 1 6-5.5-3-5.5 3 1-6L4 9l6-1z"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Pillar 2', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Arts & Creativity', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'Painting, knitting, watercolor workshops, adult coloring, and craft projects led by visiting artists from the Bristol Art Museum.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M9 18V5l12-2v13 M9 18a3 3 0 11-6 0 3 3 0 016 0z M21 16a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Pillar 3', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Music & Entertainment', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'Live musicians, Sunday concerts, sing-alongs, hymn nights, and classic-film screenings with popcorn in the media room.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M3 12h18 M3 6h18 M3 18h12"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Pillar 4', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Outings & Excursions', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'Weekly restaurant trips, scenic drives, library and museum visits, the Bristol Fourth of July parade, and fall foliage tours.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 2v6 M5 9l3 4 M19 9l-3 4 M3 22h18 M3 17h18"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Pillar 5', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Spiritual Life', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'Weekly Christian worship, Catholic Mass, Rosary, holiday services, and quiet time for personal reflection in the library.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="6" width="18" height="12" rx="2"/><circle cx="8" cy="12" r="1.5"/><circle cx="16" cy="12" r="1.5"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Pillar 6', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Games & Social', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'Bingo, Wii bowling, cards in the cafe, Pokeno, word games, and an old-fashioned ice-cream social every other Sunday.', 'fcalri' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php // Photo gallery ?>
	<section>
		<div class="container-wide">
			<div class="section-head" style="text-align:center; margin-left:auto; margin-right:auto;">
				<span class="eyebrow"><?php esc_html_e( 'In action', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'Photos from recent events.', 'fcalri' ); ?></h2>
			</div>
			<div class="card-grid cols-3" style="margin-top:var(--sp-5);">
				<div class="card reveal">
					<div class="card-image" style="aspect-ratio: 4 / 3;">
						<?php fcalri_image( 'bristol-parade.jpg', __( 'Residents watching the Bristol Fourth of July parade.', 'fcalri' ) ); ?>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-image" style="aspect-ratio: 4 / 3;">
						<?php fcalri_image( 'community-group.jpg', __( 'Franklin Court residents enjoying an outing together.', 'fcalri' ) ); ?>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-image" style="aspect-ratio: 4 / 3;">
						<?php fcalri_image( 'courtyard-pathway.jpg', __( 'A brick path through the landscaped courtyard.', 'fcalri' ) ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php // CTA — Download full calendar PDF
	$cta_eyebrow   = __( 'Take it with you', 'fcalri' );
	$cta_title     = __( 'Download the July calendar.', 'fcalri' );
	$cta_body      = __( 'Printable PDF with the full month of programs, outings, and special events. Updated every month — keep an eye on your inbox.', 'fcalri' );
	$cta_primary   = array(
		'url'   => home_url( '/files/July-2026-Calendar.pdf' ),
		'label' => __( 'Download July PDF', 'fcalri' ),
	);
	$cta_secondary = array(
		'url'   => fcalri_get_page_url( 'contact' ),
		'label' => __( 'Get on the email list', 'fcalri' ),
	);
	include locate_template( 'template-parts/cta-band.php' );
	?>

</main>

<?php
get_footer();
