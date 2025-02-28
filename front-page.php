<?php
/**
 * The template for displaying the front page.
 */

get_header(); ?>

<div class="content">
    <div class="main">
        <?php the_content(); ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); endwhile; ?>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
