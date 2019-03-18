<?php /* Template name:Homepage */ get_header(); ?>
<div class="container">
	
<?php if(have_posts()):while(have_posts()):the_post(); the_content();endwhile; wp_reset_query(); endif; ?>
</div>
<!--<h2 id=".vc_row wpb_row vc_inner vc_row-fluid">one</h2>
<p><a href=".vc_column-inner  ">Top</a></p>-->




<?php if(have_rows('slider_1')){  ?>
<div class="container">

<div class="owl_slider">

<div id="owl-demo" class="owl-carousel owl-theme">
	
<?php while(have_rows('slider_1')) { the_row(); ?>
<div><a href="<?php echo the_sub_field('link'); ?>">
<img class="img-responsive" src="<?php echo the_sub_field('image'); ?>" alt="img">

<div class="img_title">
<h5>
<?php the_sub_field('content'); ?>
</h5></a>
</div>
</div>

<?php } ?>


</div>
</div>
</div>	 

	<?php } ?> 
	
<?php get_footer(); ?>
