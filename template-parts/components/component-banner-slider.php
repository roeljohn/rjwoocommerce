<?php
  // Get Sign Up Link
  $banner_link = get_post_meta( get_the_ID(), 'banner_link', true );
  $banner_text = get_post_meta( get_the_ID(), 'banner_text', true );
?>
<div class="carousel-item active">
  <img width="100%" 
    height="auto" 
    src="
      <?php if ( has_post_thumbnail() ) {     
          echo get_the_post_thumbnail_url();
      }
      ?>
    " 
    alt="" />
  <div class="container">
    <div class="carousel-caption text-start">
      <h1><?php the_title(); ?></h1>
      <p class="opacity-75"><?php the_content(); ?></p>
      <?php if ( $banner_text ) { ?>
        <p>
          <a class="btn btn-lg btn-primary" href="<?php echo esc_html( $banner_link ); ?>"><?php  echo esc_html( $banner_text ); ?></a>
        </p>
      <?php } ?>

    </div>
  </div>
</div>