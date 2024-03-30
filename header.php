<?php
/**
 * The header.php contains the head section of a WordPress site, and it is commonly called at the start 
 * of all the template files. It usually contains the header information, analytics, calls to CSS files, 
 * site navigation, page titles, site logo, etc.
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="p-3 mb-3 border-bottom">
    <div class="container">
		<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
			<?php 
				get_template_part( 'template-parts/header/header-logo' );

				get_template_part( 'template-parts/header/header-nav' );

				get_template_part( 'template-parts/header/header-search' );

				get_template_part( 'template-parts/header/header-profile' );
			?>
		</div>
    </div>
</header>
