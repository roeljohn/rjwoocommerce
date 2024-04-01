<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
    <?php
        $args = array(
                'post_type' => 'banner',
                'posts_per_page' => 3,
                'category_name' => 'banner-slider',
                'orderby' => 'rand',
        );
            // Create a new instance of WP_Query
        $banner = new WP_Query($args);

            // Output the related posts
        if ($banner->have_posts()) {
                while ($banner->have_posts()) {
                    $banner->the_post();
                    get_template_part( 'template-parts/components/component-banner-slider' );
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
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>