<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="wrap cf">
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
            <?php if(get_field('event_venue')) { ?>
              <strong>VENUE:</strong> <?php the_field('event_venue'); ?>
            <?php } ?>
            <?php if(get_field('event_map_link')) { ?>
              - <a href="<?php the_field('event_map_link'); ?>">MAP</a>
            <?php } ?>
            <?php if(get_field('event_time')) { ?>
              <div style="margin-bottom: 24px;">
                <strong>TIME:</strong> <?php the_field('event_time'); ?>
              </div>
            <?php } ?>
              <?php the_content(); ?>
          </div>
  	     </div>
      </div>
    </div>
	</div>

	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>

<?php get_footer(); ?>