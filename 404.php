<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>

<div class="content">
	<div class="main">

	<div class="resource">
		<h3>
			<?php _e( 'Not Found', 'twentyten' ); ?>
		</h3>
		<div class="description"> 
			<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>

<?php get_footer(); ?>
