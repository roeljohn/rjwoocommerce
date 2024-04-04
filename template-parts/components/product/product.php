<?php
// Get product ID
$product_id = get_the_ID(); 
// Check if product is on sale
$is_on_sale = $args->is_on_sale();
// Get regular price
$regular_price = $args->get_regular_price();
// Get add to cart url
$product_url = esc_url( add_query_arg( 'add-to-cart', $product_id, get_permalink( $product_id ) ) );
// Get image
$product_image = esc_url(get_the_post_thumbnail_url( $product_id, 'full' )); 
?>
<li <?php wc_product_class( '', $args ); ?>>
    <div class="card h-100">
        <!-- Product image-->
        <img class="card-img-top" src="<?php echo $product_image; ?>" alt="...">
        <!-- Product details-->
        <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder"><?php the_title(); ?></h5>
                    <!-- Product reviews-->
                    <div class="d-flex justify-content-center small text-warning mb-2">
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                    </div>
                        <!-- Product price-->
                        <?php echo wc_price( $regular_price ); ?>
                    </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo $product_url; ?>">Add to cart</a>
                </div>
            </div>
    </div>
</li>