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
						<h1 class="nobtmmargin">
							<a href="<?php echo get_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h1>
			      		<h2 class="pageInfo epsilon lite">
							Posted by <?php the_author();?> on <?php the_time('F jS, Y') ?>
						</h2>
					</div>
					<hr/>
					<div class="pageBody">
						<?php the_content('Read more...');?>
					</div>
					<hr/>
					<div class="pageFooter">
						<?php comments_popup_link(); ?>
					</div>
				</div>
			</div>
		</div> <!-- pageContent wrap cf -->
	  <?php endwhile; ?>
	  
	  <div class="pageNavigation wrap cf">
			<div class="paddedContentNarrow cf">
				<?php next_posts_link('<div class="navigation_older more-link floatLeft">&laquo; Older Entries</div>') ?>
				<?php previous_posts_link('<div class="navigation_newer more-link floatRight">Newer Entries &raquo;</div>') ?>
			</div>
	  </div>

	<?php else : ?>

		<div class="pageContent pageMain wrap cf">
			<div class="paddedContent">
				<h1>Sorry, the page you're looking for doesn't exist!</h1>
				<p>You can either use the search below to find what you're looking for, or head back to the <a href="<?php bloginfo('url'); ?>">home page.</a></p>
				<?php get_search_form(); ?>
			</div>
		</div>

  <?php endif; ?>

<?php get_footer(); ?>