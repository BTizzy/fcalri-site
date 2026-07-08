<?php
/**
 * Template Name: Schedule a Tour
 *
 * Single-purpose landing page — the main conversion form for new families.
 *
 * @package fcalri
 */

get_header();
?>

<main id="main">

	<?php
	$hero_eyebrow   = __( 'Schedule a tour', 'fcalri' );
	$hero_title     = __( 'Come walk our halls.', 'fcalri' );
	$hero_lede      = __( "Tours are scheduled Monday through Saturday, last about 45 minutes, and include a meal in our dining room. Bring your family — there's plenty of room at the table.", 'fcalri' );
	$hero_image     = 'courtyard-pathway.jpg';
	$hero_image_alt = __( 'The brick pathway through the courtyard at Franklin Court.', 'fcalri' );
	$hero_primary   = null;
	$hero_secondary = null;
	$hero_trust     = array();
	include locate_template( 'template-parts/hero.php' );
	?>

	<?php // Tour form
	$mg_email = 'MGargano@ebcdc.org';
	$subject  = rawurlencode( 'Franklin Court — Tour request' );
	?>
	<section>
		<div class="container-narrow">
			<div class="section-head" style="text-align:center;">
				<span class="eyebrow"><?php esc_html_e( 'Tour request', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'Tell us a bit about your visit.', 'fcalri' ); ?></h2>
				<p><?php esc_html_e( "We'll confirm your tour time by phone or email within one business day.", 'fcalri' ); ?></p>
			</div>

			<form class="reveal" action="mailto:<?php echo esc_attr( $mg_email ); ?>?subject=<?php echo esc_attr( $subject ); ?>" method="post" enctype="text/plain" data-ajax style="background:var(--c-white); padding:var(--sp-4); border-radius:var(--r-md); border:1px solid var(--c-line-soft);">
				<div class="form-grid cols-2">
					<div class="form-row">
						<label for="fcalri-tour-name"><?php esc_html_e( 'Your name', 'fcalri' ); ?></label>
						<input type="text" id="fcalri-tour-name" name="name" required>
					</div>
					<div class="form-row">
						<label for="fcalri-tour-phone"><?php esc_html_e( 'Phone', 'fcalri' ); ?></label>
						<input type="tel" id="fcalri-tour-phone" name="phone" required>
					</div>
				</div>
				<div class="form-row">
					<label for="fcalri-tour-email"><?php esc_html_e( 'Email', 'fcalri' ); ?></label>
					<input type="email" id="fcalri-tour-email" name="email" required>
				</div>
				<div class="form-row">
					<label for="fcalri-tour-date"><?php esc_html_e( 'Preferred tour date', 'fcalri' ); ?></label>
					<input type="date" id="fcalri-tour-date" name="preferred_date">
				</div>
				<div class="form-row">
					<label for="fcalri-tour-message"><?php esc_html_e( 'Anything else we should know?', 'fcalri' ); ?></label>
					<textarea id="fcalri-tour-message" name="message" rows="5" placeholder="<?php esc_attr_e( 'Who is the tour for? Any accessibility needs? Questions about care levels or pricing?', 'fcalri' ); ?>"></textarea>
				</div>
				<button type="submit" class="btn btn-primary" style="width:100%;"><?php esc_html_e( 'Request my tour', 'fcalri' ); ?></button>
				<p style="font-size:0.8125rem; color:var(--c-slate); margin-top:var(--sp-2); text-align:center;">
					<?php esc_html_e( "Submitting opens your email client with the request pre-filled. We respond within one business day.", 'fcalri' ); ?>
				</p>
			</form>
		</div>
	</section>

	<?php // What to expect
	$what_to_expect = array(
		array(
			'step'  => '1',
			'title' => __( 'A warm welcome', 'fcalri' ),
			'body'  => __( "Michael meets you at the front door, offers coffee, and walks you through the building at your pace.", 'fcalri' ),
		),
		array(
			'step'  => '2',
			'title' => __( 'A tour of the residence', 'fcalri' ),
			'body'  => __( "Common rooms, the courtyard, a model apartment, and the dining room. We'll stop wherever you have questions.", 'fcalri' ),
		),
		array(
			'step'  => '3',
			'title' => __( 'A meal together', 'fcalri' ),
			'body'  => __( "Lunch or an afternoon snack in the dining room. We want you to taste what daily life is like.", 'fcalri' ),
		),
		array(
			'step'  => '4',
			'title' => __( 'Time for questions', 'fcalri' ),
			'body'  => __( "No script. No pitch. Michael takes whatever time you need to answer — pricing, care levels, the waitlist, all of it.", 'fcalri' ),
		),
	);
	?>
	<section class="section-cream">
		<div class="container-wide">
			<div class="section-head" style="text-align:center; margin-left:auto; margin-right:auto;">
				<span class="eyebrow"><?php esc_html_e( 'What to expect', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'Your visit, step by step.', 'fcalri' ); ?></h2>
			</div>

			<div class="card-grid cols-3" style="margin-top:var(--sp-5);">
				<?php foreach ( $what_to_expect as $step ) : ?>
					<div class="card reveal" style="padding:var(--sp-4);">
						<div style="font-family:var(--f-display); font-size:3rem; font-weight:400; color:var(--c-accent); line-height:1; margin-bottom:var(--sp-2);"><?php echo esc_html( $step['step'] ); ?></div>
						<h3 class="card-title" style="font-size:var(--fs-lg);"><?php echo esc_html( $step['title'] ); ?></h3>
						<p class="card-text"><?php echo esc_html( $step['body'] ); ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php // CTA
	$cta_eyebrow   = __( 'Prefer to call?', 'fcalri' );
	$cta_title     = __( "We'd love to hear from you.", 'fcalri' );
	$cta_body      = __( 'Michael Gargano, our Admissions Director, takes calls Monday through Friday, 8 AM to 6 PM. He can answer questions, send floor plans, or set up a tour.', 'fcalri' );
	$cta_primary   = array(
		'url'   => 'tel:14013969020',
		'label' => '📞 ' . esc_html__( 'Call Michael — (401) 396-9020', 'fcalri' ),
	);
	$cta_secondary = array(
		'url'   => 'tel:' . fcalri_phone_tel(),
		'label' => '📞 ' . esc_html__( 'Front desk — ', 'fcalri' ) . fcalri_phone_display(),
	);
	include locate_template( 'template-parts/cta-band.php' );
	?>

</main>

<?php
get_footer();
