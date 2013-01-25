<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="pageContent wrap cf">
		<div class="pageMain cf">

			<?php
				$img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
				$optional_size = 'medium';
				$image = wp_get_attachment_image_src($img_id, $optional_size); // Get URL of the image, and size can be set here too (same as with get_the_post_thumbnail, I think)
				$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
				$perm = get_permalink($post->ID);
			?>

			<?php if (has_post_thumbnail()){ ?>
    		<div class="podcastImage floatLeft">
    			<img src="<?php echo($image[0]); ?>" width="300" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
    		</div>
				<div class="podcastInfo paddedContent floatLeft">
					<h2 class="delta"><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
  		<?php } else { ?>
				<div class="paddedContent">
					<h2 class="delta"><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
			<?php } ?>
		</div>
	</div>

	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>

<?php get_footer(); ?>