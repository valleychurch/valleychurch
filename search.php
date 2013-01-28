<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<div class="wrap cf">
			<div class="paddedContent">
				<h1>Search results for: <?php the_search_query(); ?></h1>
			</div>
		</div>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="pageContent wrap cf">
			    <div class="pageMain">
				<div class="paddedContentNarrow">
					<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
					<hr/>
					<?php the_excerpt(); ?>
				</div>
			    </div>
			</div>
		<?php endwhile; ?>

		<div class="pageNavigation wrap cf">
			<div class="paddedContentNarrow cf">
				<?php next_posts_link('<div class="navigation_older more-link floatLeft">&laquo; Older Entries</div>') ?>
	    		<?php previous_posts_link('<div class="navigation_newer more-link floatRight">Newer Entries &raquo;</div>') ?>
			</div>
	  	</div>

	<?php else : ?>

		<div class="wrap cf">
			<h1>No results found</h1>
			<h2 class="delta">Sorry, but nothing matched your search criteria. Please try again with some different keywords.</h2>
			<?php get_search_form(); ?>
		</div> 

	<?php endif; ?>

<?php get_footer(); ?>