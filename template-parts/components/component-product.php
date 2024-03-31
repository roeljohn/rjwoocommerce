<?php 
$is_on_sale = $args->is_on_sale();

if ($is_on_sale) {
    get_template_part( 'template-parts/components/product/product-sale', '', $args );
} else {
    get_template_part( 'template-parts/components/product/product', '', $args );
}