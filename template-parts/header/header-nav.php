<?php
// Specify the menu location or slug
$menu_location = 'header';

// Retrieve the menu
$menu_items = wp_get_nav_menu_items($menu_location);

// Display the menu
if ($menu_items) {
    echo '<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">';

    foreach ($menu_items as $menu_item) {
        echo '<li class="nav-item"><a class="nav-link px-2 link-body-emphasis" href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
    }

    echo '</ul>';
} else {
    echo 'Menu not found.';
}