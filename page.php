<?php get_header(); ?>


<?php if(get_field('header_banner')) {  ?>
	<div class="banner_image">

<img src="<?php the_field('header_banner'); ?>" class="img-responsive" alt="<?php the_title(); ?>" />
		<div class="container">
		<div class="banner_text">
		
		<span class="banner_title"><?php //the_title(); ?></span>
		</div></div>
	<?php }  ?>

	</div>






		<div class="container"> <?php if(have_posts()):while(have_posts()): the_post(); the_content(); endwhile; endif;  ?>    </div>
	
    

   
<?php get_footer(); ?>