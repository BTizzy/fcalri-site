<?php
/**
 * Template Name: Family Resources
 *
 * @package fcalri
 */

get_header();
?>

<main id="main">

	<?php
	$hero_eyebrow   = __( 'Family Resources', 'fcalri' );
	$hero_title     = 'Help for your <em>family.</em>';
	$hero_lede      = __( 'Three short guides written for the families we meet every week. No marketing speak, no pressure — just honest answers to the questions you\'re already asking.', 'fcalri' );
	$hero_image     = '';
	$hero_image_alt = '';
	$hero_primary   = null;
	$hero_secondary = null;
	$hero_trust     = array();
	// Use a hero block without an image.
	?>
	<section class="hero" style="background:var(--c-cream);">
		<div class="container">
			<div class="hero-text reveal" style="max-width:760px; padding:var(--sp-6) 0;">
				<span class="eyebrow"><?php esc_html_e( 'Family Resources', 'fcalri' ); ?></span>
				<h1 style="font-size:clamp(2.5rem, 5vw + 1rem, 4.5rem);"><?php echo wp_kses_post( $hero_title ); ?></h1>
				<p class="hero-lede"><?php echo esc_html( $hero_lede ); ?></p>
			</div>
		</div>
	</section>

	<?php // Three download cards
	$downloads = array(
		array(
			'title'       => __( 'Frequently Asked Questions (FAQs)', 'fcalri' ),
			'subtitle'    => __( '8 pages · PDF', 'fcalri' ),
			'description' => __( 'The eight questions families ask us most often: what assisted living really means, the application process, services included, costs, residents with dementia, visiting hours, laundry, and how transfers work.', 'fcalri' ),
			'url'         => home_url( '/files/Franklin-Court-FAQs.pdf' ),
		),
		array(
			'title'       => __( 'Independent vs. Assisted Living', 'fcalri' ),
			'subtitle'    => __( '4 pages · PDF', 'fcalri' ),
			'description' => __( 'A clear-eyed comparison of the two — what each provides, who they\'re designed for, and a side-by-side checklist to help you figure out which is the right fit for your family member.', 'fcalri' ),
			'url'         => home_url( '/files/Independent-vs-Assisted-Living.pdf' ),
		),
		array(
			'title'       => __( 'How Do I Know It\'s Time for Assisted Living?', 'fcalri' ),
			'subtitle'    => __( '3 pages · PDF', 'fcalri' ),
			'description' => __( 'A practical, compassionate checklist of seven signs — from medication mishaps to social isolation — to help families recognize when assisted living may be the right next step.', 'fcalri' ),
			'url'         => home_url( '/files/Is-It-Time-for-Assisted-Living.pdf' ),
		),
	);
	?>
	<section>
		<div class="container-wide">
			<div class="section-head" style="text-align:center; margin-left:auto; margin-right:auto;">
				<span class="eyebrow"><?php esc_html_e( 'Free downloads', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'Three guides, written for families.', 'fcalri' ); ?></h2>
				<p><?php esc_html_e( "We've been writing and revising these for years. They cover the questions we hear every week, in plain English.", 'fcalri' ); ?></p>
			</div>

			<div class="card-grid cols-3" style="margin-top:var(--sp-5);">
				<?php foreach ( $downloads as $dl ) : ?>
					<div class="card reveal">
						<div class="card-image" style="aspect-ratio: 4 / 3; background:linear-gradient(135deg, var(--c-cream), var(--c-paper)); display:grid; place-items:center;">
							<svg viewBox="0 0 24 24" width="80" height="80" fill="none" stroke="var(--c-accent)" stroke-width="1.2" aria-hidden="true"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z M14 2v6h6 M9 13h6 M9 17h6 M9 9h2"/></svg>
						</div>
						<div class="card-body">
							<div class="card-meta"><?php echo esc_html( $dl['subtitle'] ); ?></div>
							<h3 class="card-title"><?php echo esc_html( $dl['title'] ); ?></h3>
							<p class="card-text"><?php echo esc_html( $dl['description'] ); ?></p>
							<a href="<?php echo esc_url( $dl['url'] ); ?>" class="btn btn-secondary" style="width:100%;">
								<?php esc_html_e( 'Download PDF', 'fcalri' ); ?>
							</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php // Independent vs Assisted Living comparison ?>
	<section class="section-cream">
		<div class="container-wide">
			<div class="section-head" style="text-align:center; margin-left:auto; margin-right:auto;">
				<span class="eyebrow"><?php esc_html_e( 'Independent vs. Assisted Living', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'A side-by-side comparison.', 'fcalri' ); ?></h2>
			</div>

			<div style="display:grid; grid-template-columns: 1fr; gap:var(--sp-4);" class="compare-grid">
				<div class="card reveal" style="padding:var(--sp-4);">
					<div class="card-meta"><?php esc_html_e( 'Independent Living', 'fcalri' ); ?></div>
					<h3 class="card-title"><?php esc_html_e( 'For active adults who want a maintenance-free lifestyle.', 'fcalri' ); ?></h3>
					<ul style="font-size:1rem; line-height:1.7; color:var(--c-ink-soft); padding-left:1.25em;">
						<li><?php esc_html_e( 'No hands-on personal care', 'fcalri' ); ?></li>
						<li><?php esc_html_e( 'Meals usually optional or paid à la carte', 'fcalri' ); ?></li>
						<li><?php esc_html_e( 'Housekeeping and transportation often à la carte', 'fcalri' ); ?></li>
						<li><?php esc_html_e( 'Limited or no medication management', 'fcalri' ); ?></li>
						<li><?php esc_html_e( 'Best for residents who are largely self-sufficient', 'fcalri' ); ?></li>
					</ul>
				</div>
				<div class="card reveal" style="padding:var(--sp-4); border-color:var(--c-accent);">
					<div class="card-meta"><?php esc_html_e( 'Assisted Living', 'fcalri' ); ?></div>
					<h3 class="card-title"><?php esc_html_e( 'For adults who need help with daily activities — but want to stay social.', 'fcalri' ); ?></h3>
					<ul style="font-size:1rem; line-height:1.7; color:var(--c-ink-soft); padding-left:1.25em;">
						<li><?php esc_html_e( 'Help with bathing, dressing, grooming, and medication', 'fcalri' ); ?></li>
						<li><?php esc_html_e( 'Three daily meals included', 'fcalri' ); ?></li>
						<li><?php esc_html_e( 'Weekly housekeeping and personal laundry', 'fcalri' ); ?></li>
						<li><?php esc_html_e( '24-hour on-site nursing and emergency response', 'fcalri' ); ?></li>
						<li><?php esc_html_e( 'Daily activities, weekly outings, transportation', 'fcalri' ); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<?php // How to Tell It's Time — 7 signs ?>
	<section>
		<div class="container-narrow">
			<div class="section-head" style="text-align:center;">
				<span class="eyebrow"><?php esc_html_e( 'How to tell it\'s time', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'Seven signs families notice first.', 'fcalri' ); ?></h2>
				<p><?php esc_html_e( 'No single sign is decisive on its own. But if several apply to your family member, it may be time to start the conversation.', 'fcalri' ); ?></p>
			</div>
			<ol style="font-size:1.0625rem; line-height:1.7; color:var(--c-ink-soft); padding-left:1.5em; max-width:720px; margin:0 auto;">
				<li style="margin-bottom:var(--sp-2);"><strong><?php esc_html_e( 'Medication mistakes.', 'fcalri' ); ?></strong> <?php esc_html_e( 'Missed doses, double doses, or expired bottles piling up.', 'fcalri' ); ?></li>
				<li style="margin-bottom:var(--sp-2);"><strong><?php esc_html_e( 'Falls or near-falls.', 'fcalri' ); ?></strong> <?php esc_html_e( 'Stumbles on stairs, holding onto furniture, or reluctance to leave the house.', 'fcalri' ); ?></li>
				<li style="margin-bottom:var(--sp-2);"><strong><?php esc_html_e( 'Neglected housekeeping or personal care.', 'fcalri' ); ?></strong> <?php esc_html_e( 'Unwashed clothes, spoiled food, unopened mail, bathing less often.', 'fcalri' ); ?></li>
				<li style="margin-bottom:var(--sp-2);"><strong><?php esc_html_e( 'Memory lapses that affect safety.', 'fcalri' ); ?></strong> <?php esc_html_e( 'Forgetting to lock doors, leaving the stove on, getting lost in familiar places.', 'fcalri' ); ?></li>
				<li style="margin-bottom:var(--sp-2);"><strong><?php esc_html_e( 'Social isolation or withdrawal.', 'fcalri' ); ?></strong> <?php esc_html_e( 'Skipping church, missing appointments, loss of interest in hobbies.', 'fcalri' ); ?></li>
				<li style="margin-bottom:var(--sp-2);"><strong><?php esc_html_e( 'Caregiver exhaustion.', 'fcalri' ); ?></strong> <?php esc_html_e( 'A spouse or family member is burning out — sleep loss, stress, declining health.', 'fcalri' ); ?></li>
				<li style="margin-bottom:var(--sp-2);"><strong><?php esc_html_e( 'A recent hospitalization or new diagnosis.', 'fcalri' ); ?></strong> <?php esc_html_e( 'Recovery that\'s slower than expected — or a fall, stroke, or new diagnosis that changes the daily routine.', 'fcalri' ); ?></li>
			</ol>
		</div>
	</section>

	<?php // CTA
	$cta_eyebrow   = __( 'We\'re here to talk', 'fcalri' );
	$cta_title     = __( 'Want a confidential conversation?', 'fcalri' );
	$cta_body      = __( 'No tour required. Michael Gargano, our Admissions Director, is happy to take a call and walk you through what comes next — no pressure, no timeline.', 'fcalri' );
	$cta_primary   = array(
		'url'   => 'tel:14013969020',
		'label' => '📞 ' . esc_html__( 'Call Michael — (401) 396-9020', 'fcalri' ),
	);
	$cta_secondary = array(
		'url'   => 'mailto:MGargano@ebcdc.org?subject=' . rawurlencode( 'Family resources — ' ),
		'label' => esc_html__( 'Email admissions', 'fcalri' ),
	);
	include locate_template( 'template-parts/cta-band.php' );
	?>

</main>

<?php
get_footer();
