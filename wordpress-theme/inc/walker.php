<?php
/**
 * Franklin Court — Custom nav walker.
 *
 * Produces <ul class="nav-links">…</ul> markup with BEM-style classes,
 * so the WP-generated menu visually matches the static site.
 *
 * @package fcalri
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Primary nav walker — desktop and mobile contexts.
 */
class Fcalri_Walker_Nav extends Walker_Nav_Menu {

	/**
	 * Which context to render: 'desktop' (default) or 'mobile'.
	 *
	 * @var string
	 */
	public $context = 'desktop';

	/**
	 * Open the list container.
	 *
	 * @param string   $output Reference to walker output.
	 * @param int      $depth  Current depth.
	 * @param stdClass $args   wp_nav_menu args.
	 */
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$indent  = str_repeat( "\t", $depth );
		$classes = array( 'sub-menu', 'nav-submenu' );
		$output .= "\n$indent<ul class=\"" . esc_attr( implode( ' ', $classes ) ) . "\">\n";
	}

	/**
	 * Open an individual list item.
	 *
	 * @param string   $output Reference to walker output.
	 * @param WP_Post  $item   Menu item.
	 * @param int      $depth  Current depth.
	 * @param stdClass $args   wp_nav_menu args.
	 * @param int      $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		// BEM class for nav-links.
		$classes[] = 'nav-link';

		// If this item corresponds to the current page, mark active.
		if ( in_array( 'current-menu-item', $classes, true ) || in_array( 'current_page_item', $classes, true ) ) {
			$classes[] = 'is-active';
		}

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$output .= $indent . '<li' . $class_names . '>';

		$atts           = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		if ( '_blank' === $item->target && empty( $item->xfn ) ) {
			$atts['rel'] = 'noopener noreferrer';
		} else {
			$atts['rel'] = ! empty( $item->xfn ) ? $item->xfn : '';
		}
		$atts['href'] = ! empty( $item->url ) ? $item->url : '#';

		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr_name => $attr_value ) {
			if ( '' === $attr_value && '0' !== $attr_value ) {
				continue;
			}
			$attr_value  = ( 'href' === $attr_name ) ? esc_url( $attr_value ) : esc_attr( $attr_value );
			$attributes .= ' ' . $attr_name . '="' . $attr_value . '"';
		}

		$title = apply_filters( 'the_title', $item->title, $item->ID );
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		$item_output  = isset( $args->before ) ? $args->before : '';
		$item_output .= '<a' . $attributes . '>';
		$item_output .= isset( $args->link_before ) ? $args->link_before : '';
		$item_output .= $title;
		$item_output .= isset( $args->link_after ) ? $args->link_after : '';
		$item_output .= '</a>';
		$item_output .= isset( $args->after ) ? $args->after : '';

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/**
 * Comment walker — kept simple, uses HTML5 markup.
 * (WordPress will use this for threaded comments if html5 comment-list is enabled.)
 */
class Fcalri_Walker_Comment extends Walker_Comment {

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<ol class="comment-list__children">' . "\n";
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</ol>' . "\n";
	}
}
