<?php
/**
 * Archive template — used for category, tag, date, author archives.
 *
 * @package fcalri
 */

get_header();
?>

<main id="main" class="site-main">
	<section class="section-paper">
		<div class="container-narrow">
			<header class="page-header" style="margin-bottom:var(--sp-5); text-align:center;">
				<?php
				the_archive_title( '<span class="eyebrow">' . esc_html__( 'Archive', 'fcalri' ) . '</span><h1 class="page-title">', '</h1>' );
				the_archive_description( '<p style="margin-top:var(--sp-2);">', '</p>' );
				?>
			</header>

			<?php if ( have_posts() ) : ?>
				<div class="archive-list" style="display:grid; gap:var(--sp-4);">
					<?php while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'reveal' ); ?> style="background:var(--c-white); padding:var(--sp-3); border:1px solid var(--c-line-soft); border-radius:var(--r-md);">
							<header>
								<?php the_title( '<h2 style="font-size:var(--fs-xl);"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
								<div class="entry-meta" style="color:var(--c-slate); font-size:var(--fs-sm); margin-bottom:var(--sp-2);">
									<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
								</div>
							</header>
							<div class="entry-summary">
								<?php the_excerpt(); ?>
							</div>
						</article>
					<?php endwhile; ?>
				</div>

				<div class="pagination" style="margin-top:var(--sp-5);">
					<?php the_posts_pagination(); ?>
				</div>
			<?php else : ?>
				<p style="text-align:center;"><?php esc_html_e( 'No posts found.', 'fcalri' ); ?></p>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php
get_footer();
