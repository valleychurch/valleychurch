<?php wp_footer(); ?>

<footer class="wrap cf">
	<div class="footerText milli floatLeft">
		<p class="nobtmmargin">
			&copy; <?php echo date("Y"); ?> Valley Church&mdash;Empowering A New Generation
		</p>
		<p class="nobtmmargin">
			<a href="http://freemethodist.org.uk" target="_blank">A Free Methodist UK Church</a> / <a href="http://www.charity-commission.gov.uk/Showcharity/RegisterOfCharities/CharityWithoutPartB.aspx?RegisteredCharityNumber=1125080&SubsidiaryNumber=0" target="_blank">Registered Charity No. 1125080</a> / <a href="/privacy" title="Privacy Policy">Privacy &amp; Cookie Policy</a></p>
	</div>
	<div class="footerLinks floatRight">
		<div class="headerSocial floatLeft">
			<a class="icon facebook" href="http://facebook.com/wearevalleychurch" target="_blank">
				<img src="<?php echo valleycdn(); ?>/images/icons/fb.svg" alt="Valley Church on Facebook" title="Valley Church on Facebook" width="32"/>
			</a>
			<a class="icon twitter" href="http://twitter.com/valley_church" target="_blank">
				<img src="<?php echo valleycdn(); ?>/images/icons/twtr.svg" alt="Valley Church on Twitter" title="Valley Church on Twitter" width="32"/>
			</a>
			<a class="icon instagram" href="http://instagram.com/valley_church" target="_blank">
				<img src="<?php echo valleycdn(); ?>/images/icons/ig.svg" alt="Valley Church on Instagram" title="Valley Church on Instagram" width="32"/>
			</a>
			<a class="icon rss" href="http://feeds.feedburner.com/ValleyChurchBlog" target="_blank">
				<img src="<?php echo valleycdn(); ?>/images/icons/rss.svg" alt="Valley Blog RSS Feed" title="Valley Blog RSS Feed" width="32"/>
			</a>
			<a class="icon podcast" href="http://itunes.apple.com/gb/podcast/valley-church/id263000232" target="_blank">
				<img src="<?php echo valleycdn(); ?>/images/icons/podcast.svg" alt="Valley Church on iTunes" title="Valley Church on iTunes" width="32"/>
			</a>
		</div>
		<div class="headerSearch floatRight">
			<?php get_search_form(); ?>
		</div>
	</div>
</footer>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.32/responsiveslides.min.js"></script>
<script type="text/javascript" src="<?php echo valleycdn(); ?>/js/jquery.touchdown.min.js"></script>
<script type="text/javascript" src="<?php echo valleycdn(); ?>/js/jquery.fitvids.js"></script>

<script type="text/javascript" src="<?php echo valleycdn(); ?>/js/site.js"></script>

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

</body>
</html>