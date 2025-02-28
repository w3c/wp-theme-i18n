<?php
/**
 * The template for displaying the front page.
 */

get_header(); ?>

<div class="content">
    <div class="main">
        <?php the_content(); ?>

        <?php $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 10 ) );

        if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>

            <div class="pubdata"><?php
                $pfx_date = get_the_date("Y-m-d"); ?>
                <div class="date">
                    <time datetime=<?php
                    echo $pfx_date; ?>><?php
                        the_date(); ?></time>
                </div>
            </div>

            <div class="resource">
                <h3>
                    <a href="<?php
                    the_permalink() ?>" title="Permanent link to full entry"><?php
                        the_title(); ?></a>
                </h3>
                <div class="description">
                    <?php
                    the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten')); ?>
                    <div class="admin">
                        <span class="comments-link"><?php
                            comments_popup_link(
                                __('Leave a comment', 'twentyten'),
                                __('1 Comment', 'twentyten'),
                                __('% Comments', 'twentyten')
                            ); ?></span>
                        <?php
                        edit_post_link(
                            __('Edit', 'twentyten'),
                            '<span class="meta-sep">|</span> <span class="edit-link">',
                            '</span>'
                        ); ?>
                    </div>
                    <?php
                    $tags_list = get_the_tag_list('', ', ');
                    if ($tags_list): ?>
                        <div class="cats">
                            Tags: <strong><?php
                                print $tags_list ?></strong>
                        </div>
                    <?php
                    endif; ?>
                    <?php
                    if (count(get_the_category())) : ?>
                        <div class="cats">Categories: <strong><?php
                            print get_the_category_list(', ') ?></strong></div><?php
                    endif; ?>
                </div>
            </div>

            <!--<span class="comments-link"><?php
            comments_popup_link(
                __('Leave a comment', 'twentyten'),
                __('1 Comment', 'twentyten'),
                __('% Comments', 'twentyten')
            ); ?></span>-->
            <!--<?php
            edit_post_link(
                __('Edit', 'twentyten'),
                '<span class="meta-sep">|</span> <span class="edit-link">',
                '</span>'
            ); ?>-->


        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
