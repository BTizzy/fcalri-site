<?php
/**
 * Template part: staff-card
 *
 * Renders a single staff member card. Used by About, Contact, etc.
 *
 * @package fcalri
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( empty( $member ) || ! is_array( $member ) ) {
	return;
}

fcalri_render_staff_card( $member, isset( $args ) && is_array( $args ) ? $args : array() );
