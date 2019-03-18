<?php get_header(); ?>

<div class="banner_image">
<?php 
$category = get_queried_object();
if(get_field('image',$category)){
echo '<img src="'.get_field('image',$category).'" class="img-respnsive" alt="'.$category->name.'">';
}
?>
 </div>
<div class="contant_section padding_layout_1">
         <div class="container">
            <div class="row">
				
              
               <div class="col-md-8 blog_section_left">
                  <!-- blog -->
                  <?php if(have_posts()) { while(have_posts()) { the_post(); ?>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="blog_section">
<div class="blog_heading">
                              <div class="blog_post_date">
                                 <span class="date_info"><?php echo get_the_date('m Y',get_the_ID()); ?></span>  
                                 <span class="date_fix"><?php echo get_the_date('d',get_the_ID()); ?></span>
                              </div>
                              <p class="blog_head"><?php the_title(); ?></p>
                              
                           </div>
                            <div class="authore-image">
<?php
$user = wp_get_current_user();
 
if ( $user ) :
    ?>
    <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
<?php endif; ?>
<p class="author_name"><?php the_author(); ?></p>
</div>
                           <div class="blog_feature_img"><a href="<?php the_permalink(); ?>"> <img class="img-responsive" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()); ?>" alt="<?php the_title(); ?>"> </a></div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="blog_feature_cantant">
                         
                          <?php the_excerpt(); ?>
                           <div class="bottom_info">
                              <div class="pull-left"><a class="read_more" href="<?php the_permalink(); ?>">READ MORE <i class="fa fa-angle-right"></i></a></div>
                              <div class="pull-right">
								  <?php echo do_shortcode('[addtoany]'); ?>
                                 <!--<div class="shr">Share: </div>-->
                                 <div class="social_icon">
									 
                             <!--<ul>
                                       <li class="fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                       <li class="twi"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                       <li class="gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                       <li class="pint"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    </ul>-->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php } } ?>
                  <!-- end blog -->
                  <!-- blog -->
               
               </div>
<div class="">
               
				<?php get_sidebar(); ?>
              </div>
            </div>
         </div>
      </div>
<?php get_footer(); ?>
