<?php

/*
* Creating a function to create our CPT
*/
  
function custom_post_type_banner() {
  
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Banner', 'Portfolio General Name', 'twentytwentyone' ),
            'singular_name'       => _x( 'Banner', 'Portfolio Singular Name', 'twentytwentyone' ),
            'menu_name'           => __( 'Banners', 'twentytwentyone' ),
            'parent_item_colon'   => __( 'Parent Banner', 'twentytwentyone' ),
            'all_items'           => __( 'All Banner', 'twentytwentyone' ),
            'view_item'           => __( 'View Banner', 'twentytwentyone' ),
            'add_new_item'        => __( 'Add New Banner', 'twentytwentyone' ),
            'add_new'             => __( 'Add New', 'twentytwentyone' ),
            'edit_item'           => __( 'Edit Banner', 'twentytwentyone' ),
            'update_item'         => __( 'Update Banner', 'twentytwentyone' ),
            'search_items'        => __( 'Search Banner', 'twentytwentyone' ),
            'not_found'           => __( 'Not Found', 'twentytwentyone' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
        );
          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => __( 'banner', 'twentytwentyone' ),
            'description'         => __( 'Banner news and reviews', 'twentytwentyone' ),
            'labels'              => $labels,
            'menu_icon'             => 'dashicons-cover-image',
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'category' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => false,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
          
        // Registering your Custom Post Type
        register_post_type( 'banner', $args );
      
    }
      
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
      
    add_action( 'init', 'custom_post_type_banner', 0 );