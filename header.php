<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */
?><!DOCTYPE html>
<html lang="en-EU">
<head>

<meta charset="utf-8" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>

<meta name="description" content="Home page of W3C&#039;s Web Internationalization --resources for increasing accessibility of the Web for worldwide audiences." />
<meta name="keywords" content="i18n, Internationalisation, Internationalization, Localisation, Localization, Translation" />

<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/expand-collapse-content.js' ?>"></script>

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<?php

if (is_home())
	$id = "home";
elseif (is_single())
	$id = "single";

?>

<body <?php echo isset($id) ? 'id="'.$id.'"' : "" ?>>

<div id="search">
		<div>
			<form method="get" action="/International/site-search.php" enctype="application/x-www-form-urlencoded">
				<div id="searchSite" class="topRight">I18n site search:<br /><input name="q" type="text" size="15" id="searchField" accesskey="E" maxlength="255" /></div>
			</form>
		</div>
		<div>
			<a href="/International/i18n-drafts/nav/follow#feeds"><span class="topRight">&nbsp;RSS
			Feeds&nbsp;</span><img src="/International/icons/rss.gif" alt="RSS feeds" width="16" height="16" /></a>
		</div>
</div>

<div id="n_W3Clogo"><a href="http://www.w3.org/"><img src="https://www.w3.org/assets/logos/w3c-2025/svg/w3c.svg" alt="W3C" style="border:0; height:48px; width:72px;"/></a></div>
<div id="n_banner"><a href="/International/"><p id="n_sitename">Internationalization (i18n)</p>
	<p id="n_subtitle">Making the World Wide Web worldwide!</p></a></div>
<br style="clear:both;" />

<div id="sitelinks">
	<a href="/International/i18n-drafts/nav/learn" title="Learn techniques and requirements for internationalization.">Learn</a>&nbsp;
	<a href="/International/i18n-drafts/nav/find" title="Find information on this site.">Find</a>&nbsp;
	<a href="/International/i18n-drafts/nav/ask" title="Ask for help or information.">Ask</a>&nbsp;
	<a href="/International/i18n-drafts/nav/follow" title="Follow the work at W3C Internationalization.">Follow</a>&nbsp;
	<a href="/International/i18n-drafts/nav/participate" title="Participate in W3C Internationalization work.">Participate</a>&nbsp;
	<a href="/International/i18n-drafts/nav/about" title="About W3C Internationalization.">About</a>&nbsp;
</div>

<div class="directory rightCol">
    <?php get_sidebar(); ?>

    <div class="tocbox" style="padding-bottom: 10px;">
        <h2 id="sec_site_links">Search for news</h2>
        <div>
            <div class="toc1">News by category</div>
            <div class="bSideItem">
                <?php
                foreach ((get_categories()) as $category) {
                    echo '<div class="toc2"><a href="', get_category_link($category->term_id), "\">\n";
                    echo " ", $category->name, "</a>", ' <span class="notes">(', $category->count, ")</span></div>\n";
                } ?>
            </div>
        </div>
        <div>
            <div class="toc1">News archives</div>
            <div class="bSideItem">
                <?php
                wp_get_archives(
                    'type=monthly&format=custom&before=<div class="toc2">&after=</div>&show_post_count=true'
                ); ?>
            </div>
        </div>
        <div>
            <div class="toc1">Search news</div>
            <div class="bSideItem" style="padding: 10px;">
                <?php
                get_search_form(); ?>
            </div>
        </div>

    </div>

	<ul style="font-size: 80%; margin-top: 3em;">
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
        <li>SMedia icons by <a target="_blank" href="https://icons8.com">Icons8</a></li>
	</ul>
</div>

