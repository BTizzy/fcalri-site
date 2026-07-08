<?php
/**
 * The footer for the Franklin Court theme.
 *
 * @package fcalri
 */
?>

<footer class="site-footer" role="contentinfo">
	<div class="container-wide">
		<div class="footer-grid">
			<div>
				<div class="footer-brand"><?php bloginfo( 'name' ); ?></div>
				<p style="color:rgba(245,239,226,0.65); font-size:0.9375rem; max-width:280px;">
					<?php esc_html_e( 'A small, all-inclusive assisted living community in the historic Kaiser Mill complex of Bristol, Rhode Island.', 'fcalri' ); ?>
				</p>
				<p style="color:rgba(245,239,226,0.5); font-size:0.8125rem; margin-top:var(--sp-3);">
					<?php esc_html_e( 'Proudly operated by', 'fcalri' ); ?>
					<strong style="color:var(--c-cream);"><?php esc_html_e( 'East Bay Community Development Corp', 'fcalri' ); ?></strong>
					— <?php esc_html_e( 'a nonprofit serving the East Bay since 1969.', 'fcalri' ); ?>
				</p>
			</div>

			<div class="footer-col">
				<h4><?php esc_html_e( 'Visit', 'fcalri' ); ?></h4>
				<ul>
					<li><a href="<?php echo esc_url( fcalri_get_page_url( 'contact' ) ); ?>"><?php echo esc_html( fcalri_address_line1() ); ?></a></li>
					<li><a href="<?php echo esc_url( fcalri_get_page_url( 'contact' ) ); ?>"><?php echo esc_html( fcalri_address_line2() ); ?></a></li>
					<li><a href="tel:<?php echo esc_attr( fcalri_phone_tel() ); ?>"><?php echo esc_html( '📞 ' . fcalri_phone_display() ); ?></a></li>
					<li><a href="mailto:<?php echo esc_attr( fcalri_email_main() ); ?>"><?php echo esc_html( fcalri_email_main() ); ?></a></li>
				</ul>
			</div>

			<div class="footer-col">
				<h4><?php esc_html_e( 'Explore', 'fcalri' ); ?></h4>
				<ul>
					<li><a href="<?php echo esc_url( fcalri_get_page_url( 'about' ) ); ?>"><?php esc_html_e( 'About us', 'fcalri' ); ?></a></li>
					<li><a href="<?php echo esc_url( fcalri_get_page_url( 'life-at' ) ); ?>"><?php esc_html_e( 'Life at Franklin Court', 'fcalri' ); ?></a></li>
					<li><a href="<?php echo esc_url( fcalri_get_page_url( 'apartments' ) ); ?>"><?php esc_html_e( 'Apartments', 'fcalri' ); ?></a></li>
					<li><a href="<?php echo esc_url( fcalri_get_page_url( 'activities' ) ); ?>"><?php esc_html_e( 'Activities', 'fcalri' ); ?></a></li>
					<li><a href="<?php echo esc_url( fcalri_get_page_url( 'family-resources' ) ); ?>"><?php esc_html_e( 'Family resources', 'fcalri' ); ?></a></li>
					<li><a href="<?php echo esc_url( fcalri_get_page_url( 'employment' ) ); ?>"><?php esc_html_e( 'Careers', 'fcalri' ); ?></a></li>
				</ul>
			</div>

			<div class="footer-col">
				<h4><?php esc_html_e( 'Hours', 'fcalri' ); ?></h4>
				<ul>
					<li><?php esc_html_e( 'Front Desk', 'fcalri' ); ?></li>
					<li style="color:rgba(245,239,226,0.5);"><?php echo esc_html( fcalri_hours_weekday() ); ?></li>
					<li style="color:rgba(245,239,226,0.5);"><?php echo esc_html( fcalri_hours_weekend() ); ?></li>
					<li style="margin-top:8px;"><?php esc_html_e( 'Admissions', 'fcalri' ); ?></li>
					<li style="color:rgba(245,239,226,0.5);">
						<?php esc_html_e( 'By appointment · Call Michael Gargano at', 'fcalri' ); ?>
						<a href="tel:14013969020" style="color:rgba(245,239,226,0.7);">(401) 396-9020</a>
					</li>
				</ul>
			</div>
		</div>

		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
			<div class="footer-widgets" style="margin-top:var(--sp-5); padding-top:var(--sp-4); border-top:1px solid rgba(245,239,226,0.1);">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
		<?php endif; ?>

		<div class="footer-bottom">
			<span>© <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'fcalri' ); ?></span>
			<span>
				<a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>" style="color:rgba(245,239,226,0.5); text-decoration:none; margin-right:var(--sp-3);"><?php esc_html_e( 'Privacy', 'fcalri' ); ?></a>
				<a href="<?php echo esc_url( home_url( '/accessibility' ) ); ?>" style="color:rgba(245,239,226,0.5); text-decoration:none;"><?php esc_html_e( 'Accessibility', 'fcalri' ); ?></a>
			</span>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
