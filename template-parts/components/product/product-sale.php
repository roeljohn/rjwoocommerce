<?php
// Get product ID
$product_id = get_the_ID(); 
// Check if product is on sale
$is_on_sale = $args->is_on_sale();
// Get regular price
$regular_price = $args->get_regular_price();
// Get sale price
$sale_price = $args->get_sale_price();
// Get add to cart url
$product_url = esc_url( add_query_arg( 'add-to-cart', $product_id, get_permalink( $product_id ) ) );
// Get image
$product_image = get_the_post_thumbnail_url( $product_id, 'full' ); 
?>
<div class="col mb-5">
    <a href="<?php the_permalink();?>">
        <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                Sale
            </div>
            <!-- Product image-->
            <img class="card-img-top" src="<?php echo $product_image; ?>" alt="..." />
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
                    <span class="text-muted text-decoration-line-through"><?php echo wc_price( $regular_price ); ?></span>
                    <?php echo wc_price( $sale_price ); ?>
                </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo $product_url; ?>">Add to cart</a></div>
            </div>
        </div>
    </a>
</div>