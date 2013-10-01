<?php
/*
Template Name: Insert Anything
 */

get_header(); ?>

<div class="page wrap center cf">

  <div class="col">

    <div class="post">

    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php if(get_field('page_css')) { ?>          
        <style type="text/css">
          <?php the_field('page_css'); ?>
        </style>
        <?php } ?>

        <?php if (get_field('page_js')) { ?>
        <script type="text/javascript">
          <?php the_field('page_js'); ?>
        </script>
        <?php } ?>

        <div class="title padding center">
          <h1>
            <?php the_title(); ?>
            <?php edit_post_link( 'Edit', '<span class=\'milli\'>', '</span>'); ?> 
          </h1>
        </div>

    		<?php if (get_field('insert_anything')) { ?>
        <div class="wrap-img">
          <?php the_field('insert_anything'); ?>
        </div>
        <?php } ?>

        <div class="padding center">    
          <?php the_content(); ?>
        </div>

    	<?php endwhile; endif; ?>

    </div>

  </div>

</div>

<?php get_footer(); ?>