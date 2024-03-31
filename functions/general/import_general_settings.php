<?php

/**
* Add woocommerce support
*/
function customtheme_add_woocommerce_support(){
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );

/** Add Menu */
add_theme_support( 'menus' );