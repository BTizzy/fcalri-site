<?php
/**
 * Single post template.
 *
 * @package fcalri
 */

get_header();
?>

<main id="main" class="site-main">
	<section class="section-paper">
		<div class="container-narrow">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header" style="margin-bottom:var(--sp-4);">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="entry-thumbnail" style="margin-top:var(--sp-3); border-radius:var(--r-md); overflow:hidden;">
								<?php the_post_thumbnail( 'fcalri-feature' ); ?>
							</div>
						<?php endif; ?>
						<div class="entry-meta" style="margin-top:var(--sp-3); color:var(--c-slate); font-size:var(--fs-sm);">
							<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
						</div>
					</header>
					<div class="entry-content">
						<?php
						the_content();
						wp_link_pages(
							array(
								'before' => '<div class="pagination">' . esc_html__( 'Pages:', 'fcalri' ),
								'after'  => '</div>',
							)
						);
						?>
					</div>
				</article>

				<nav class="post-navigation" style="display:flex; justify-content:space-between; gap:var(--sp-3); margin-top:var(--sp-5);">
					<?php
					$prev_post = get_previous_post();
					$next_post = get_next_post();
					if ( $prev_post ) :
						?>
						<a href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>" class="btn btn-ghost">← <?php echo esc_html( $prev_post->post_title ); ?></a>
					<?php endif; ?>
					<?php if ( $next_post ) : ?>
						<a href="<?php echo esc_url( get_permalink( $next_post ) ); ?>" class="btn btn-ghost"><?php echo esc_html( $next_post->post_title ); ?> →</a>
					<?php endif; ?>
				</nav>
			<?php endwhile; ?>
		</div>
	</section>
</main>

<?php
get_footer();
