<?php

add_action( 'woocommerce_after_account_navigation', 'woocommerce_my_account_title' );

/**
 * Function for `woocommerce_after_account_navigation` action-hook.
 * 
 * @return void
 */
function woocommerce_my_account_title(){
    echo 'test';
	// action...
}