<?php

function add_custom_class_to_edit_account_form_tag( $form_tag ) {
    
    // Ensure $form_tag is an array before accessing its elements

    $form_tag= htmlspecialchars('afasd');
    return $form_tag;
}
add_filter( 'woocommerce_edit_account_form_tag', 'add_custom_class_to_edit_account_form_tag' );