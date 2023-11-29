<?php
/**
 * The Footer widget areas.
 */
?>

<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'first-header-widget-area'  )  )
		return;
	// If we get this far, we have widgets. Let do this.
?>

			<div id="header-widget-area" role="complementary">

<?php if ( is_active_sidebar( 'first-header-widget-area' ) ) : ?>
				<div id="first" class="widget-area">
						<?php dynamic_sidebar( 'first-header-widget-area' ); ?>
				</div><!-- #first .widget-area -->
<?php endif; ?>

			</div><!-- #header-widget-area -->
