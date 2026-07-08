<?php
/**
 * Template part: cta-band
 *
 * Dark call-to-action strip used on the home page and inner pages.
 *
 * @package fcalri
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cta_eyebrow   = isset( $cta_eyebrow ) ? (string) $cta_eyebrow : '';
$cta_title     = isset( $cta_title ) ? (string) $cta_title : '';
$cta_body      = isset( $cta_body ) ? (string) $cta_body : '';
$cta_primary   = isset( $cta_primary ) && is_array( $cta_primary ) ? $cta_primary : null;
$cta_secondary = isset( $cta_secondary ) && is_array( $cta_secondary ) ? $cta_secondary : null;
?>
<section class="section-dark">
	<div class="container-narrow" style="text-align:center;">
		<?php if ( $cta_eyebrow ) : ?>
			<span class="eyebrow" style="background:rgba(198,150,74,0.15); color:var(--c-gold);">
				<?php echo esc_html( $cta_eyebrow ); ?>
			</span>
		<?php endif; ?>
		<h2 style="font-size:clamp(2.25rem,5vw,4rem);"><?php echo esc_html( $cta_title ); ?></h2>
		<?php if ( $cta_body ) : ?>
			<p style="font-size:var(--fs-md); max-width:540px; margin:0 auto var(--sp-4);">
				<?php echo esc_html( $cta_body ); ?>
			</p>
		<?php endif; ?>
		<?php if ( $cta_primary || $cta_secondary ) : ?>
			<div class="btn-row" style="justify-content:center;">
				<?php if ( $cta_primary ) : ?>
					<a href="<?php echo esc_url( $cta_primary['url'] ); ?>" class="btn btn-primary">
						<?php echo esc_html( $cta_primary['label'] ); ?>
					</a>
				<?php endif; ?>
				<?php if ( $cta_secondary ) : ?>
					<a href="<?php echo esc_url( $cta_secondary['url'] ); ?>" class="btn btn-ghost" style="border-color:var(--c-cream); color:var(--c-cream);">
						<?php echo esc_html( $cta_secondary['label'] ); ?>
					</a>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
