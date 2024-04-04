<?php

// Get product ID
$product_id = get_the_ID(); 

// Get product object
$product = wc_get_product($product_id);

// Check if product object is valid
if (is_a($product, 'WC_Product')) {
    // Check if product is on sale
    $is_on_sale = $product->is_on_sale();
    // Get regular price
    $regular_price = $product->get_regular_price();
    // Get sale price
    $sale_price = $product->get_sale_price();
    // Get add to cart URL
    $product_url = esc_url( $product->add_to_cart_url() );
    // Get image
    $product_image = get_the_post_thumbnail_url( $product_id, 'full' );
    // Get short description
    $product_short_description = $product->get_short_description();
}
?>
<!-- Product section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <?php
            // Check if a product has been added to the cart
            if ( isset( $_GET['add-to-cart'] ) ) {
                $added_to_cart = wc_get_product( $_GET['add-to-cart'] );
                if ( $added_to_cart ) {
                    ?>
                    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="button view-cart-button"><?php _e( 'View Cart', 'your-theme-textdomain' ); ?></a>
                    <?php
                }
            }
        ?>
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0" src="<?php echo $product_image; ?>" alt="..." />
            </div>
            <div class="col-md-6">
                <div class="small mb-1">SKU: BST-498</div>
                <h1 class="display-5 fw-bolder"><?php the_title(); ?></h1>
                <div class="fs-5 mb-5">
                    <span class="text-decoration-line-through"><?php echo wc_price( $regular_price ); ?></span>
                    <span><?php echo wc_price( $sale_price ); ?></span>
                </div>
                <p class="lead"><?php echo $product_short_description; ?></p>
                <form class="d-flex" method="post" action="<?php echo esc_url( $product_url ); ?>">
                    <input class="form-control text-center me-3" name="quantity" type="number" value="1" min="1" style="max-width: 3rem" />
                    <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>