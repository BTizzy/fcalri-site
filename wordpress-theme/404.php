<?php
/**
 * 404 template.
 *
 * @package fcalri
 */

get_header();
?>

<main id="main" class="site-main">
	<section class="section-paper">
		<div class="container-narrow" style="text-align:center; padding:var(--sp-7) 0;">
			<span class="eyebrow"><?php esc_html_e( '404', 'fcalri' ); ?></span>
			<h1 style="font-size:clamp(3rem, 8vw, 6rem); margin:var(--sp-3) 0;">
				<?php esc_html_e( 'Page not found.', 'fcalri' ); ?>
			</h1>
			<p style="font-size:var(--fs-md); color:var(--c-slate); max-width:520px; margin:0 auto var(--sp-4);">
				<?php esc_html_e( "The page you're looking for may have moved or no longer exists. Try the search below, or head back to the home page.", 'fcalri' ); ?>
			</p>

			<div class="btn-row" style="justify-content:center; margin-bottom:var(--sp-4);">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Back to home', 'fcalri' ); ?></a>
				<a href="<?php echo esc_url( fcalri_get_page_url( 'contact' ) ); ?>" class="btn btn-secondary"><?php esc_html_e( 'Contact us', 'fcalri' ); ?></a>
			</div>

			<div style="max-width:420px; margin:0 auto;">
				<?php get_search_form(); ?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
