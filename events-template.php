<?php
/*
Template Name: Events
 */

get_header(); ?>

<div class="eventsPage wrap cf">
	<div class="eventsLeft floatLeft">

	  <?php 
		$type = 'events';
		$args=array(
		  'post_type' => $type,
		  'post_status' => 'publish',
		);
		$temp = $wp_query;  // assign orginal query to temp variable for later use   
		$wp_query = null;
		$wp_query = new WP_Query($args); 
	  ?>

	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  
		<div class="pageContent eventEntry cf">
			<div class="pageMain cf">
				<?php
				  $img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
				  $image = wp_get_attachment_image_src($img_id, $optional_size); // Get URL of the image, and size can be set here too (same as with get_the_post_thumbnail, I think)
				  $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
				  $perm = get_permalink($post->ID);
				?>

				<?php if (has_post_thumbnail()){ ?>
				<div class="calImg">
				  <img src="<?php echo($image[0]); ?>" alt="<?php echo $alt_text; ?>" />
				</div>
				<?php } ?>

				<div class="paddedContentNarrow">
					<div class="pageTitle cf">
						<h1 class="beta nobtmmargin"><?php the_title(); ?></h1>
						<?php if(get_field('event_date')) { ?>
							<h2 class="epsilon lite nobtmmargin"><?php the_field('event_date'); ?></h2>
						<?php } ?>
					</div>
					<hr/>
					<div class="calDesc">
						<p>
							<?php if(get_field('event_venue')) { ?>
								<?php if(get_field('event_map_link')) { ?>
									<strong>VENUE:</strong> <a href="<?php the_field('event_map_link'); ?>"><?php the_field('event_venue'); ?></a>
								<?php } else { ?>
									<strong>VENUE:</strong> <?php the_field('event_venue'); ?>
								<?php } ?>
							<?php } ?>
							<?php if(get_field('event_time')) { ?>
							<br/>
							<strong>TIME:</strong> <?php the_field('event_time'); ?>
							<?php } ?>
						</p>
					</div>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		
	<?php endwhile; endif; ?>
		
	</div>

	<div class="pageContent eventsRight floatRight">
		<div class="pageMain cf">
			<div class="paddedContentNarrow">
				<h2 class="delta">Regular events</h2>

				<h3 class="epsilon nobtmmargin"><a href="<?php bloginfo('url'); ?>/sunday">Sunday Church</a></h3>
				<h4 class="zeta nobtmmargin">10:30am & 6pm</a></h4>
				<p>Valley Centre, Fourfields, Bamber Bridge, Preston, PR5 6GS</p>
				<h4 class="zeta nobtmmargin">2:30pm</h4>
				<p>72 Mitchell Street, Wigan, WN5 9BY</p>

				<h3 class="epsilon nobtmmargin"><a href="<?php bloginfo('url'); ?>/connect">Connect Groups</a></h3>
				<p>Meeting all over the region on Tuesdays.</p>

				<h3 class="epsilon nobtmmargin">Creative Team Nights</a></h3>
				<p>Every other Wednesday, 7:30pm - 9pm at Valley Centre</p>

				<h3 class="epsilon nobtmmargin"><a href="<?php bloginfo('url'); ?>/tots">Valley Tots</a></h3>
				<p>Every term-time Thursday<br/>9:30am - 11am at Valley Centre</p>

				<h3 class="epsilon nobtmmargin"><a href="<?php bloginfo('url'); ?>/youth">Valley Youth</a></h3>
				<p>Velocity (11s-14s)<br/>
				Fridays, 7pm - 8:30pm</p>
				<p>Uprising (14s-18s)<br/>
				Fridays, 8:15pm - 10pm</p>
				<p>Sunday Night Youth Connect<br/>
				During the 6pm service</p>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>