<?php get_header(); ?>
<div id="main" class="row">
<div id="content" class="col-lg-12 col-sm-6 col-md-6 col-xs-12">
<?php 
if ( is_product() && !is_cart() && !is_checkout() ) {
    get_template_part('/single-product');
} 
?>
</div>
</div>
<?php get_footer(); ?>