<?php
/**
 * Template Name: Contact
 *
 * @package fcalri
 */

get_header();
?>

<main id="main">

	<?php
	$hero_eyebrow   = __( 'Contact', 'fcalri' );
	$hero_title     = __( 'Get in touch.', 'fcalri' );
	$hero_lede      = __( 'Stop in for a tour, give us a call, or send us a note. We respond to every email within one business day.', 'fcalri' );
	$hero_image     = 'about-courtyard.jpg';
	$hero_image_alt = __( 'The courtyard at Franklin Court in Bristol, RI.', 'fcalri' );
	$hero_primary   = null;
	$hero_secondary = null;
	$hero_trust     = array();
	include locate_template( 'template-parts/hero.php' );
	?>

	<?php // Three-up: Address, Phone, Email ?>
	<section>
		<div class="container-wide">
			<div class="card-grid cols-3">
				<div class="card reveal" style="padding:var(--sp-4); text-align:center;">
					<div class="card-icon" style="margin-left:auto; margin-right:auto;">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
					</div>
					<div class="card-meta"><?php esc_html_e( 'Visit', 'fcalri' ); ?></div>
					<h3 class="card-title"><?php esc_html_e( 'Our address', 'fcalri' ); ?></h3>
					<p class="card-text">
						<?php echo esc_html( fcalri_address_line1() ); ?><br>
						<?php echo esc_html( fcalri_address_line2() ); ?>
					</p>
				</div>
				<div class="card reveal" style="padding:var(--sp-4); text-align:center;">
					<div class="card-icon" style="margin-left:auto; margin-right:auto;">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.05-.24c1.12.37 2.33.57 3.54.57a1 1 0 011 1V20a1 1 0 01-1 1A18 18 0 012 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.21.2 2.42.57 3.54a1 1 0 01-.24 1.05l-2.2 2.2z"/></svg>
					</div>
					<div class="card-meta"><?php esc_html_e( 'Call', 'fcalri' ); ?></div>
					<h3 class="card-title"><?php esc_html_e( 'Front desk', 'fcalri' ); ?></h3>
					<p class="card-text">
						<a href="tel:<?php echo esc_attr( fcalri_phone_tel() ); ?>" style="color:var(--c-ink-soft); text-decoration:none;">
							<?php echo esc_html( fcalri_phone_display() ); ?>
						</a><br>
						<small style="color:var(--c-slate);"><?php echo esc_html( fcalri_hours_weekday() ); ?></small>
					</p>
				</div>
				<div class="card reveal" style="padding:var(--sp-4); text-align:center;">
					<div class="card-icon" style="margin-left:auto; margin-right:auto;">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>
					</div>
					<div class="card-meta"><?php esc_html_e( 'Email', 'fcalri' ); ?></div>
					<h3 class="card-title"><?php esc_html_e( 'General mailbox', 'fcalri' ); ?></h3>
					<p class="card-text">
						<a href="mailto:<?php echo esc_attr( fcalri_email_main() ); ?>" style="color:var(--c-ink-soft); text-decoration:none;">
							<?php echo esc_html( fcalri_email_main() ); ?>
						</a><br>
						<small style="color:var(--c-slate);"><?php esc_html_e( 'Reply within 1 business day', 'fcalri' ); ?></small>
					</p>
				</div>
			</div>
		</div>
	</section>

	<?php // Hours card ?>
	<section class="section-cream">
		<div class="container-narrow">
			<div class="section-head" style="text-align:center;">
				<span class="eyebrow"><?php esc_html_e( 'Hours', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'When the front desk is staffed.', 'fcalri' ); ?></h2>
			</div>

			<div class="card" style="padding:var(--sp-4); max-width:600px; margin:0 auto;">
				<table style="width:100%; border-collapse:collapse;">
					<tbody>
						<tr>
							<th scope="row" style="text-align:left; padding:var(--sp-2) 0; font-weight:600; color:var(--c-ink); border-bottom:1px solid var(--c-line-soft);"><?php esc_html_e( 'Front desk', 'fcalri' ); ?></th>
							<td style="text-align:right; padding:var(--sp-2) 0; color:var(--c-ink-soft); border-bottom:1px solid var(--c-line-soft);"><?php echo esc_html( fcalri_hours_weekday() ); ?></td>
						</tr>
						<tr>
							<th scope="row" style="text-align:left; padding:var(--sp-2) 0; font-weight:600; color:var(--c-ink); border-bottom:1px solid var(--c-line-soft);"><?php esc_html_e( 'Weekends & holidays', 'fcalri' ); ?></th>
							<td style="text-align:right; padding:var(--sp-2) 0; color:var(--c-ink-soft); border-bottom:1px solid var(--c-line-soft);"><?php echo esc_html( fcalri_hours_weekend() ); ?></td>
						</tr>
						<tr>
							<th scope="row" style="text-align:left; padding:var(--sp-2) 0; font-weight:600; color:var(--c-ink);"><?php esc_html_e( 'Admissions', 'fcalri' ); ?></th>
							<td style="text-align:right; padding:var(--sp-2) 0; color:var(--c-ink-soft);"><?php esc_html_e( 'By appointment', 'fcalri' ); ?></td>
						</tr>
					</tbody>
				</table>
				<p style="margin-top:var(--sp-3); font-size:0.9375rem; color:var(--c-slate); text-align:center;">
					<?php esc_html_e( 'Care is on-site 24/7 — the front desk hours are for visitors, tours, and general inquiries.', 'fcalri' ); ?>
				</p>
			</div>
		</div>
	</section>

	<?php // Staff directory ?>
	<section>
		<div class="container-wide">
			<div class="section-head" style="text-align:center; margin-left:auto; margin-right:auto;">
				<span class="eyebrow"><?php esc_html_e( 'Staff directory', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'Reach out to the right person.', 'fcalri' ); ?></h2>
				<p><?php esc_html_e( "Each member of our leadership team has a direct line. Use the directory below to reach the person best suited to your question.", 'fcalri' ); ?></p>
			</div>

			<div class="card-grid cols-3" style="margin-top:var(--sp-5);">
				<?php foreach ( fcalri_staff_directory() as $member ) : ?>
					<?php fcalri_render_staff_card( $member ); ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php // Contact form — mailto for now
	$mailto = fcalri_email_main();
	$mailto_subject = rawurlencode( 'Franklin Court — Website inquiry' );
	?>
	<section class="section-cream">
		<div class="container-narrow">
			<div class="section-head" style="text-align:center;">
				<span class="eyebrow"><?php esc_html_e( 'Send a message', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( "Tell us a bit about what you're looking for.", 'fcalri' ); ?></h2>
				<p><?php esc_html_e( "We'll reply within one business day. For urgent questions, please call the front desk.", 'fcalri' ); ?></p>
			</div>

			<form class="reveal" action="mailto:<?php echo esc_attr( $mailto ); ?>?subject=<?php echo esc_attr( $mailto_subject ); ?>" method="post" enctype="text/plain" data-ajax style="background:var(--c-white); padding:var(--sp-4); border-radius:var(--r-md); border:1px solid var(--c-line-soft);">
				<div class="form-grid cols-2">
					<div class="form-row">
						<label for="fcalri-contact-name"><?php esc_html_e( 'Your name', 'fcalri' ); ?></label>
						<input type="text" id="fcalri-contact-name" name="name" required>
					</div>
					<div class="form-row">
						<label for="fcalri-contact-phone"><?php esc_html_e( 'Phone', 'fcalri' ); ?></label>
						<input type="tel" id="fcalri-contact-phone" name="phone">
					</div>
				</div>
				<div class="form-row">
					<label for="fcalri-contact-email"><?php esc_html_e( 'Email', 'fcalri' ); ?></label>
					<input type="email" id="fcalri-contact-email" name="email" required>
				</div>
				<div class="form-row">
					<label for="fcalri-contact-message"><?php esc_html_e( 'Message', 'fcalri' ); ?></label>
					<textarea id="fcalri-contact-message" name="message" rows="6" required></textarea>
				</div>
				<button type="submit" class="btn btn-primary" style="width:100%;"><?php esc_html_e( 'Send message', 'fcalri' ); ?></button>
				<p style="font-size:0.8125rem; color:var(--c-slate); margin-top:var(--sp-2); text-align:center;">
					<?php esc_html_e( "Submitting opens your email client with the message pre-filled. We never share your information.", 'fcalri' ); ?>
				</p>
			</form>
		</div>
	</section>

	<?php // Map placeholder
	$map_query = fcalri_address_map_query();
	?>
	<section>
		<div class="container-wide">
			<div class="section-head" style="text-align:center; margin-left:auto; margin-right:auto;">
				<span class="eyebrow"><?php esc_html_e( 'Find us', 'fcalri' ); ?></span>
				<h2><?php esc_html_e( 'In the heart of Bristol, RI.', 'fcalri' ); ?></h2>
			</div>
			<div style="border-radius:var(--r-md); overflow:hidden; border:1px solid var(--c-line-soft); aspect-ratio: 21 / 9;">
				<iframe
					width="100%"
					height="100%"
					style="border:0; min-height:360px;"
					title="<?php esc_attr_e( 'Map of Franklin Court', 'fcalri' ); ?>"
					src="https://www.google.com/maps?q=<?php echo esc_attr( $map_query ); ?>&output=embed"
					loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"
					allowfullscreen
				></iframe>
			</div>
		</div>
	</section>

	<?php // CTA
	$cta_eyebrow   = __( 'Come see us', 'fcalri' );
	$cta_title     = __( 'Take a tour.', 'fcalri' );
	$cta_body      = __( "Tours are scheduled Monday through Saturday. We'll save you a parking spot and put the coffee on.", 'fcalri' );
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
