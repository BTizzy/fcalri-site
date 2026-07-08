<?php
/**
 * Template part: week-calendar
 *
 * Renders the 7-day activities grid. Mirrors the static index.html.
 *
 * @package fcalri
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$week_eyebrow = isset( $week_eyebrow ) ? (string) $week_eyebrow : __( 'This Week', 'fcalri' );
$week_title   = isset( $week_title ) ? (string) $week_title : __( 'A real week at Franklin Court.', 'fcalri' );
$week_lead    = isset( $week_lead ) ? (string) $week_lead : __( "Programming designed by our Activities Director in collaboration with residents. Here's what's happening this week — the calendar updates every Monday.", 'fcalri' );
$show_buttons = isset( $week_show_buttons ) ? (bool) $week_show_buttons : true;
$today        = isset( $week_today ) ? (string) $week_today : '';
?>
<section>
	<div class="container-wide">
		<div class="section-head">
			<span class="eyebrow"><?php echo esc_html( $week_eyebrow ); ?></span>
			<h2><?php echo esc_html( $week_title ); ?></h2>
			<p><?php echo esc_html( $week_lead ); ?></p>
		</div>

		<?php fcalri_render_week_calendar( array( 'today' => $today ) ); ?>

		<?php if ( $show_buttons ) : ?>
			<div style="text-align:center; margin-top:var(--sp-5); display:flex; gap:var(--sp-2); flex-wrap:wrap; justify-content:center;">
				<a href="<?php echo esc_url( fcalri_get_page_url( 'activities' ) ); ?>" class="btn btn-secondary">
					<?php esc_html_e( 'Full Activities Calendar', 'fcalri' ); ?>
				</a>
				<a href="<?php echo esc_url( home_url( '/files/July-2026-Calendar.pdf' ) ); ?>" class="btn btn-ghost">
					<?php esc_html_e( 'Download July PDF', 'fcalri' ); ?>
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>
