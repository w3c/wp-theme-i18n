<?php
/**
 * The template for displaying Search Results pages.
 */

get_header(); ?>

<div class="content">
	<div class="main">
		
		<h1>Keyword(s): <?php the_search_query(); ?></h1>
		
		<h2>Posts</h2>

		<?php get_template_part('loop', 'search'); ?>

<?php get_footer(); ?>
