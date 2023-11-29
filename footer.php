<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 */
?>

	<hr />

	<div class="smallprint" id="endMatter" style="font-size: 80%; text-align: center;"> 
		<span class="copyright">Copyright © 2023 <a href="https://www.w3.org/">World Wide Web Consortium</a>.<br> <abbr title="World Wide Web Consortium">W3C</abbr><sup>®</sup> <a href="https://www.w3.org/policies/#disclaimers">liability</a>, <a href="https://www.w3.org/policies/#trademarks">trademark</a> and <a rel="license" href="https://www.w3.org/copyright/document-license/" title="W3C Document License">permissive license</a> rules apply.</span><br />
        Questions or comments? <a href="mailto:ishida@w3.org">ishida@w3.org</a>
	</div>

	</div><!-- main -->
</div><!-- content -->

<script type="text/javascript">
	if (document.getElementById) {
		openIMG='/International/icons/open-thin.gif'; 
		closeIMG='/International/icons/close-thin.gif';
		initialhide('DIV', 'toc1');
	}
</script>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
