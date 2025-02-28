<?php
/**
 * The template for displaying the front page.
 */

get_header(); ?>

<div class="content">
    <div class="main">
        <?php the_content(); ?>

        <?php get_template_part('loop', 'index'); ?>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
