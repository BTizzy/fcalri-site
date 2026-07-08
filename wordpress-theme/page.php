<?php
/**
 * Generic page template.
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
						<h1 class="entry-title"><?php the_title(); ?></h1>
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
			<?php endwhile; ?>
		</div>
	</section>
</main>

<?php
get_footer();
