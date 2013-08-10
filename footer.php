<?php wp_footer(); ?>

<footer class="wrap cf">
	<div class="footerText milli floatLeft">
		<p class="nobtmmargin">
			&copy; <?php echo date("Y"); ?> Valley Church&mdash;Empowering A New Generation
		</p>
		<p class="nobtmmargin">
			<a href="http://freemethodist.org.uk" target="_blank">A Free Methodist UK Church</a> / <a href="http://www.charitycommission.gov.uk/search-for-a-charity/?txt=1125080" target="_blank">Registered Charity No. 1125080</a> / <a href="/privacy" title="Privacy Policy">Privacy &amp; Cookie Policy</a></p>
	</div>
	<div class="footerLinks floatRight cf">
		<div class="headerSocial floatLeft cf">
			<a class="social-icon facebook" href="http://facebook.com/wearevalleychurch" target="_blank">
				<img src="<?php echo valleycdn(); ?>/images/icons/fb.svg" alt="Valley Church on Facebook" title="Valley Church on Facebook" width="32"/>
			</a>
			<a class="social-icon twitter" href="http://twitter.com/valley_church" target="_blank">
				<img src="<?php echo valleycdn(); ?>/images/icons/twtr.svg" alt="Valley Church on Twitter" title="Valley Church on Twitter" width="32"/>
			</a>
			<a class="social-icon instagram" href="http://instagram.com/valley_church" target="_blank">
				<img src="<?php echo valleycdn(); ?>/images/icons/ig.svg" alt="Valley Church on Instagram" title="Valley Church on Instagram" width="32"/>
			</a>
			<a class="social-icon rss" href="http://feeds.feedburner.com/ValleyChurchBlog" target="_blank">
				<img src="<?php echo valleycdn(); ?>/images/icons/rss.svg" alt="Valley Blog RSS Feed" title="Valley Blog RSS Feed" width="32"/>
			</a>
			<a class="social-icon podcast" href="http://itunes.apple.com/gb/podcast/valley-church/id263000232" target="_blank">
				<img src="<?php echo valleycdn(); ?>/images/icons/podcast.svg" alt="Valley Church on iTunes" title="Valley Church on iTunes" width="32"/>
			</a>
		</div>
		<div class="headerSearch floatRight cf">
			<?php get_search_form(); ?>
		</div>
	</div>
</footer>

<!-- Google Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34521921-1']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['_setCustomVar', 1, 'Theme', 'Valley Church']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>