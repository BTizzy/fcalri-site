<?php
/**
 * Template Name: Life at Franklin Court
 *
 * @package fcalri
 */

get_header();
?>

<main id="main">

	<?php
	$hero_eyebrow   = __( 'Life at Franklin Court', 'fcalri' );
	$hero_title     = __( 'A day shaped by what you love.', 'fcalri' );
	$hero_lede      = __( "Our residence is small on purpose — just 30 apartments — so that every resident is known by name. The building, the staff, and the programming are all designed to support a life that's rich, social, and deeply personal.", 'fcalri' );
	$hero_image     = 'courtyard-pathway.jpg';
	$hero_image_alt = __( 'Brick pathway through the landscaped courtyard at Franklin Court.', 'fcalri' );
	$hero_primary   = null;
	$hero_secondary = null;
	$hero_trust     = array();
	include locate_template( 'template-parts/hero.php' );
	?>

	<?php // The Setting ?>
	<section>
		<div class="container-narrow">
			<div class="section-head" style="text-align:center;">
				<span class="eyebrow"><?php esc_html_e( 'The Setting', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'The Kaiser Mill — a landmark, restored.', 'fcalri' ); ?></h2>
			</div>
			<p>
				<?php esc_html_e( 'Our home is the award-winning Kaiser Mill complex — a 19th-century textile mill in Bristol\'s historic district, thoughtfully restored in the early 1990s to combine original mill architecture with modern comfort. You\'ll see exposed brick, wide-plank pine floors, and oversized windows that fill the building with natural light.', 'fcalri' ); ?>
			</p>
			<p>
				<?php esc_html_e( "The result is something rare in assisted living: a residence with character, history, and a real sense of place. The Kaiser Mill redevelopment has won multiple preservation awards — and the building's original bones give our community a warmth you won't find in newer construction.", 'fcalri' ); ?>
			</p>
		</div>
	</section>

	<?php // Residence Features ?>
	<section class="section-cream">
		<div class="container-wide">
			<div class="section-head" style="text-align:center; margin-left:auto; margin-right:auto;">
				<span class="eyebrow"><?php esc_html_e( 'Residence Features', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'Common spaces to gather, rest, and create.', 'fcalri' ); ?></h2>
			</div>

			<div class="card-grid cols-3" style="margin-top:var(--sp-5);">
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M3 6h18v12H3z M3 10h18 M7 14h2 M11 14h6"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Dining', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Dining Room', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'Full-service main dining room with three meals a day, plus a private dining room for family celebrations.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M4 4h16v4H4z M4 10h10v10H4z M16 10h4v10h-4z"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Quiet', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Library', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'A formal library with comfortable seating, current periodicals, and a rotating collection of large-print books.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M5 11h14v8a2 2 0 01-2 2H7a2 2 0 01-2-2v-8z M8 7c0-1.5 1-3 2-3s2 1.5 2 3v4 M12 7c0-1.5 1-3 2-3s2 1.5 2 3v4"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Casual', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Café & Game Room', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'A casual café for cards, coffee, and conversation — the social heart of the residence.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M3 6l9 6 9-6 M3 6v12h18V6"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Create', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Arts & Crafts Room', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'A bright studio for painting, knitting, and weekly craft projects led by visiting artists.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 9h18 M7 14h4 M14 14h3"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Entertainment', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Media Room', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'A media room with surround sound and a large screen — for movies, sports, and Sunday concerts.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v3 M12 19v3 M2 12h3 M19 12h3 M5 5l2 2 M17 17l2 2 M5 19l2-2 M17 7l2-2"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Light', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Sunroom & Wellness Center', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'A sun-drenched sitting room plus a wellness center for on-site clinic visits and fitness programming.', 'fcalri' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php // All-Inclusive Services ?>
	<section>
		<div class="container-narrow">
			<div class="section-head" style="text-align:center;">
				<span class="eyebrow"><?php esc_html_e( 'All-Inclusive Services', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'One monthly fee. Nothing extra.', 'fcalri' ); ?></h2>
				<p><?php esc_html_e( "Every service below is part of your monthly fee. There are no tiered add-ons, no surprise invoices.", 'fcalri' ); ?></p>
			</div>
			<ul style="font-size:1.0625rem; line-height:1.8; color:var(--c-ink-soft); columns:2; column-gap:var(--sp-5);">
				<li><?php esc_html_e( 'Three meals daily in the main dining room', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Medication management & pharmacy coordination', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Help with bathing, dressing, and grooming', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Weekly housekeeping and personal laundry', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Transportation to medical appointments', 'fcalri' ); ?></li>
				<li><?php esc_html_e( '24-hour personal emergency response', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Round-the-clock on-site nursing', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Daily activities and weekly outings', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'All utilities (heat, electric, water, cable, Wi-Fi)', 'fcalri' ); ?></li>
				<li><?php esc_html_e( 'Wellness center access', 'fcalri' ); ?></li>
			</ul>
		</div>
	</section>

	<?php // A Day in the Life ?>
	<section class="section-cream">
		<div class="container-narrow">
			<div class="section-head" style="text-align:center;">
				<span class="eyebrow"><?php esc_html_e( 'A Day in the Life', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'No two days are quite the same.', 'fcalri' ); ?></h2>
			</div>
			<p>
				<?php esc_html_e( "Mornings at Franklin Court start with a slow breakfast in the dining room — pancakes on Wednesdays, fresh fruit every day — and the smell of coffee drifting down the hall. Some residents head straight to the exercise class or the walking group; others linger over the paper in the sunroom.", 'fcalri' ); ?>
			</p>
			<p>
				<?php esc_html_e( "Mid-morning is the activity heart of the day: a craft project, a Wii bowling tournament, a man-on-the-street interview about Bristol memories. The activities team runs four or five programs a day, and residents pick and choose what they want to do. Lunch is served family-style at noon, with the menu posted the night before.", 'fcalri' ); ?>
			</p>
			<p>
				<?php esc_html_e( "Afternoons often include an outing — a ride along the East Bay Bike Path, a stop at the farmers' market, a birthday lunch at a favorite Bristol restaurant. Back home, there's time for a nap, a card game, or a call with family. Evenings wind down with a movie in the media room, a glass of wine in the parlor, or a quiet chat on a bench in the courtyard.", 'fcalri' ); ?>
			</p>
		</div>
	</section>

	<?php // Photo Gallery — 4-6 photos
	$gallery_images = array(
		array( 'file' => 'indoor-living-room.jpg',  'alt' => __( 'A sun-filled living room with comfortable armchairs.', 'fcalri' ) ),
		array( 'file' => 'sitting-room-coffee.jpg',  'alt' => __( 'A cozy sitting room with floral sofas and natural light.', 'fcalri' ) ),
		array( 'file' => 'community-group.jpg',      'alt' => __( 'Franklin Court residents enjoying an outing together.', 'fcalri' ) ),
		array( 'file' => 'bristol-parade.jpg',       'alt' => __( 'Residents watching the Bristol Fourth of July parade.', 'fcalri' ) ),
		array( 'file' => 'courtyard-pathway.jpg',    'alt' => __( 'A brick path through the landscaped courtyard.', 'fcalri' ) ),
		array( 'file' => 'apartment-amenities.jpg',  'alt' => __( 'Apartment interior with comfortable seating and large windows.', 'fcalri' ) ),
	);
	?>
	<section>
		<div class="container-wide">
			<div class="section-head" style="text-align:center; margin-left:auto; margin-right:auto;">
				<span class="eyebrow"><?php esc_html_e( 'Photo Gallery', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'Moments from our home.', 'fcalri' ); ?></h2>
			</div>
			<div class="card-grid cols-3" style="margin-top:var(--sp-5);">
				<?php foreach ( $gallery_images as $img ) : ?>
					<div class="card reveal">
						<div class="card-image" style="aspect-ratio: 4 / 3;">
							<?php fcalri_image( $img['file'], $img['alt'] ); ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php // CTA — Schedule a tour
	$cta_eyebrow   = __( 'Visit us', 'fcalri' );
	$cta_title     = __( 'Come see Franklin Court for yourself.', 'fcalri' );
	$cta_body      = __( 'Tours are scheduled Monday through Saturday. Bring your family — we\'ll share a meal, walk the building, and answer every question.', 'fcalri' );
	$cta_primary   = array(
		'url'   => fcalri_get_page_url( 'tour' ),
		'label' => __( 'Schedule a tour', 'fcalri' ),
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
