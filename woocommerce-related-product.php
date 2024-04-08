<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$related_products = $args;


if ( $related_products ) : ?>

		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<h2 class="fw-bolder mb-4"><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>
		
		<?php woocommerce_product_loop_start(); ?>

			<?php 
			$counter = 0;
				foreach ( $related_products as $related_product ) : ?>

					<?php
					if ($counter >= 4) {
						break; // Break out of the loop once 4 related products are displayed
					}
					// $post_object = get_post( $related_product->get_the_ID() ); deleted this because no need to get_id since it was already returning id
					$post_object = get_post( $related_product);

					setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

					wc_get_template_part( 'content', 'product' );
					
					$counter++;
					?>

			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

	<?php
endif;

wp_reset_postdata();
