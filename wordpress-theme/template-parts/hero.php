<?php
/**
 * Template part: hero
 *
 * Used by front-page.php and the page-* templates.
 *
 * Available vars when included:
 *   $hero_eyebrow   (string)  Optional eyebrow text.
 *   $hero_title     (string)  H1 (may contain <em> for italic accent).
 *   $hero_lede      (string)  Optional lead paragraph.
 *   $hero_image     (string)  Image filename under /assets/images/.
 *   $hero_image_alt (string)  Alt text for the image.
 *   $hero_primary   (array)   Optional [ 'url' => …, 'label' => … ] primary CTA.
 *   $hero_secondary (array)   Optional secondary CTA.
 *   $hero_trust     (array)   Optional array of trust-strip items.
 *
 * @package fcalri
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero_eyebrow   = isset( $hero_eyebrow ) ? (string) $hero_eyebrow : '';
$hero_title     = isset( $hero_title ) ? (string) $hero_title : '';
$hero_lede      = isset( $hero_lede ) ? (string) $hero_lede : '';
$hero_image     = isset( $hero_image ) ? (string) $hero_image : '';
$hero_image_alt = isset( $hero_image_alt ) ? (string) $hero_image_alt : '';
$hero_primary   = isset( $hero_primary ) && is_array( $hero_primary ) ? $hero_primary : null;
$hero_secondary = isset( $hero_secondary ) && is_array( $hero_secondary ) ? $hero_secondary : null;
$hero_trust     = isset( $hero_trust ) && is_array( $hero_trust ) ? $hero_trust : array();
?>
<section class="hero">
	<div class="container-wide hero-grid">
		<div class="hero-text reveal">
			<?php if ( $hero_eyebrow ) : ?>
				<span class="eyebrow"><?php echo esc_html( $hero_eyebrow ); ?></span>
			<?php endif; ?>
			<h1><?php echo wp_kses_post( $hero_title ); ?></h1>
			<?php if ( $hero_lede ) : ?>
				<p class="hero-lede"><?php echo wp_kses_post( $hero_lede ); ?></p>
			<?php endif; ?>

			<?php if ( $hero_primary || $hero_secondary ) : ?>
				<div class="btn-row">
					<?php if ( $hero_primary ) : ?>
						<a href="<?php echo esc_url( $hero_primary['url'] ); ?>" class="btn btn-primary">
							<?php echo esc_html( $hero_primary['label'] ); ?>
						</a>
					<?php endif; ?>
					<?php if ( $hero_secondary ) : ?>
						<a href="<?php echo esc_url( $hero_secondary['url'] ); ?>" class="btn btn-ghost">
							<?php echo esc_html( $hero_secondary['label'] ); ?>
						</a>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if ( ! empty( $hero_trust ) ) : ?>
				<div class="hero-trust">
					<?php foreach ( $hero_trust as $item ) : ?>
						<span class="hero-trust-item"><?php echo esc_html( $item ); ?></span>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
		<?php if ( $hero_image ) : ?>
			<div class="hero-image">
				<?php fcalri_image( $hero_image, $hero_image_alt ); ?>
			</div>
		<?php endif; ?>
	</div>
</section>
