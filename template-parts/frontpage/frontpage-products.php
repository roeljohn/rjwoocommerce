<div class="container p-0 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 8,
                'orderby' => 'rand',
            );
            // Create a new instance of WP_Query
            $products = new WP_Query($args);

            // Output the related posts
            if ($products->have_posts()) {
                while ($products->have_posts()) {
                    $products->the_post();
                    global $product;
                    get_template_part( 'template-parts/components/component-product', '', $product );
                }
                // Restore original post data
                wp_reset_postdata();
            } else {
                echo '<div class="p-3">';
                echo 'No related posts found.';
                echo '</div>';
            }
        ?>             
    </div>
</div>
