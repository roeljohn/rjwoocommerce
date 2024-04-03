<?php

add_action( 'woocommerce_after_account_navigation', 'woocommerce_my_account_title' );

/**
 * Function for `woocommerce_after_account_navigation` action-hook.
 * 
 * @return void
 */
function woocommerce_my_account_title(){
    global $wp;
    // Get the permalink of the current page
    $current_permalink = home_url( add_query_arg( array(), $wp->request ) );

    // Parse the URL to extract the path
    $url_parts = parse_url( $current_permalink );

    // Get the path component of the URL
    $path = isset( $url_parts['path'] ) ? $url_parts['path'] : '';

    // Get the last part of the URL
    $last_part = basename( $path );

    // Output the last part of the URL
    
    if ( $last_part ) {
    
        switch ( $last_part ) {
          case 'edit-account':
            $title = 'Edit Account Details';
            break;
          case 'orders':
            $title = 'Your Orders';
            break;
          case 'downloads':
            $title = 'Your Downloads';
            break;
          case 'edit-address':
            $title = 'Edit Address'; // Use more generic title here (could be billing or shipping)
            break;
          case 'payment-methods':
            $title = 'Payment Methods';
            break;
          case 'customer-logout':
          case 'add-payment-method':
          // Add more cases for other endpoints you want to identify
            $title = 'Add Payment Method'; // No title for these endpoints (optional)
            break;
          default:
            $title = 'My Account'; // Use the converted endpoint for unknown ones
        }
    
        echo '<div class="woocommerce-MyAccount-content"><h2>' . $title . '</h2></div>';
      } else {
        // Handle cases where there's no endpoint (less likely)
        echo '<div class="woocommerce-MyAccount-content"><h2>My Account</h2></div'; // Generic title
    }
}

