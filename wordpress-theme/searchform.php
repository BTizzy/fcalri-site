<?php
/**
 * Search form template.
 *
 * @package fcalri
 */

$unique_id = wp_unique_id( 'search-form-' );
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $unique_id ); ?>" class="screen-reader-text">
		<?php esc_html_e( 'Search for:', 'fcalri' ); ?>
	</label>
	<div class="form-row" style="display:flex; gap:var(--sp-1); flex-wrap:wrap;">
		<input
			type="search"
			id="<?php echo esc_attr( $unique_id ); ?>"
			class="search-field"
			placeholder="<?php echo esc_attr_x( 'Search…', 'placeholder', 'fcalri' ); ?>"
			value="<?php echo get_search_query() ? esc_attr( get_search_query() ) : ''; ?>"
			name="s"
			autocomplete="off"
		/>
		<button type="submit" class="btn btn-primary"><?php echo esc_html_x( 'Search', 'submit button', 'fcalri' ); ?></button>
	</div>
</form>
