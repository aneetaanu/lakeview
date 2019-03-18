<?php add_action( 'vc_before_init', 'fixed_price_m' );
 function fixed_price_m() {


   // print_r($post_types);
 		
		
   vc_map( array(
      "name" => __( "Custom heading", "my-text-domain" ),
      "base" => "banner_header_main_m",
      "class" => "",
      "category" => __( "Content", "my-text-domain"),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
           array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Heading here", "my-text-domain" ),
            "param_name" => "title",
            "value" => __( "", "my-text-domain" )),
          
          
                     array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Subtitle", "my-text-domain" ),
            "param_name" => "title_subtitle",
            "value" => __( "", "my-text-domain" )),
          
          
          
 

        )
   ) );
}

function  banner_header_main_m($atts){
	  $a = shortcode_atts( array(
		'title' => '',
  'title_subtitle'=>'',

	
	), $atts );

	ob_start();
	
        
    
        
        
	?>


<div class="title"><h2><?php echo $atts['title']; ?> <span><?php echo $atts['title_subtitle'];  ?></span></h2></div>

<?php
return ob_get_clean();
}
add_shortcode('banner_header_main_m','banner_header_main_m');

///////////////////////////////////////////////////////////////////////////////////////////
add_action( 'vc_before_init', 'fixed_price_mm' );
 function fixed_price_mm() {


   // print_r($post_types);
 		
		
   vc_map( array(
      "name" => __( "Call to action", "my-text-domain" ),
      "base" => "banner_header_main_mm",
      "class" => "",
      "category" => __( "Content", "my-text-domain"),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
           array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Heading here", "my-text-domain" ),
            "param_name" => "title",
            "value" => __( "", "my-text-domain" )),
          
          
                     array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Subtitle", "my-text-domain" ),
            "param_name" => "title_subtitle",
            "value" => __( "", "my-text-domain" )),
                            array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Button title", "my-text-domain" ),
            "param_name" => "button_title_c",
            "value" => __( "", "my-text-domain" )),
          
                                      array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Button link", "my-text-domain" ),
            "param_name" => "button_link",
            "value" => __( "", "my-text-domain" )),
          
          
          
 

        )
   ) );
}

function  banner_header_main_mm($atts){
	  $a = shortcode_atts( array(
  'title' => '',
  'title_subtitle'=>'',
  'button_title_c'=>'',
  'button_link'=>'',

	
	), $atts );

	ob_start();
	
        
    
        
        
	?>


<div class="section1">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-8"><h2><span><?php echo $atts['title']; ?></span> <br><?php echo $atts['title_subtitle']; ?></h2></div>
<div class="col-xs-12 col-sm-4"> <a href="<?php echo $atts['button_link']; ?>"><?php echo $atts['button_title_c']; ?></a> </div>
</div>

</div>
</div>

<?php
return ob_get_clean();
}
add_shortcode('banner_header_main_mm','banner_header_main_mm');
/////////////////////////////////////////////////////custom heading//////////////////////////////////////////////////////////////////////////////////////////



add_action( 'vc_before_init', 'fixed_price_mmm' );
 function fixed_price_mmm() {


   // print_r($post_types);
 		
		
   vc_map( array(
      "name" => __( "Column custom heading ", "my-text-domain" ),
      "base" => "banner_header_main_mmm",
      "class" => "",
      "category" => __( "Content", "my-text-domain"),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
           array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Heading here", "my-text-domain" ),
            "param_name" => "title",
            "value" => __( "", "my-text-domain" )),
        )
   ) );
}

function  banner_header_main_mmm($atts){
	  $a = shortcode_atts( array(
		'title' => '',

	
	), $atts );

	ob_start();
	
        
    
        
        
	?>
<div class="title"><h3> <span><?php echo $atts['title_subtitle'];  ?></span></h3></div>



<?php
return ob_get_clean();
}
add_shortcode('banner_header_main_mmm','banner_header_main_mmm');

///////////////////////////////////////////images/////////////////////////////////////////////////

add_action( 'vc_before_init', 'fixed_price_cc' );
 function fixed_price_cc() {


   // print_r($post_types);
 		
		
   vc_map( array(
      "name" => __( "Logo slider", "my-text-domain" ),
      "base" => "shortcode_images",
      "class" => "",
      "category" => __( "Content", "my-text-domain"),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
           array(
            "type" => "attach_images",
            "holder" => "div",
            "class" => "",
            "heading" => __( "select images", "my-text-domain" ),
            "param_name" => "image_here",
            "value" => __( "", "my-text-domain" )),
        )
   ) );
}

function  shortcode_images($atts){
	  $a = shortcode_atts( array(
		'image_here' => '',

	
	), $atts );

	ob_start();
	
        
    $image=$atts['image_here'];
	
        $images=explode(',',$image);
        
	?>

<div class="container">
<div class="owl_slider">
<div id="owl-demo" class="owl-carousel owl-theme">
	<?php foreach($images as $image){ ?>
<div><img class="img-responsive" src="<?php echo wp_get_attachment_url($image); ?>
	" alt="img"></div>
	<?php } ?>
</div>
</div>
</div>


<?php
return ob_get_clean();
}
add_shortcode('shortcode_images','shortcode_images');




