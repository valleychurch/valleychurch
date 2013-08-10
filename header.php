<!DOCTYPE html>
<!-- RUNNING ON IIS -->
<!--[if IE 6]>
<html class="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html class="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 9]>
<html class="ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <?php if ( is_front_page() ) { ?>
  <meta name="description" content="Valley Church is an authentic, contemporary, dynamic &amp; exciting Church, existing to 'empower a new generation' to be all that God intends them to be.">
  <?php } ?>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>
  	<?php
  	/*
  	 * Print the <title> tag based on what is being viewed.
  	 */
  	global $page, $paged;

  	wp_title( '&mdash;', true, 'right' );

  	// Add a page number if necessary:
  	if ( $paged >= 2 || $page >= 2 )
  		echo sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) ) . ' &mdash; ';

  	// Add the blog name.
  	bloginfo( 'name' );

  	// Add the blog description for the home/front page.
  	$site_description = get_bloginfo( 'description', 'display' );
  	if ( $site_description && ( is_front_page() ) )
  		echo " &mdash; $site_description";

  	?>
  </title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="stylesheet" type="text/css" href="<?php echo valleycdn(); ?>/style.css" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">

  <link rel="shortcut icon" href="<?php echo valleycdn(); ?>/images/icons/favicon.ico" />
  <link rel="apple-touch-icon" href="<?php echo valleycdn(); ?>/images/icons/apple-touch-icon.png" />

  <!-- Required JS // jQuery, Modernizr -->
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

  <!-- Added JS // prefixfree, ResponsiveSlides, Touchdown, FitVids, Twitter (embeds) -->
  <!--<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>-->
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.32/responsiveslides.min.js"></script>
  <script type="text/javascript" src="<?php echo valleycdn(); ?>/js/jquery.touchdown.min.js"></script>
  <script type="text/javascript" src="<?php echo valleycdn(); ?>/js/jquery.fitvids.js"></script>
  <!--<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>-->

  <!-- Site JS -->
  <script type="text/javascript" src="<?php echo valleycdn(); ?>/js/site.js"></script>

  <!-- Typekit -->
  <script type="text/javascript" src="//use.typekit.net/xja0ipy.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <?php wp_head(); ?>
</head>

<body <?php body_class('vc1 cf'); ?>>

<header>
	<div class="headerMain wrap cf">
		<div class="headerLogo floatLeft">
			<a class="headerLogoImg" href="<?php bloginfo('url'); ?>">
        <img src="<?php echo valleycdn(); ?>/images/logo_black.svg" alt="Valley Church" title="Valley Church" width="300" />
      </a>
		</div>
		
		<nav class="floatRight">
			<?php wp_nav_menu( array(
			 'theme_location'  => 'main-nav'
  		) ); ?>
		</nav>
	</div>
</header>