<?php
/**
 * The template file used to render a static page (page post-type). Note that unlike other post-types, 
 * page is special to WordPress and uses the following path:
 * custom template file – The page template assigned to the page. See get_page_templates().
 * page-{slug}.php – If the page slug is recent-news, WordPress will look to use page-recent-news.php.
 * page-{id}.php – If the page ID is 6, WordPress will look to use page-6.php.
 * page.php
 */

get_header();?>
<div class="container">
	<?php
	while ( have_posts() ) :
		the_post();
		the_content();

		// If comments are open or there is at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	endwhile;
	?>
</div>
<?php get_footer();
