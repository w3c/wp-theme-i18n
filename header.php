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

<script type="text/javascript" src="/International/javascript/expand-collapse-content.js"></script>

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

<div id="n_W3Clogo"><a href="http://www.w3.org/"><img src="/Icons/w3c_home" alt="W3C" style="border:0; height:48px; width:72px;"/></a></div>
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
<div id=n_groups class="tocbox">
<h2>Groups/repos</h2>
  <p><a href="http://w3c.github.io/i18n-activity/i18n-wg/"><img src="/International/icons/right.gif" alt="" /> i18n WG</a></p>
	  <p><a href="http://w3c.github.io/i18n-activity/i18n-ig/"><img src="/International/icons/right.gif" alt="" /> i18n Interest Group</a></p>
	  <p><a href="https://w3c.github.io/afrlreq/home"><img src="/International/icons/right.gif" alt="" /> African <abbr title="Language Enablement">LE</abbr></a></p>
	  <p><a href="https://w3c.github.io/amlreq/home"><img src="/International/icons/right.gif" alt="" /> Americas <abbr title="Language Enablement">LE</abbr></a></p>
	  <p><a href="https://w3c.github.io/alreq/home"><img src="/International/icons/right.gif" alt="" /> Arabic <abbr title="Language Enablement">LE</abbr></a></p>
	  <p><a href="https://w3c.github.io/clreq/home"><img src="/International/icons/right.gif" alt="" /> Chinese <abbr title="Language Enablement">LE</abbr></a></p>
	  <p><a href="https://w3c.github.io/elreq/home"><img src="/International/icons/right.gif" alt="" /> Ethiopic <abbr title="Language Enablement">LE</abbr></a></p>
	  <p><a href="https://w3c.github.io/eurlreq/home"><img src="/International/icons/right.gif" alt="" /> European <abbr title="Language Enablement">LE</abbr></a></p>
	  <p><a href="https://w3c.github.io/hlreq/home"><img src="/International/icons/right.gif" alt="" /> Hebrew <abbr title="Language Enablement">LE</abbr></a></p>
	  <p><a href="https://w3c.github.io/iip/home"><img src="/International/icons/right.gif" alt="" /> India <abbr title="Language Enablement">LE</abbr></a></p>
	  <p><a href="https://w3c.github.io/jlreq/home"><img src="/International/icons/right.gif" alt="" /> Japanese <abbr title="Language Enablement">LE</abbr></a></p>
	  <p><a href="https://w3c.github.io/klreq/home"><img src="/International/icons/right.gif" alt="" /> Korean <abbr title="Language Enablement">LE</abbr></a></p>
	  <p><a href="https://w3c.github.io/mlreq/home"><img src="/International/icons/right.gif" alt="" /> Mongolian <abbr title="Language Enablement">LE</abbr></a></p>
	  <p><a href="https://w3c.github.io/sealreq/home"><img src="/International/icons/right.gif" alt="" /> SE Asian <abbr title="Language Enablement">LE</abbr></a></p>
	  <p><a href="https://w3c.github.io/tlreq/home"><img src="/International/icons/right.gif" alt="" /> Tibetan <abbr title="Language Enablement">LE</abbr></a></p>
  </div>
  



<div class="tocbox">
<h2 id="Participation">  Participate!</h2>

<p><a href="/International/i18n-drafts/nav/participate"><img src="/International/icons/right.gif" alt=""> Join a Group</a></p>

<p><a href="/International/i18n-drafts/nav/follow"><img src="/International/icons/right.gif" alt="" /> Follow the work</a></p>

<p><a href="/International/i18n-drafts/pages/translation.html"><img src="/International/icons/right.gif" alt="" /> Translate a specification or page</a></p>

<p><a href="/International/sponsorship/"><img src="/International/icons/right.gif" alt=""> International&shy;ization Sponsorship Program</a></p>
</div>






<div class="tocbox" style="padding-bottom: 10px;">
    <h2 id="sec_site_links">Search for news</h2>
					<div>
						<div class="toc1">News by category</div>
						<div class="bSideItem">
							<?php foreach ((get_categories()) as $category) {
							  echo '<div class="toc2"><a href="', get_category_link($category->term_id), "\">\n";
							  echo " ", $category->name, "</a>", ' <span class="notes">(', $category->count, ")</span></div>\n";
							} ?>
						</div>
					</div>
					<div>
						<div class="toc1">News archives</div>
						<div class="bSideItem">
							<?php wp_get_archives( 'type=monthly&format=custom&before=<div class="toc2">&after=</div>&show_post_count=true' ); ?>
						</div>
					</div>
					<div>
						<div class="toc1">Search news</div>
						<div class="bSideItem" style="padding: 10px;">
							<?php get_search_form(); ?>
						</div>
					</div>
                    
  </div>





<div class="tocbox" style="padding-bottom: 10px;">
	<h2>I18n sponsors</h2>
		<div style="display: flex; flex-wrap: wrap; justify-content: space-around; align-items: center;">
        <a href="https://www.aplab.jp/"><img alt="APL, Japan" title="Advanced Publishing Lab (APL)" src="/International/icons/sponsor_logos/apl.png" style="height: 4em;"></a>
        <a href="https://www.paciellogroup.com/"><img alt="The Paciello Group" title="The Paciello Group" src="/International/icons/sponsor_logos/tpg-logo.png" style="height: 4em;"></a>
        <a href="http://www.monotype.com/"><img alt="Monotype" title="Monotype" src="/International/icons/sponsor_logos/monotype_logo.png" style="margin: 1em 0; vertical-align: middle; width: 6em;"></a>
        <a href="http://www.alibabagroup.com/en/global/home"><img alt="Alibaba" title="Alibaba" src="/International/icons/sponsor_logos/alibaba-logo.png" style="height: 4em; "></a>
        </div>
</div>





<!--h2>Search for news</h2>
  	< ?php get_search_form(); ? -->
							
	<!--h2>Admin</h2-->
	<ul style="font-size: 80%; margin-top: 3em;">
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
        <li>SMedia icons by <a target="_blank" href="https://icons8.com">Icons8</a></li>
	</ul>
</div>

