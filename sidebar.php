<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 */
?>

		<div id="primary" class="widget-area" role="complementary">
			

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
			<aside id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget-container">
				<header><h3 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h3></header>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget-container">
				<header><h3 class="widget-title"><?php _e( 'Meta', 'twentyten' ); ?></h3></header>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end primary widget area ?>
			
		</div><!-- #primary .widget-area -->

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
