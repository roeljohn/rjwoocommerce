<?php

function custom_settings_page() {
    add_options_page( 'RJ Woocommerce Settings', 'RJ Woocommerce Settings', 'manage_options', 'rj-woocommerce-settings', 'custom_settings_page_output' );
}
add_action( 'admin_menu', 'custom_settings_page' );


function custom_settings_page_output() {
    // Handle form submission
    if( isset( $_POST['submit'] ) ) {
        // Security checks
        if ( ! current_user_can( 'manage_options' ) ) {
            return;
        }
        check_admin_referer( 'rj-woocommerce-settings' );
       
        // Process and sanitize form data
        $new_setting = isset( $_POST['rj-woocommerce-settings'] ) ? sanitize_text_field( $_POST['rj-woocommerce-settings'] ) : '';
        $rj_woocommerce_setting_logo = isset( $_POST['rj-woocommerce-setting-logo'] ) ? sanitize_text_field( $_POST['rj-woocommerce-setting-logo'] ) : '';
        $rj_woocommerce_logo_icon = isset( $_POST['rj_woocommerce_logo_icon'] ) ? sanitize_text_field( $_POST['rj_woocommerce_logo_icon'] ) : '';
        $rj_woocommerce_logo_img = isset( $_POST['rj_woocommerce_logo_img'] ) ? sanitize_text_field( $_POST['rj_woocommerce_logo_img'] ) : '';

        // Save settings to the database
        update_option( 'rj-woocommerce-settings', $new_setting );
        update_option( 'rj_woocommerce_setting_logo', $rj_woocommerce_setting_logo );
        update_option( 'rj_woocommerce_logo_icon', $rj_woocommerce_logo_icon );
        update_option( 'rj_woocommerce_logo_img', $rj_woocommerce_logo_img );

        // Show a success message
        echo '<div class="notice notice-success"><p>Settings saved successfully!</p></div>';
    }

    // Retrieve existing setting value
    $current_setting = get_option( 'rj-woocommerce-settings', '' );
    $check_type_of_logo = get_option( 'rj_woocommerce_setting_logo', '' );
    $rj_woocommerce_logo_icon = get_option( 'rj_woocommerce_logo_icon', '' );
    $rj_woocommerce_logo_img = get_option( 'rj_woocommerce_logo_img', '' );
    // Display the settings page content
    ?>
    <div class="wrap">
        <h1>General Settings</h1>
        <form method="post" action="">
            <?php // Security nonce ?>
            <?php wp_nonce_field( 'rj-woocommerce-settings' ); ?>

            <!-- Your form fields here -->
            <label for="rj-woocommerce-settings">Pick logo icon/image?</label><br/>
            
            <select id="rj-woocommerce-setting-logo" name="rj-woocommerce-setting-logo">
                <option value="rj-icon" <?php selected( $check_type_of_logo, 'rj-icon' ); ?>>Icon</option>
                <option value="rj-img" <?php selected( $check_type_of_logo, 'rj-img' ); ?>>Image</option>
            </select>

            <?php if($check_type_of_logo === "rj-icon"){ ?>
                <input type="text" placeholder="add fontawesome class" id="rj_woocommerce_logo_icon" name="rj_woocommerce_logo_icon" value="<?php echo esc_attr( $rj_woocommerce_logo_icon ); ?>" /> <br/>
             <?php } ?>
            <?php if($check_type_of_logo === "rj-img"){ ?>
                <input type="text" placeholder="add image url" id="rj_woocommerce_logo_img" name="rj_woocommerce_logo_img" value="<?php echo esc_attr( $rj_woocommerce_logo_img); ?>" /> <br/>
             <?php } ?>
            
            <input type="submit" name="submit" class="mt-3 button button-primary" value="Save Settings" />
        </form>
    </div>
    <?php
}