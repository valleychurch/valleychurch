<?php
/*
Template Name: Valley Conference 2014
 */

get_header(); ?>

<!--<script type="text/javascript">
$(window).bind('scroll', function() {
  windowTop = $(window).scrollTop();
  if((windowTop >= 0) && (windowTop <= $(window).height())) {
    newCoord = windowTop * 0.5;
    $('body').css({"background-position": "50% "+ newCoord + "px"});
  }
});
</script>-->

<script type="text/javascript" src="//use.typekit.net/xes6ats.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<div class="pageContent wrap cf">
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

  <div class="pageMain cf">
    <div class="paddedContent">
      <div class="pageBody">
        <?php the_content(); ?>
      </div>
    </div>
  </div>

  <?php endwhile; endif; ?>

</div>
<!-- pageContent wrap cf-->

<?php get_footer(); ?>