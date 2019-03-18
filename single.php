<?php get_header(); ?>
 
<div class="contant_section padding_layout_1">
         <div class="container">
            <div class="row">
				
               
				<?php get_sidebar(); ?>
              
               <div class="col-md-8 blog_section_left">
                  <!-- blog -->
                  <?php if(have_posts()) { while(have_posts()) { the_post();  //wpb_get_post_views(get_the_ID()); ?>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="blog_section">
                           <div class="blog_feature_img"><a href="<?php the_permalink(); ?>"> <img class="img-responsive" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()); ?>" alt="<?php the_title(); ?>"> </a></div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="blog_feature_cantant">
                           <div class="blog_heading">
                              <div class="blog_post_date">
                                 <span class="date_info"><?php echo get_the_date('m Y',get_the_ID()); ?></span>  
                                 <span class="date_fix"><?php echo get_the_date('d',get_the_ID()); ?></span>
                              </div>
                              <p class="blog_head"><?php the_title(); ?></p>
                              <p class="author_name"><?php the_author(); ?></p>
                           </div>
                          <?php the_content(); ?>
                           <div class="bottom_info">
                              <div class="pull-left"></div>
                              <div class="pull-right">
								  <?php echo do_shortcode('[addtoany]'); ?>
                                 <div class="shr">Share: </div>
                                 <div class="social_icon">
									 
                            <!-- <ul>
                                       <li class="fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                       <li class="twi"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                       <li class="gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                       <li class="pint"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    </ul>-->
                                 </div>
                              </div>
                           </div>
                       
                       <?php comments_template(); ?>
                        </div>
                     </div>
                  </div>
                  <?php } } ?>
                  <!-- end blog -->
                  <!-- blog -->
               
               </div>
            </div>
         </div>
      </div>
<?php get_footer(); ?>
