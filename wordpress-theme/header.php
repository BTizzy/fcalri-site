<?php
/**
 * The header for the Franklin Court theme.
 *
 * @package fcalri
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="theme-color" content="#1A2530">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'fcalri' ); ?></a>

<header class="site-header" role="banner">
	<div class="topbar">
		<div class="container topbar-inner">
			<span>
				<svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true" style="vertical-align:-2px;margin-right:6px;"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
				<?php echo esc_html( fcalri_address_single() ); ?>
			</span>
			<div class="topbar-meta">
				<span>
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
					<?php echo esc_html( fcalri_today_status() ); ?>
				</span>
				<a href="tel:<?php echo esc_attr( fcalri_phone_tel() ); ?>">
					<svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true" style="vertical-align:-2px;margin-right:6px;"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.05-.24c1.12.37 2.33.57 3.54.57a1 1 0 011 1V20a1 1 0 01-1 1A18 18 0 012 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.21.2 2.42.57 3.54a1 1 0 01-.24 1.05l-2.2 2.2z"/></svg>
					<?php echo esc_html( fcalri_phone_display() ); ?>
				</a>
			</div>
		</div>
	</div>

	<div class="container nav">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<span class="brand-mark">F</span>
				<span class="brand-text">Franklin Court<small><?php esc_html_e( 'Assisted Living · Bristol RI', 'fcalri' ); ?></small></span>
			<?php endif; ?>
		</a>

		<nav aria-label="<?php esc_attr_e( 'Primary', 'fcalri' ); ?>">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'nav-links',
						'container'      => false,
						'fallback_cb'    => 'fcalri_nav_fallback',
					)
				);
			} else {
				fcalri_static_nav_list( 'desktop' );
			}
			?>
		</nav>

		<a href="<?php echo esc_url( fcalri_get_page_url( 'tour' ) ); ?>" class="nav-cta"><?php esc_html_e( 'Schedule a Tour →', 'fcalri' ); ?></a>
		<button class="nav-toggle" aria-label="<?php esc_attr_e( 'Open menu', 'fcalri' ); ?>" aria-expanded="false" id="navToggle" type="button">
			<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
		</button>
	</div>
</header>

<div class="mobile-menu" id="mobileMenu" role="dialog" aria-label="<?php esc_attr_e( 'Menu', 'fcalri' ); ?>" aria-modal="true">
	<button class="mobile-menu-close" id="mobileClose" aria-label="<?php esc_attr_e( 'Close menu', 'fcalri' ); ?>" type="button">✕</button>
	<?php fcalri_static_nav_list( 'mobile' ); ?>
	<a href="<?php echo esc_url( fcalri_get_page_url( 'tour' ) ); ?>" style="color:var(--c-accent);"><?php esc_html_e( 'Schedule a Tour →', 'fcalri' ); ?></a>
</div>
