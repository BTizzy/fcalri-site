<?php
/**
 * Template part: feature-block
 *
 * Two-column feature: image + text. Mirrors the .feature / .feature.reverse
 * blocks in the static site.
 *
 * @package fcalri
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$feature_eyebrow   = isset( $feature_eyebrow ) ? (string) $feature_eyebrow : '';
$feature_title     = isset( $feature_title ) ? (string) $feature_title : '';
$feature_body      = isset( $feature_body ) ? $feature_body : ''; // may be HTML
$feature_list      = isset( $feature_list ) && is_array( $feature_list ) ? $feature_list : array();
$feature_image     = isset( $feature_image ) ? (string) $feature_image : '';
$feature_image_alt = isset( $feature_image_alt ) ? (string) $feature_image_alt : '';
$feature_reverse   = ! empty( $feature_reverse );
$feature_cta       = isset( $feature_cta ) && is_array( $feature_cta ) ? $feature_cta : null;
$feature_bg        = isset( $feature_bg ) ? (string) $feature_bg : '';
?>
<?php if ( $feature_bg ) : ?>
<section class="<?php echo esc_attr( $feature_bg ); ?>">
<?php else : ?>
<section>
<?php endif; ?>
	<div class="container-wide">
		<div class="feature<?php echo $feature_reverse ? ' reverse' : ''; ?>">
			<div class="feature-image reveal">
				<?php if ( $feature_image ) : ?>
					<?php fcalri_image( $feature_image, $feature_image_alt ); ?>
				<?php endif; ?>
			</div>
			<div class="feature-text reveal">
				<?php if ( $feature_eyebrow ) : ?>
					<span class="eyebrow"><?php echo esc_html( $feature_eyebrow ); ?></span>
				<?php endif; ?>
				<h2><?php echo wp_kses_post( $feature_title ); ?></h2>
				<?php if ( is_string( $feature_body ) && $feature_body !== '' ) : ?>
					<?php echo wp_kses_post( $feature_body ); ?>
				<?php endif; ?>
				<?php if ( ! empty( $feature_list ) ) : ?>
					<ul style="font-size:1.0625rem; line-height:1.8; color:var(--c-ink-soft);">
						<?php foreach ( $feature_list as $li ) : ?>
							<li><?php echo esc_html( $li ); ?></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
				<?php if ( $feature_cta ) : ?>
					<a href="<?php echo esc_url( $feature_cta['url'] ); ?>" class="btn btn-secondary">
						<?php echo esc_html( $feature_cta['label'] ); ?>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
