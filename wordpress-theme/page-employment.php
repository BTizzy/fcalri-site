<?php
/**
 * Template Name: Employment
 *
 * @package fcalri
 */

get_header();
?>

<main id="main">

	<?php
	$hero_eyebrow   = __( 'Careers', 'fcalri' );
	$hero_title     = __( 'Join our team.', 'fcalri' );
	$hero_lede      = __( "We hire for heart, train for skill, and keep our team small enough that everyone knows your name. If caring for older adults is your calling, we'd love to meet you.", 'fcalri' );
	$hero_image     = 'community-group.jpg';
	$hero_image_alt = __( 'A caregiver and resident at Franklin Court.', 'fcalri' );
	$hero_primary   = null;
	$hero_secondary = null;
	$hero_trust     = array();
	include locate_template( 'template-parts/hero.php' );
	?>

	<?php // Why work here ?>
	<section>
		<div class="container-wide">
			<div class="section-head" style="text-align:center; margin-left:auto; margin-right:auto;">
				<span class="eyebrow"><?php esc_html_e( 'Why work at Franklin Court', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'A workplace that takes care of its caregivers.', 'fcalri' ); ?></h2>
				<p><?php esc_html_e( "We're a small, family-run residence — and that extends to our staff. Tenure here is long, and that means consistency for our residents.", 'fcalri' ); ?></p>
			</div>

			<div class="card-grid cols-3" style="margin-top:var(--sp-5);">
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 2l3 6 6 1-4.5 4 1 6-5.5-3-5.5 3 1-6L4 9l6-1z"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Benefit 1', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Predictable scheduling', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'Set weekly hours. Rotating weekends. No mandatory double-shifts. We work hard to make sure our team has a life outside work.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M8 9h8 M8 13h6"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Benefit 2', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Health & dental', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'Comprehensive medical, dental, and vision insurance. Paid time off. Retirement plan with employer match.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M2 12h4l3-9 4 18 3-9h6"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Benefit 3', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Tuition reimbursement', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'We pay for CNA, LPN, and RN certifications, plus continuing education. Grow your career here.', 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M4 22a8 8 0 0116 0"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Benefit 4', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Small team, real relationships', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( "Our team is under 40 people. You'll know every resident by name — and they'll know you. That's rare in senior care.", 'fcalri' ); ?></p>
					</div>
				</div>
				<div class="card reveal">
					<div class="card-body" style="padding:var(--sp-4);">
						<div class="card-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 2v20 M2 12h20"/></svg>
						</div>
						<div class="card-meta"><?php esc_html_e( 'Benefit 5', 'fcalri' ); ?></div>
						<h3 class="card-title"><?php esc_html_e( 'Nonprofit mission', 'fcalri' ); ?></h3>
						<p class="card-text"><?php esc_html_e( 'As part of EBCDC, every hour you work supports a 50-year mission of community service in the East Bay.', 'fcalri' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php // Open positions
	$open_positions = array(
		array(
			'title'       => __( 'RI Licensed Medication Aides', 'fcalri' ),
			'type'        => __( 'Full-time · Part-time', 'fcalri' ),
			'description' => __( 'Administer medications per physician orders, document in MAR, and report changes in resident condition to the nursing team.', 'fcalri' ),
		),
		array(
			'title'       => __( 'RI Licensed Nursing Assistants (CNAs)', 'fcalri' ),
			'type'        => __( 'Full-time · Part-time · Per diem', 'fcalri' ),
			'description' => __( 'Provide hands-on personal care, assist with ADLs, support residents with mobility, and document daily care.', 'fcalri' ),
		),
		array(
			'title'       => __( 'Housekeepers', 'fcalri' ),
			'type'        => __( 'Full-time', 'fcalri' ),
			'description' => __( 'Clean resident apartments, common spaces, and laundry. We use safe, low-VOC products and full training is provided.', 'fcalri' ),
		),
		array(
			'title'       => __( 'Front Desk Receptionists', 'fcalri' ),
			'type'        => __( 'Part-time · Weekends', 'fcalri' ),
			'description' => __( 'Greet visitors, answer phones, and support the administrator with general office tasks. Friendly demeanor required.', 'fcalri' ),
		),
		array(
			'title'       => __( 'Dining Servers', 'fcalri' ),
			'type'        => __( 'Part-time', 'fcalri' ),
			'description' => __( 'Serve meals, assist residents with menu choices, and help with light kitchen clean-up. No experience required — we train.', 'fcalri' ),
		),
	);
	?>
	<section class="section-cream">
		<div class="container-wide">
			<div class="section-head" style="text-align:center; margin-left:auto; margin-right:auto;">
				<span class="eyebrow"><?php esc_html_e( 'Open positions', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( "We're hiring across the residence.", 'fcalri' ); ?></h2>
				<p><?php esc_html_e( "Don't see your role? We always want to meet great caregivers and hospitality staff — send a resume anyway.", 'fcalri' ); ?></p>
			</div>

			<div style="display:grid; gap:var(--sp-3); max-width:780px; margin:0 auto;">
				<?php foreach ( $open_positions as $pos ) : ?>
					<div class="card reveal" style="padding:var(--sp-4);">
						<div style="display:flex; justify-content:space-between; align-items:baseline; flex-wrap:wrap; gap:var(--sp-2);">
							<h3 class="card-title" style="margin:0; font-size:var(--fs-lg);"><?php echo esc_html( $pos['title'] ); ?></h3>
							<div class="card-meta" style="margin:0;"><?php echo esc_html( $pos['type'] ); ?></div>
						</div>
						<p class="card-text" style="margin-top:var(--sp-2);"><?php echo esc_html( $pos['description'] ); ?></p>
					</div>
				<?php endforeach; ?>
			</div>

			<div style="text-align:center; margin-top:var(--sp-5);">
				<a href="mailto:MGargano@ebcdc.org?subject=<?php echo esc_attr( rawurlencode( 'Application — Franklin Court' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Download / email application', 'fcalri' ); ?></a>
			</div>
		</div>
	</section>

	<?php // Quote
	$quote_text   = __( '"I came to Franklin Court six years ago, thinking I\'d stay a year or two. The residents became like family, and the team became my friends. Now I can\'t imagine working anywhere else."', 'fcalri' );
	$quote_source = '<strong>' . esc_html__( 'Pat S.', 'fcalri' ) . '</strong> · ' . esc_html__( 'CNA, Franklin Court', 'fcalri' );
	$quote_bg     = '';
	include locate_template( 'template-parts/quote.php' );
	?>

	<?php // Contact
	$mgargano = array(
		'name'  => 'Michael Gargano',
		'role'  => __( 'Admissions Director / Property Manager', 'fcalri' ),
		'email' => 'MGargano@ebcdc.org',
		'phone' => '401-396-9020',
	);
	?>
	<section>
		<div class="container-narrow">
			<div class="section-head" style="text-align:center;">
				<span class="eyebrow"><?php esc_html_e( 'Hiring inquiries', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'Talk to Michael.', 'fcalri' ); ?></h2>
				<p><?php esc_html_e( "Send a resume, ask about a specific role, or just introduce yourself. Michael reads every email personally.", 'fcalri' ); ?></p>
			</div>
			<div style="display:grid; grid-template-columns: 1fr; max-width:480px; margin:0 auto;">
				<?php fcalri_render_staff_card( $mgargano ); ?>
			</div>
		</div>
	</section>

	<?php // CTA
	$cta_eyebrow   = __( 'Apply today', 'fcalri' );
	$cta_title     = __( 'Ready to join the team?', 'fcalri' );
	$cta_body      = __( 'Send your resume, drop off an application, or call to set up an interview. We respond to every applicant.', 'fcalri' );
	$cta_primary   = array(
		'url'   => 'mailto:MGargano@ebcdc.org?subject=' . rawurlencode( 'Application — Franklin Court' ),
		'label' => __( 'Email your resume', 'fcalri' ),
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
