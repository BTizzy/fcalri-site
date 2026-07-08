<?php
/**
 * Template part: stats-strip
 *
 * Used by the front page hero-following stats row.
 *
 * @package fcalri
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$stats = isset( $stats ) && is_array( $stats ) ? $stats : array(
	array( 'num' => '30',   'label' => __( 'Residents · one-to-one care', 'fcalri' ) ),
	array( 'num' => '30+',  'label' => __( 'Years serving Bristol', 'fcalri' ) ),
	array( 'num' => '24/7', 'label' => __( 'On-site care & emergency', 'fcalri' ) ),
	array( 'num' => '100%', 'label' => __( 'All-inclusive — no add-ons', 'fcalri' ) ),
);
?>
<section class="stats">
	<div class="container">
		<div class="stats-grid">
			<?php foreach ( $stats as $stat ) : ?>
				<div>
					<div class="stat-num"><?php echo esc_html( $stat['num'] ); ?></div>
					<div class="stat-label"><?php echo esc_html( $stat['label'] ); ?></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
