<?php
/**
 * Template part: quote
 *
 * Pull-quote used on the front page.
 *
 * @package fcalri
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$quote_text   = isset( $quote_text ) ? (string) $quote_text : '';
$quote_source = isset( $quote_source ) ? (string) $quote_source : '';
$quote_bg     = isset( $quote_bg ) ? (string) $quote_bg : 'section-cream';
?>
<section class="<?php echo esc_attr( $quote_bg ); ?>">
	<div class="container-narrow">
		<div style="text-align:center;">
			<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--c-accent)" stroke-width="1.2" style="margin:0 auto var(--sp-3);" aria-hidden="true">
				<path d="M9 7H5a2 2 0 00-2 2v4a2 2 0 002 2h2v3a2 2 0 002 2h2V11H7M19 7h-4a2 2 0 00-2 2v4a2 2 0 002 2h2v3a2 2 0 002 2h2V11h-2"/>
			</svg>
			<blockquote class="quote">
				<?php echo esc_html( $quote_text ); ?>
			</blockquote>
			<?php if ( $quote_source ) : ?>
				<div class="quote-source" style="justify-content:center;">
					<div class="quote-avatar" aria-hidden="true"></div>
					<div><?php echo esc_html( $quote_source ); ?></div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
