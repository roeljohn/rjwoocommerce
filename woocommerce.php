<?php get_header(); ?>
<div id="main" class="container">
    <?php 
        if ( is_shop() ) {
            get_template_part('/woocommerce-shop');
        } elseif( is_product() ) { 
            get_template_part('/woocommerce-single-product');
        } else {
            woocommerce_content(); 
        }
    ?>
</div>
<?php get_footer(); ?>