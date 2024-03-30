<?php
/**
 * The functions.php file behaves like a WordPress plugin, adding features and functionality to a 
 * WordPress site. You can use it to call WordPress functions and to define your own functions.
 */

 
 
/**
* Enqueue scripts and styles
*/
require_once( __DIR__ . '/functions/enqueue/import_css_js.php');

/**
* Add woocommerce support
*/
function customtheme_add_woocommerce_support(){
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );