<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
  
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="pageContent wrap cf">
     <div class="pageMain">
      <?php
			  $img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
			  $image = wp_get_attachment_image_src($img_id, $optional_size); // Get URL of the image, and size can be set here too (same as with get_the_post_thumbnail, I think)
			  $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
	  	  $perm = get_permalink($post->ID);
      ?>

      <?php if (has_post_thumbnail()){ ?>
        <div class="pageImage">
          <img src="<?php echo($image[0]); ?>" width="980" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
        </div>
      <?php } ?>
      
      <div class="paddedContentNarrow">
				<div class="pageTitle">
					<h1 class="nobtmmargin"><?php the_title(); ?></h1>
      		<h2 class="pageInfo epsilon lite">Posted in <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?> by <?php the_author();?> on <?php the_time('F jS, Y') ?></h2>
				</div>
				<hr/>
				<div class="pageBody">
					<?php the_content();?>
				</div>
 			</div>
		</div>
	</div> <!-- pageContent wrap cf -->

	<div class="pageContent wrap cf">
	  <div class="pageMain">
			<div class="paddedContentNarrow">
				<?php comments_template(); ?>
			</div>
	  </div>
	</div>

	<?php endwhile; else: ?>

	<h2>Sorry, no posts matched your criteria.</h2>

	<?php endif; ?>

<?php get_footer(); ?>