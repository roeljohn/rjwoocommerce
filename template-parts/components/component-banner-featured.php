<?php
  // Get Sign Up Link
  $featured_heading = get_post_meta( get_the_ID(), 'featured_heading', true );
  $featured_link = get_post_meta( get_the_ID(), 'featured_link', true );
?>

<div class="col-md-4">
<?php if ( $featured_link ) { ?>
<a class="link-offset-2 link-underline link-underline-opacity-0 text-black" href="<?php echo esc_html( $featured_link ); ?>">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
        <?php if ( $featured_heading ) { ?>
        <p>
          <strong class="d-inline-block mb-2 text-primary-emphasis"><?php echo esc_html( $featured_heading ); ?></strong>
        </p>
      <?php } ?>
          
          <h3 class="mb-0"><?php echo get_the_title(); ?></h3>
          <p class="card-text mb-auto"><?php echo get_the_content(); ?></p>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="250"  src="<?php if ( has_post_thumbnail() ) {     
          echo get_the_post_thumbnail_url();
      }
      ?>" />
        </div>
      </div>
      </a>
<?php } ?>
    </div>

