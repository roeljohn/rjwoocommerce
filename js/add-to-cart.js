jQuery(document).ready(function($) {
    $('.add-to-cart-btn').on('click', function(e) {
        e.preventDefault();

        var quantity = $(this).prev('#inputQuantity').val();
        var product_id = $(this).data('product_id');

        // AJAX request to add the product to the cart
        $.ajax({
            type: 'POST',
            url: wc_add_to_cart_params.ajax_url,
            data: {
                action: 'add_to_cart',
                product_id: product_id,
                quantity: quantity
            },
            success: function(response) {
                // Redirect to the cart page after adding the product to the cart
                window.location.href = wc_add_to_cart_params.cart_url;
            }
        });
    });
});