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
			  	$image = wp_get_attachment_image_src($post->ID, $optional_size);
    		?>

	      <div class="pageImage">
	          <img src="<?php echo($image[0]); ?>" width="980" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
        </div>

      	<div class="paddedContent">
					<h1 class="gamma nobtmmargin"><?php the_title(); ?></h1>
				</div>
	  	</div>
		</div> <!-- pageContent wrap cf -->
  <?php endwhile; ?>
  <?php else : ?>

  <h2>Not Found</h2>
  <p>Sorry, but you are looking for something that isn't here.</p>
  <?php get_search_form(); ?>

  <?php endif; ?>

<?php get_footer(); ?>