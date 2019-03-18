<?php get_header(); ?>

<main class="page-content">
<!--<div class="breadcrumbs invert"><div class="container"><div class="row"><div class="breadcrumbs__title"><h5 class="page-title"><?php the_title(); ?></h5></div><div class="breadcrumbs__items">
		<div class="breadcrumbs__content">
			<div class="breadcrumbs__browse">You Are Here:</div> 
		<?php //if(function_exists('custom_breadcrumbs')) { echo custom_breadcrumbs(); } ?>
		</div></div></div></div>
		</div>-->

	<div class="banner_image">
	<!--img src="https://ld-wp.template-help.com/wordpress_65156/wp-content/uploads/2017/09/about-bg.jpg" class="img-responsive" />-->		
	<div class="container">
		<div class="banner_text">
		
		<span class="banner_title">About Us</span>
		</div></div></div></main>

<?php echo the_feild('banner_image');?>




		<div class="container">   <?php if(have_posts()):while(have_posts()): the_post(); the_content(); endwhile; endif;  ?>    </div>
	
    

   
<?php get_footer(); ?>