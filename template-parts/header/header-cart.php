<?php
    $cart_subtotal = WC()->cart->get_cart_contents_count();
?>
<div class="d-flex">
    <a href="/cart" class="btn btn-outline-dark mx-2 py-1">
        <i class="bi-cart-fill me-1"></i>
        Cart
        <span class="badge bg-dark text-white ms-1 rounded-pill"><?php echo $cart_subtotal; ?></span>
    </a>
</div>