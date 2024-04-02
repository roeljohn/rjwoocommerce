<?php
/**
 * Enqueue scripts and styles
 */
function wp_theme_default_enqueue_scripts() {
  // all styles
  wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/dist/css/bootstrap.css', array(), '5.3.0' );
  wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0' );
  wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/font-awesome/css/all.min.css');
  // all scripts
  wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js');
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/dist/js/bootstrap.min.js', array('jquery'), '20120206', true );
  // Enqueue jQuery script
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/add-to-cart.js', array('jquery'), null, true);

    // Localize the script with new data
  $translation_array = array(
    'ajax_url' => admin_url('admin-ajax.php'),
    'cart_url' => wc_get_cart_url(),
  );
  wp_localize_script('custom-script', 'wc_add_to_cart_params', $translation_array);
}
add_action( 'wp_enqueue_scripts', 'wp_theme_default_enqueue_scripts' );
