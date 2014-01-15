<?php wp_footer(); ?>

<footer class="wrap cf">
	<div class="footerText milli floatLeft">
		<p class="nobtmmargin">
			&copy; <?php echo date("Y"); ?> Valley Church&mdash;Empowering A New Generation. <strong><a href="http://valleychurch.eu/wp-content/uploads/2013/12/Vacancy-for-Receptionist-Dec-2013.pdf" target="_blank">We are hiring.</a></strong>
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

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  
<!-- ClickTale Bottom part -->

<script type='text/javascript'>
// The ClickTale Balkan Tracking Code may be programmatically customized using hooks:
// 
//   function ClickTalePreRecordingHook() { /* place your customized code here */  }
//
// For details about ClickTale hooks, please consult the wiki page http://wiki.clicktale.com/Article/Customizing_code_version_2

document.write(unescape("%3Cscript%20src='"+
(document.location.protocol=='https:'?
"https://clicktalecdn.sslcs.cdngc.net/www02/ptc/dad2ba83-7ce6-4b2d-8062-fabe404c1b26.js":
"http://cdn.clicktale.net/www02/ptc/dad2ba83-7ce6-4b2d-8062-fabe404c1b26.js")+"'%20type='text/javascript'%3E%3C/script%3E"));
</script>

<!-- ClickTale end of Bottom part -->


</body>
</html>