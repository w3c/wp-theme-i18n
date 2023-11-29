<?php
/**
 * The template for displaying Category Archive pages.
 */

get_header(); ?>

<div class="content">
	<div class="main">
		
		<h1>Category: <?php single_cat_title( '', true ); ?></h1>
		
		<h2>Posts</h2>
		
		<?php
			//$category_description = category_description();
			//if ( ! empty( $category_description ) )
				//echo '<div class="archive-meta">' . $category_description . '</div>';

		/* Run the loop for the category page to output the posts.
		 * If you want to overload this in a child theme then include a file
		 * called loop-category.php and that will be used instead.
		 */
		get_template_part( 'loop', 'category' );
		?>

<?php get_footer(); ?>
