<?php
/**
 * Header
 * @see heritage_palli_header_cart()
 */
add_action( 'heritage_palli_header', 'heritage_palli_header_cart', 40 );


/**
 * Cart fragment
 *
 * @see heritage_palli_cart_link_fragment()
 */
if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.3', '>=' ) ) {
	add_filter( 'woocommerce_add_to_cart_fragments', 'heritage_palli_cart_link_fragment' );
} else {
	add_filter( 'add_to_cart_fragments', 'heritage_palli_cart_link_fragment' );
}
