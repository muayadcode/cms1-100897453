<?php
/**
 * Template Name: front-page
 */

get_header();
?>
<h1>Real Madrid</h1>
<?php
/* Start the Loop */

while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.



get_footer();

?>