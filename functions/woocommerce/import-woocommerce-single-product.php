<?php

function add_class_to_related_add_to_cart_button($classes, $product) {
    // Add your custom class here
    $classes[] = 'custom-add-to-cart-button';

    return $classes;
}
add_filter('woocommerce_loop_add_to_cart_args', 'add_class_to_related_add_to_cart_button', 10, 2);