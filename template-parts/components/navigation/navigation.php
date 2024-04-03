<nav class="woocommerce-MyAccount-navigation">
    <?php
        $items = array(
            'dashboard' => array(
                'endpoint' => 'dashboard',  // Replace with your actual endpoint value
                'label' => esc_html__('Dashboard', 'your_plugin_domain'), // Escape and translate for security
                'html' => '<li class="menu-item menu-item-2nd-item custom-menu-item-class"><a href="' . esc_url(wc_get_account_endpoint_url('endpoint')) . '">' . esc_html__('Label', 'your_plugin_domain') . '</a></li>' // Use actual endpoint value and translate label
            ),
            'edit-address' => array(
                'endpoint' => 'edit-address',  // Replace with your actual endpoint value
                'label' => esc_html__('Edit Address', 'your_plugin_domain'), // Escape and translate for security
                'html' => '<li class="menu-item menu-item-2nd-item custom-menu-item-class"><a href="' . esc_url(wc_get_account_endpoint_url('endpoint')) . '">' . esc_html__('Label', 'your_plugin_domain') . '</a></li>' // Use actual endpoint value and translate label
            ),
            'payment-methods' => array(
                'endpoint' => 'payment-methods',  // Replace with your actual endpoint value
                'label' => esc_html__('Payment Methods', 'your_plugin_domain'), // Escape and translate for security
                'html' => '<li class="menu-item menu-item-2nd-item custom-menu-item-class"><a href="' . esc_url(wc_get_account_endpoint_url('endpoint')) . '">' . esc_html__('Label', 'your_plugin_domain') . '</a></li>' // Use actual endpoint value and translate label
            ),
            'orders' => array(
                'endpoint' => 'orders',  // Replace with your actual endpoint value
                'label' => esc_html__('Orders', 'your_plugin_domain'), // Escape and translate for security
                'html' => '<li class="menu-item menu-item-2nd-item custom-menu-item-class"><a href="' . esc_url(wc_get_account_endpoint_url('endpoint')) . '">' . esc_html__('Label', 'your_plugin_domain') . '</a></li>' // Use actual endpoint value and translate label
            ),
            'downloads' => array(
                'endpoint' => 'downloads',  // Replace with your actual endpoint value
                'label' => esc_html__('Downloads', 'your_plugin_domain'), // Escape and translate for security
                'html' => '<li class="menu-item menu-item-2nd-item custom-menu-item-class"><a href="' . esc_url(wc_get_account_endpoint_url('endpoint')) . '">' . esc_html__('Label', 'your_plugin_domain') . '</a></li>' // Use actual endpoint value and translate label
            ),
            'edit-account' => array(
                'endpoint' => 'edit-account',  // Replace with your actual endpoint value
                'label' => esc_html__('Edit Account', 'your_plugin_domain'), // Escape and translate for security
                'html' => '<li class="menu-item menu-item-2nd-item custom-menu-item-class"><a href="' . esc_url(wc_get_account_endpoint_url('endpoint')) . '">' . esc_html__('Label', 'your_plugin_domain') . '</a></li>' // Use actual endpoint value and translate label
            ),
            'customer-logout' => array(
                'endpoint' => 'customer-logout',  // Replace with your actual endpoint value
                'label' => esc_html__('Customer Logout', 'your_plugin_domain')
            ),
        );
    ?>
	<ul class="list-group mb-3">
		<?php foreach ( $items as $endpoint => $item ) : ?>
            <?php if (is_array($item)) { ?>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <a href="<?php echo esc_url(wc_get_account_endpoint_url($item['endpoint'])); ?>"><?php echo $item['label']; ?></a>
                </li>
            <?php } ?>
		<?php endforeach; ?>
	</ul>
</nav>