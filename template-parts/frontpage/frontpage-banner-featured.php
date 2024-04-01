<div class="row my-3">
<?php
        $args = array(
                'post_type' => 'banner',
                'posts_per_page' => 3,
                'category_name' => 'banner-featured',
                'orderby' => 'rand',
        );
            // Create a new instance of WP_Query
        $banner = new WP_Query($args);

            // Output the related posts
        if ($banner->have_posts()) {
                while ($banner->have_posts()) {
                    $banner->the_post();
                    get_template_part( 'template-parts/components/component-banner-featured' );
                }
                // Restore original post data
                wp_reset_postdata();
            } else {
                echo '<div class="p-3">';
                echo 'No related posts found.';
                echo '</div>';
            }
    ?>  
  </div>