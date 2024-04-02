<?php

// Replace WooCommerce My Account Menu HTML
add_filter( 'woocommerce_account_menu_items', 'custom_account_menu_html', 10, 1 );

function custom_account_menu_html( $items ) {
    $items['dashboard'] = '<li>sfasdf</li>';
    // Add custom menu items
    $itemss= str_replace( '</li>', '</span>', $items['dashboard'] );
    var_dump($itemss);
    $items['orders']    = __( 'Orders', 'woocommerce' );
    $items['downloads'] = __( 'Downloads', 'woocommerce' );
    $items['edit-account'] = __( 'Edit Account', 'woocommerce' );
    $items['edit-address'] = __( 'Addresses', 'woocommerce' );
    $items['customer-logout'] = __( 'Logout', 'woocommerce' );

    return $items;
}