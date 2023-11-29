<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<div class="content">
	<div class="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<h1><?php the_title(); ?></h1>
		
		<div class="pubdata"> <?php $iso_date = get_the_date( "Y-m-d" ); ?>
			<div class="date"><time datetime=<?php echo $iso_date;?>><?php the_date() ?></time></div>
		</div>

		<div class="resource">
			<div class="description"> 
				<?php the_content(); ?>			
			</div>
		</div>
		
	
    	<div id="endmatter">
        	<div class="alltags">
				<?php $tags_list = get_the_tag_list( '', ', ' );
                    if ( $tags_list ): ?>
                    <div class="cats">
                        Tags: <?php print $tags_list ?>
                        </div>
                <?php endif; ?>
                <?php if ( count( get_the_category() ) ) : ?><div class="cats">Categories: <?php print get_the_category_list( ', ' ) ?></div><?php endif; ?>
                </div>
            
            <div class="previousnext">
                <p>Previous post: 
                    <?php previous_post_link( '%link', ' %title' ); ?>
                </p>
                <p>Next post:
                    <?php next_post_link( '%link', ' %title' ); ?>
                </p>						
                </div>
            </div>
		
		<?php comments_template(); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
