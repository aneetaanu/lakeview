<?php  
class wp_my_plugin extends WP_Widget {

	// constructor
    function wp_my_plugin() {
     parent::WP_Widget(false, $name = __('Social Widget', 'wp_widget_plugin') );
    }

	// widget form creation
	function form($instance) {

// Check values
if( $instance) {
     $title = esc_attr($instance['title']);
     $facebook = esc_attr($instance['facebook']);
     $instagram = esc_textarea($instance['instagram']);
	 $google_plus = esc_textarea($instance['google_plus']);
	 $pinterest = esc_textarea($instance['pinterest']);
	 $linkedin = esc_textarea($instance['linkedin']);
	 $twitter = esc_textarea($instance['twitter']);
          $youtube = esc_textarea($instance['youtube']);
	 
	 
} else {
     $title = '';
     $facebook = '';
     $instagram = '';
	 $google_plus ="";
	 $pinterest ="";
	 $linkedin ="";
	 $twitter ="";
         $youtube="";
	
}
?>








<p>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget Title', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" value="<?php echo $twitter; ?>">
</p>
<p>
<label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('Youtube:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" value="<?php echo $youtube; ?>">
</p>




<?php
}

	// widget update
	// update widget
function update($new_instance, $old_instance) {
      $instance = $old_instance;
      // Fields
      $instance['title'] = strip_tags($new_instance['title']);
      $instance['facebook'] = strip_tags($new_instance['facebook']);
	   $instance['linkedin'] = strip_tags($new_instance['linkedin']);
	  $instance['google_plus'] = strip_tags($new_instance['google_plus']);
           $instance['instagram'] = strip_tags($new_instance['instagram']);
           $instance['youtube'] = strip_tags($new_instance['youtube']);
           
          
	  $instance['twitter'] = strip_tags($new_instance['twitter']);
	
	  
     return $instance;
}

	// widget display
// display widget
function widget($args, $instance) {
   extract( $args );
   // these are the widget options
   $title = apply_filters('widget_title', $instance['title']);
   $facebook = $instance['facebook'];
   $instagram = $instance['instagram'];
   $google_plus = $instance['google_plus'];
   $pinterest = $instance['pinterest'];
   $linkedin = $instance['linkedin'];
   $youtube = $instance['youtube'];
   
   $twitter =$instance['twitter'];
   
   
    
   echo $before_widget;
   // Display the widget

   // Check if title is set
   if ( $title ) {
      echo $before_title . $title . $after_title;
   }






  if( $facebook ) { ?>
<li><a class="header-social-icons" title="Facebook" href="<?php echo $facebook ; ?>" target="_blank"><span><i class="fa fa-facebook" aria-hidden="true"></i></span> Join Us on Facebook </a></li>
<?php } ?>

<?php   if( $twitter ) { ?>
<li><a class="header-social-icons" title="Twitter" href="<?php echo $twitter; ?>" target="_blank"><span><i class="fa fa-twitter" aria-hidden="true"></i></span> Follow Us on Twitter</a></li>
<?php } ?>

<?php if( $youtube ) { ?>
<li><a class="header-social-icons" title="Youtube" href="<?php echo $youtube; ?>" target="_blank"><span><i class="fa fa-youtube-play" aria-hidden="true"></i></span>Join us on Youtube</a></li>

<?php } 


  
 

  

}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("wp_my_plugin");'));




