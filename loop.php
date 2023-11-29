<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 */
?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<!--<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-above" class="navigation">
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
	</div>
<?php endif; ?>-->

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>

	<span class="notfound">Sorry, there is no post to display...</span>

<?php endif; ?>

<?php
	/* Start the Loop.
	 *
	 * In Twenty Ten we use the same loop in multiple contexts.
	 * It is broken into three main parts: when we're displaying
	 * posts that are in the gallery category, when we're displaying
	 * posts in the asides category, and finally all other posts.
	 *
	 * Additionally, we sometimes check for whether we are on an
	 * archive page, a search page, etc., allowing for small differences
	 * in the loop on each template without actually duplicating
	 * the rest of the loop that is shared.
	 *
	 * Without further ado, the loop:
	 */ ?>
<?php while ( have_posts() ) : the_post(); ?>

		<div class="pubdata"><?php $pfx_date = get_the_date( "Y-m-d" ); ?> 
			<div class="date"><time datetime=<?php echo $pfx_date; ?>><?php the_date(); ?></time></div>
		</div>

		<div class="resource">
			<h3>
				<a href="<?php the_permalink() ?>" title="Permanent link to full entry"><?php the_title(); ?></a>
			</h3>
			<div class="description"> 
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
				<div class="admin">
					<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?></span>
					<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
				</div>			
				<?php $tags_list = get_the_tag_list( '', ', ' );
					if ( $tags_list ): ?>
					<div class="cats">
						Tags: <strong><?php print $tags_list ?></strong>
					</div>
				<?php endif; ?>
				<?php if ( count( get_the_category() ) ) : ?><div class="cats">Categories: <strong><?php print get_the_category_list( ', ' ) ?></strong></div><?php endif; ?>
			</div>
		</div>
		
			<?php /* TODO: add link on author name 
			
			<div class="metadata">
				<p>
					By <em class="author"><?php the_author() ?>,</em> <span class="updated"><?php the_date() ?></span>
					(<a href="<?php the_permalink() ?>" title="Permanent link to full entry">Permalink</a>) <br>
					<?php if ( count( get_the_category() ) ) : ?>
					<span class="categories">Categories: <strong><?php print get_the_category_list( ', ' ) ?></strong></span> <br>
					<?php endif; ?>
					<?php
						$tags_list = get_the_tag_list( '', ', ' );
						if ( $tags_list ): ?>
					<span class="tag-links">
						Tags: <strong><?php print $tags_list ?></strong>
					</span>
					<?php endif; ?>
				</p>
			</div>
			
			*/ ?>

	<?php //if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
			<?php //the_excerpt(); ?>
	<?php //else : ?>
			<?php //the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
			<?php //wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
	<?php// endif; ?>

			
				<!--<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?></span>-->
				<!--<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>-->
			

		<?php //comments_template( '', true ); ?>

<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
	
<div class="previousnext">
	<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<?php previous_posts_link() ?> :: <?php next_posts_link() ?>
	<?php endif; ?>
</div>

