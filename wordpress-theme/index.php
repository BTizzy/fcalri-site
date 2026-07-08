<?php
/**
 * The main template file — fallback for any view that doesn't have a
 * more specific template.
 *
 * @package fcalri
 */

get_header();
?>

<main id="main" class="site-main">
	<section class="section-paper">
		<div class="container-narrow">
			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header class="page-header">
					<h1 class="page-title"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'reveal' ); ?>>
						<header class="entry-header">
							<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
						</header>
						<div class="entry-content">
							<?php the_excerpt(); ?>
						</div>
					</article>
				<?php endwhile; ?>

				<div class="pagination">
					<?php the_posts_pagination(); ?>
				</div>
			<?php else : ?>
				<div class="reveal" style="text-align:center;">
					<h1><?php esc_html_e( 'Nothing here yet', 'fcalri' ); ?></h1>
					<p><?php esc_html_e( 'No posts or pages matched what you were looking for.', 'fcalri' ); ?></p>
					<p><a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'fcalri' ); ?></a></p>
				</div>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php
get_footer();
