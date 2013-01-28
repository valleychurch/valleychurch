<?php
/*
Template Name: Home
 */

get_header(); ?>

<div class="homeSlider wrap cf">
	<div class="rslides_container">
		<ul class="rslides">

<?php 
    $type = 'slider';
    $args=array(
      'post_type' => $type,
      'post_status' => 'publish'
    );
    $temp = $wp_query;  // assign orginal query to temp variable for later use   
    $wp_query = null;
    $wp_query = new WP_Query($args); 
    ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<li>
			<?php if ( get_field( "slider_link" ) ) { ?>
				<a href="<?php the_field( "slider_link" ); ?>">
					<img src="<?php the_field( "slider_image" ); ?>" width="980" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
				</a>
			<?php } else { ?>
				<img src="<?php the_field( "slider_image" ); ?>" width="980" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
			<?php } ?>
		</li>

	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
		</ul>
	</div>	
</div>

<div class="homeButtons wrap cf">
	<div class="homeButton1">
		<a href="/sundays">
			<div class="homeBannerText">
				<div class="homeBannerTextInner">Sunday Church <br class="tinyScreen"/><span class="zeta lite">10:30am, 2:30pm &amp; 6pm</span></div>
			</div>
		</a>
	</div>
	<div class="homeButton2">
		<a href="/messages">
			<div class="homeBannerText">
				<div class="homeBannerTextInner">Messages</div>
			</div>
		</a>
	</div>
	<div class="homeButton3">
		<a href="/find">
			<div class="homeBannerText">
				<div class="homeBannerTextInner">Find Us</div>
			</div>
		</a>
	</div>
</div>

<?php get_footer(); ?>