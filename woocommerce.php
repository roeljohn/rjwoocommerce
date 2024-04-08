<?php get_header(); ?>
    <?php 
        if ( is_shop() ) {
            get_template_part('/woocommerce-shop');
        } elseif( is_product() ) { 
            get_template_part('/woocommerce-single-product');
        } else {
            woocommerce_content(); 
        }
    ?>
<?php get_footer(); ?>