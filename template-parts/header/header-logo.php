<?php

    $check_type_of_logo = get_option( 'rj_woocommerce_setting_logo', '' );
    $rj_woocommerce_logo_icon = get_option( 'rj_woocommerce_logo_icon', '' );
    $rj_woocommerce_logo_img = get_option( 'rj_woocommerce_logo_img', '' );
?>
<?php if($check_type_of_logo === "rj-icon"){ ?>
    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <i style="font-size: 40px" class="<?php echo esc_attr( $rj_woocommerce_logo_icon ); ?>"></i>
    </a>
<?php } ?>

<?php if($check_type_of_logo === "rj-img"){ ?>
    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <img src="<?php echo esc_attr( $rj_woocommerce_logo_img ); ?>" alt="" />
    </a>
<?php } ?>