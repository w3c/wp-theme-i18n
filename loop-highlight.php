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
<?php $i = 0; while ( have_posts() && i < 6 ) : the_post(); ?>

		<?php if ( in_category('highlight') ) : $i++; ?>
		<p><?php $iso_date = get_the_date( "Y-m-d" ); ?>
			<img src="/International/icons/right.gif" height="11" width="17" alt="Stop press" title="Stop press" />
			<span><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span> 
			<time datetime=<?php echo $iso_date; ?> class="date"><?php the_date() ?></time>
		</p>
		<?php endif; ?>

<?php endwhile; // End the loop. Whew. ?>
