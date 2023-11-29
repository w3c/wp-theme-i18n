<?php
/**
 * The template for displaying Tag Archive pages.
 */

get_header(); ?>

<div class="content">
	<div class="main">
		
		<h1>Tag(s): <?php single_cat_title( '', true ); ?></h1>
		
		<h2>Posts</h2>
		
		<?php
		/* Run the loop for the tag archive to output the posts
		 * If you want to overload this in a child theme then include a file
		 * called loop-tag.php and that will be used instead.
		 */
		 get_template_part( 'loop', 'tag' );
		?>

<?php get_footer(); ?>
