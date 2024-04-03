<?php

// Replace WooCommerce My Account Menu HTML
add_filter( 'woocommerce_account_menu_items', 'custom_account_menu_html', 10, 1 );

function custom_account_menu_html( $items ) {
    //unset( $items[ 'edit-address' ] ); // Addresses
    //unset( $items[ 'dashboard' ] ); // Remove Dashboard
    //unset( $items[ 'payment-methods' ] ); // Remove Payment Methods
    //unset( $items[ 'orders' ] ); // Remove Orders
    //unset( $items[ 'downloads' ] ); // Disable Downloads
    //unset( $items[ 'edit-account' ] ); // Remove Account details tab
    //unset( $items[ 'customer-logout' ] ); // Remove Logout link
    // Modify each menu item within the loop
    $items = array(); // Create a new array to store modified items

    //foreach ($items as $endpoint => $label) {
        
    //$modified_items[$endpoint] = array(
            ///'endpoint' => $endpoint,  // Endpoint remains the same
            //'label' => $label,        // Label is copied from original array
            //'html' => '<li class="menu-item menu-item-' . $endpoint . ' custom-menu-item-class"><a href="' . esc_url(wc_get_account_endpoint_url($endpoint)) . '">' . $label . '</a></li>' // Construct HTML structure
        //);
        
    //}
    return $items;
}

add_action( 'woocommerce_before_account_navigation', 'create_my_own_menu_woo' );

/**
 * Function for `woocommerce_before_account_navigation` action-hook.
 * 
 * @return void
 */
function create_my_own_menu_woo(){
    get_template_part('template-parts/components/navigation/navigation');
}