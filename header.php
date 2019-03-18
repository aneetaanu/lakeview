<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">



<meta name="developer" content="Hardeep Singh, www.artifexedge.com">
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
  <?php global $redux_demo; ?>
<?php if($redux_demo['favicon']['url']) { ?>
<link rel="icon" href="<?php echo $redux_demo['favicon']['url']; ?>">
<?php } else{ ?>


<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">


 <?php } ?>


<?php if(is_page() && !is_home() && !is_front_page()){  ?>
	
	<link href="<?php bloginfo('template_url'); ?>/css/dental_page/theme.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url'); ?>/css/dental_page/default.css" rel="stylesheet" />
    
    <?php } ?>





<title>
<?php wp_title('|',true,'right'); ?>
<?php bloginfo('name'); ?>
</title>


<!-- Bootstrap core CSS -->
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" rel="stylesheet">
<?php if(is_archive() || is_singular()) { ?>
<link href="<?php bloginfo('template_url'); ?>/css/blog.css" rel="stylesheet">
<?php } ?>
<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
<!--[if lt IE 9]>
<script src="<?php bloginfo('template_url'); ?>/js/ie8-responsive-file-warning.js"></script>
<![endif]-->
<script src="<?php bloginfo('template_url'); ?>/js/ie-emulation-modes-warning.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	<style>
#main_countedown_widget_2 .time_left{ width:65px !important; height:90px !important; background: #202020 !important; color: #f8f8f8 !important; display: block !important; font-size: 2em !important;  font-weight: bold !important; line-height:2.9em !important;  text-shadow: 0 0 10px rgba(0,0,0,0.8) !important; position:relative; }
#main_countedown_widget_2 .time_description{ font-size: 11px !important; padding-right: 5px; text-transform: uppercase !important; color:#FFF !important; font-family: 'Gotham-Light' !important; margin-top:7px !important; }	
#main_countedown_widget_2 .time_left:before{ position:absolute !important; width:100% !important; float:left !important; left:0px !important; right:0px !important; height:2px !important; background:translate !important; box-shadow:1px 1px 1px #000 !important; top:43px !important; z-index:999 !important; }
		
.side_bar_blog{ margin-bottom: 25px !important; }		
		
.vc_row{ margin:0 !important ; }
.vc_column-inner { padding:0 !important; }
.section_about ul{ width:100%;float:left; display: block; padding:0px; }		
.min_top.sticky .navbar-brand{ display:none !important; }
footer ul.socail_icon li:hover a span{ background:#057fc3 !important; }	
footer ul.socail_icon{ padding:0px !important; }		
footer ul.list_box{ padding:0px !important; }
.articles{ max-width:1170px !important; }
.content p{ color:#808080; }
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus{ background:#FFF; color:#057fc3; }
.kk-star-ratings .kksr-star{ width: 121px !important; float: none !important; display: inline-block !important; }
.kk-star-ratings.lft{ width:100%; padding-top:20px; margin-right:0px !important; text-align: center; }
.form_box button{border-radius:3px !important; transition: all .5s ease-in-out; border:2px solid #FFF !important;  padding: 7px 45px !important;}
.form_box button:hover {border:2px solid #FFF !important;}

.wpb_single_image wpb_content_element vc_align_left   kpmodi{
background: url(images/7.png) ;


}

@media(max-width:991px){
.vc_column_container > .vc_column-inner{ float:left; }
	.side_bar_blog{ margin-bottom: 18px !important;  }	
		}
@media(max-width:767px){
.contact_area .contact_col .cleaning h5{ font-size: 12.37px !important; padding-left:10px !important; text-align: left !important; }
.min_top.sticky .navbar-brand{ display:inline-block !important; }
.min_top.sticky{ padding:6px 0px !important; }	
.min_top.sticky .contact_area .col-xs-6.contact_col{ display:none; }
.articles h1{ font-size:30px ;  }
.articles{ max-width:100%; float:left; padding:0px !important;  }	
	.new-sec-lake{ min-height:auto !important; padding: 9% 2% 11% 2% !important; }
	.new_class_pp{ min-height:auto !important; padding: 9% 2% 11% 2% !important; }
	#main_countedown_widget_2 .countdown{ padding-left: 2px; }
	#main_countedown_widget_2 .time_left{ line-height: 66px !important; width: 60px !important;
    height: 74px !important; }
	#main_countedown_widget_2 .element_conteiner{ min-width: 62px !important; }
	.new-sec-lake .app-sec{ margin-top: 36px; }
	
}
@media(max-width:420px){ 
.image{ margin:10px 0px !important; }	
.image img{ max-width:100%; width:100% !important; }	
}
/*==== 8-10-2018 css =========*/
.contact_area .contact_col .cleaning{ display:none; }
.vc_row{ margin:0 !important ; }
.vc_column-inner { padding:0 !important; }
.dental_servies .button.vc_btn3-right{ width:100%; float: left;   }
/*==============*/
.section1{ width:100%; float:left; background:#057ec3; color:#FFF; padding:45px 0px 55px 0px; }
.section1 .title{ margin:0px;}
.section1 .title h2{ font-size:34.18px; font-family: 'Gotham-Bold'; color: #FFF; text-align: left;  background:none; padding:0px; margin: 0px; }
.section1 .title h2 span{ font-family: 'Gotham-Light'; width: 100%; float: left;}
.section1 a{ max-width:287px; width:100%; text-align:center; margin-top:10px; float:right; font-size:17.89px; color:#057ec3; background:#FFF; border:2px solid #FFF; border-radius:3px;    
 padding: 1px 20px; height:46px; line-height:40px; font-family: 'Gotham-Medium'; }
.section1 a:hover{ border:2px solid #FFF; color:#FFF; background:#057ec3; }
.section1 .vc_col-sm-4 p{ width:100%; float: right;   }
.wpb_content_element{ margin:0px !important ;  }

.dental_servies .container{ padding:0px;  }
.form_box{ width:100%; float:left; text-align:center; height:auto !important;  padding: 50px 120px;   margin:40px 0px !important; background:#057ec3; }
.form_box h2{  width: auto; float: none;  display: inline-block; /* background: url(images/lake_line.png) no-repeat center bottom; */ padding-bottom:25px; margin-bottom:21px;
    color: #FFF;  font-size: 30.66px;   font-family: 'Gotham-Bold';  }
.form_box input{ font-size: 14px; color: #1a374d; height:35px; border-radius:0px; box-shadow: none; margin-top:0px; padding:0px 15px 0px 15px; font-weight: 400; margin-bottom:25px; border:1px solid #FFF;  color: #FFF; outline: none; background: transparent; border-left:none; border-top:none; border-right:none;  }
.form_box textarea{ width: 100%; float: left;border-radius:0px; font-size: 14px; font-weight: 400; padding: 12px 15px 12px 15px;  background: transparent;  border-left:none !important; border-top:none !important; border-right:none !important;
border:1px solid #FFF; box-shadow:none; height: 130px; color: #FFF;  outline: none; }
.form_box button{ float:none; display:inline-block; outline: none; padding:10px 45px; font-size:16px; text-align:center; color:#057ec3; background:#FFF ; font-weight: 600; border:none; border-radius:7px; margin:30px 0px 0px;  border:1px solid #057ec3; }
.form_box button:hover{ border:1px solid #FFF; color: #FFF; background:#057ec3;  }
#myModal .modal-body{ width:100%; float: left;   }
#myModal .modal-header .close {  margin-top: 0; position: absolute;  right:5px; padding:5px 10px;  top: 10px;  
    opacity: 1; }
#myModal .modal-header{ width: 100%; float:left; border-bottom:1px solid #ddd;   }
#myModal .modal-title{ color:#FFF; font-weight: 600;  }
.modal{ padding-top: 6%;  }
#myModal .modal-content{ background:#057ec3; width:100%; float: left;  }
.close{ color:#FFF; }
.form_box input::-webkit-input-placeholder { color: #FFF; }
.form_box input::-moz-placeholder { color: #FFF; }
.form_box input:-ms-input-placeholder { color: #FFF; }
.form_box input:-moz-placeholder { color: #FFF; }

.form_box textarea::-webkit-input-placeholder { color: #FFF; }
.form_box textarea::-moz-placeholder { color: #FFF; }
.form_box textarea:-ms-input-placeholder { color: #FFF; }
.form_box textarea:-moz-placeholder { color: #FFF; }
footer{  border-top: 5px solid #808080 !important; }
.lakeform{ width:100%; float:left; margin:40px 0px 0px 0px !important; }
.lakeform .kpmodi .vc_figure { width:100%; }
.lakeform .kpmodi .vc_figure { width:100%; }
.lakeform .kpmodi .vc_figure .vc_single_image-wrapper{ width:100%; }
.lakeform .kpmodi .vc_figure .vc_single_image-wrapper img{ height:700px;  }	
.dental_servies ul{ margin-bottom:21px !important; }
.payment_content{ width:100%; float:left; padding:30px 0px 20px 0px; }		
.payment_content h1{ color:#7b7b7b; font-size:20px; font-family: 'Gotham-Medium';}	
.payment_content h2{ color:#7b7b7b; font-size:20px; font-family: 'Gotham-Medium'; margin-top: 25px;  margin-bottom: 5px; }
.payment_content a{ color:#7b7b7b; border:2px solid #057ec3  !important; background:#057ec3 !important; border-radius:0px; padding: 10px 30px 10px 30px; color:#FFF; border-radius:7px; font-family: 'Gotham-Medium'; }
.payment_content a:hover{ background:#FFF  !important; color:#057ec3; border-color:#057ec3  !important;  }		

footer ul.list_box li{ line-height:normal; }	
.blog_section .authore-image{ position: relative; float: right; text-align: center; max-width: 70px; width: 100%; }
.blog_section .authore-image img{border-radius: 70px; height: 70px;  width: 70px; }
.blog_section .authore-image p{ width:100%; float:left; text-align:center; color:#7b7b7b; font-family: 'Gotham-Light'; }

/*=======*/
	
.payment_box{ width:100%; float:left; padding:30px 0px 20px 0px; }		
.payment_box h1{ color:#7b7b7b; font-size:20px; font-family: 'Gotham-Medium';}	
.payment_box h2{ color:#7b7b7b; font-size:20px; font-family: 'Gotham-Medium'; margin-top: 25px;  margin-bottom: 5px; }
.payment_box a{ color:#7b7b7b; border:2px solid #057ec3  !important; background:#057ec3 !important; border-radius:0px; padding: 10px 30px 10px 30px; color:#FFF; border-radius:7px; font-family: 'Gotham-Medium'; }
.payment_box a:hover{ background:#FFF  !important; color:#057ec3; border-color:#057ec3  !important;  }		
.payment_box p{ color:#7b7b7b; font-family: 'Gotham-Light'; }
.payment_box p a{ color:#057ec3 !important; border:none  !important; background:transparent !important; border-radius:0px; padding:0px !important;font-family: 'Gotham-Medium'; }
.payment_box p a:hover{ color:#7b7b7b !important; background:transparent !important; }	
.blog_heading{ width:80% !important; }
p.blog_head{ font-family: 'Gotham-Bold'; }
p.author_name{ font-family: 'Gotham-Light'; }	
.blog_feature_cantant p{ font-family: 'Gotham-Light'; }	
.blog_post_date .date_info{ font-family: 'Gotham-Light'; }	
.blog_post_date .date_fix{ font-family: 'Gotham-Bold'; }
.read_more{ font-family: 'Gotham-Medium'; text-transform:capitalize !important; }
.side_bar h4{ font-family: 'Gotham-Bold';  }
.side_bar_blog .one_line_layout .small_heading h4{ font-family: 'Gotham-Medium';  }	
.one_line_layout .feature_icon{  margin-right:15px; }		
.side_bar_blog .cont_list p{ font-family: 'Gotham-Light'; } 
.fa-angle-right:before{ font-size: 16px; }
.categary li a{ font-family: 'Gotham-Medium' !important; }		
.padding_layout_1{  padding:60px 0px !important; }	
.col_sm{ display:block; }
.col_xs{ display:none; }
.read_more{ padding:8px 20px !important; }	
.side_bar{  margin:0px !important; }	
/*===11-10-2018====*/	
.section1 a{    margin-top: 21px;}	
.widget_wp_my_plugin span .fa{    background-color: #000;  height: 30px;  width: 30px;  text-align: center;  border-radius: 21px;
    line-height:30px;  color: #FFF; margin: 0px 4px 7px 0px;}
.widget_wp_my_plugin a{color:#808080; font-family: 'Gotham-Light';}
.widget_wp_my_plugin a:hover{color: #057fc3; font-family: 'Gotham-Bold';}
 .widget_wp_my_plugin ul{padding-left:0px;}
/*===12-10-2018====*/
.blog_feature_cantant .comment-respond h3{color:#057fc3;}
.blog_feature_cantant .comment-respond textarea{width:100%; float:left; padding:3px 15px; border-radius: 0; border: 1px solid #DDD;
box-shadow: none;}
.blog_feature_cantant .comment-respond textarea::placeholder{color:#000;}
.blog_feature_cantant .comment-respond  label{width:100%; float:left;  color:#000; }
.blog_feature_cantant .comment-respond input{width:100%; float:left; min-height: 35px;  padding:3px 15px; border-radius: 0;
border: 1px solid #DDD; box-shadow: none;}
.blog_feature_cantant .comment-respond input::placeholder{color:#000;}
.blog_feature_cantant .comment-notes{margin-bottom:10px;}	
.blog_feature_cantant .submit{margin-top: 10px;  width: 100%; float: left; background: #057ec3; color: #FFF;  font-size: 17.89px;
    border-radius: 4px;  border: 2px solid #057ec3;  min-height: 46px; line-height: 46px;  text-align: center;  font-family: 'Gotham-Medium';}
.blog_feature_cantant .submit:hover{background: #FFF; color: #057ec3;}
.blog_feature_cantant .shr{  margin: 5px 10px 0 0;}
.blog_feature_cantant .addtoany_shortcode{float:right; display:inline-block;}
.form_box h2 {background: url(http://artifexedge.com/dev/lakeview_wp/wp-content/themes/lakeview-view/images/imgpsh_fullsize.jpeg) no-repeat center bottom; padding-bottom: 20px;}
.banner .show_on_desktop{ display:none; }
.banner .banner_box h4{ color:#404040; }



/*=======*/

@media(max-width:1600px) { 
	.lakeform .kpmodi .vc_figure .vc_single_image-wrapper img{ height:555px; }	
	.form_box{ padding: 50px 80px;} 
}	
		
@media(max-width:1400px){
.form_box{ padding: 40px 42px;} 		
.lakeform .kpmodi .vc_figure .vc_single_image-wrapper img{ height:455px;  }			
	.form_box textarea{height:110px;}

		}
@media(max-width:1199px){
.form_box{ padding:25px 22px;} 		
.lakeform .kpmodi .vc_figure .vc_single_image-wrapper img{ height:390px;  }	
	.form_box h2{ font-size:22px; margin-bottom:20px; }	
	.form_box textarea{ height:100px; }	
	.blog_feature_cantant{ padding:20px 15px; }	
.widget_wp_my_plugin a{font-size:13px;}
}		
		
@media(max-width:991px){
.form_box{ padding: 21px 15px; } 		
.lakeform .kpmodi .vc_figure .vc_single_image-wrapper img{ height:300px;  }	
.form_box h2{ padding-bottom: 15px; }	
.form_box input{ margin-bottom: 16px; height: 28px; }
.form_box textarea{ height:65px; }
.section1 .title h2{ font-size:27px; }
.section1 a{ font-size: 13.89px;  }
.section1{ padding: 25px 0px 40px 0px; }
footer .col-sm-3{  min-height: 290px; }
.padding_layout_1{ padding:20px 0px !important; }
.logo img{ width:100%; }

	
}
@media(max-width:767px){
.section1{ text-align: center;  }
.section1 a{ display: inline-block; float: none; }
.lakeform .kpmodi .vc_figure .vc_single_image-wrapper img { height:auto; }
.form_box{ height:auto; padding:40px 15px; } 	
.section1 .title h2{ text-align:center; margin-bottom:10px;  }	
footer .col-sm-3{ width:50%;  float:left;  min-height:275px !important;}
footer ul.socail_icon{ margin-bottom:20px; }
.vc_custom_1538998065358{ padding-top: 25px !important; padding-bottom: 30px !important; }
.padding_layout_1{  padding:30px 0px !important; }	
.col_sm{ display:none; }
.col_xs{ display:block; }	
.contact_area .col-xs-6.contact_col {display:none;}  	
.about_menu_section .vc_col-sm-6 h2 {    margin-top: 10px !important;}
/*=====*/
.about_menu_section .vc_column-inner{padding:0px !important; }
.about_post .vc_col-sm-3{ float:left; margin-bottom:15px; padding:0px !important; }
.about_post .vc_col-sm-3 .vc_column-inner{ min-height: inherit;
padding: 0px 15px 20px !important; }
.about_post{ padding: 20px 0px 20px 0px; }
.kpmodi{ background-size: cover !important; }

}
@media(max-width:520px){
footer .col-sm-3{ width:100%; min-height:inherit !important;}
.banner .banner_box{  max-width: 180px; }	
.title{ margin-bottom: 25px; }	
.payment_content{ padding: 0px 0px 20px 0px; }	
.payment_content h2{ font-size:15px; }	
.payment_box{ padding: 0px 0px 20px 0px; }	
.payment_box h2{ font-size:15px; }	
.padding_layout_1{  padding:20px 0px 20px 0px !important; }	
	.blog_post_date{ width:60px; height:auto; }	
	.blog_post_date .date_fix{ line-height: 37px; font-size: 23px; }
	.blog_heading{ padding-left:70px; }
	.blog_head{ font-size:16px; line-height:normal; }
	.blog_section .authore-image{ max-width:50px; }
	.blog_section .authore-image img{ width:50px; height:50px; }
	.read_more{     padding: 7px 8px !important; font-size: 12px }
	.blog_feature_cantant{ border: solid #eee 2px; }
	.addtoany_list.a2a_kit_size_32 a:not(.addtoany_special_service)>span{ border-radius:60px; }
	 .widget_wp_my_plugin ul{padding-left:0px;}
   .form_box textarea {height:80px;}
.blog_feature_cantant .comment-respond h3 {font-size:20px;}
.form_box h2 {padding-bottom: 15px; margin-bottom: 25px;}
.side_bar_blog {  margin-bottom: 0px;}
.side_bar_blog {margin-top:15px;}
.blog_heading {margin-bottom: 17px; }
.banner .banner_box {position:relative; max-width:100%;}
.banner .banner_box h3 {display:none}
.banner .show_on_desktop {display: block; position: absolute;
font-size: 17px; width:42%; margin-top:35px; padding-left: 15px; color: #404040; font-family: 'Gotham-Bold';}
.banner .show_on_desktop span{ font-family: 'Gotham-Light' !important; }
/*=====*/
.about_menu_section .vc_col-sm-6 h2{  font-size:25px; }
    }		

/*==== 8-10-2018 css end =========*/
		
</style>
<?php wp_head(); ?>
</head>

<body <?php body_class() ; ?>>
<header class="min_top sticky">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-4 logo">

<a href="<?php bloginfo('url'); ?>">
        <?php if($redux_demo['logo_123']['url']) { ?>
<img src="<?php echo $redux_demo['logo_123']['url']; ?>" alt="<?php get_bloginfo(); ?>">
<?php } else { ?><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php get_bloginfo(); ?>"> <?php } ?>
        
    </a>    
</div>
<div class="col-xs-12 col-sm-8">
<div class="contact_area">
<div class=" col-xs-6 contact_col">
<div class="line_box"></div>

<?php if($redux_demo['header_phone'] !="") { ?>
<h3><?php echo $redux_demo['header_phone']; ?></h3>
<?php }else{ ?> <?php } ?>

<p>
    <?php echo $redux_demo['header_phone_text']; ?>
</p>
</div>
<div class=" col-xs-6 contact_col">

<?php  if($redux_demo['header_location'] !=""){ ?>
<?php echo $redux_demo['header_location']; ?>
<?php } ?>
</div>
<div class="contact_col"><div class="cleaning">
        <?php if($redux_demo['header_pricing_box'] !=""){ ?>
        <?php echo $redux_demo['header_pricing_box']; ?>
        <?php } ?>
       
    
    </div></div>

</div>
<nav class="navbar navbar-default ">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
	
 <?php if($redux_demo['logo_123']['url']) { ?>    
    
    
    
    <img src="<?php echo $redux_demo['logo_123']['url'] ; ?>" alt="img">

 <?php } else{?>
    <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="img">
 <?php } ?>
</a>
	<div class="xs-show">
		<a href="https://www.google.com/maps/place/5810+Wiles+Rd,+Coral+Springs,+FL+33067,+USA/@26.2856005,-80.2051684,17z/data=!3m1!4b1!4m5!3m4!1s0x88d91b4595175311:0x9d259d8280894080!8m2!3d26.2856005!4d-80.2029797"><i class="fa fa-map-marker" ></i> </a>
		
		
	</div>
</div>
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav">
     <?php wp_nav_menu(array('theme_location'=>'main_menu','container'=>false,'items_wrap' => '%3$s','menu_class'=>'nav navbar-nav ')); ?>

</ul>
</div>
</nav>
</div>
</div>
</div>
</header>
    
    <?php if(get_field('banner_image')){ ?>
<div class="banner">
<img class="img-responsive" src="<?php echo wp_get_attachment_url(the_field('banner_image')); ?>" alt="img">
<h3 class="show_on_desktop"><?php  the_field('heading_banner'); ?></h3>
<div class="container">
<div class="banner_box">
<h3 class="hide_on_mobile"><?php  the_field('heading_banner'); ?></h3>
<a class="no" href="tel:<?php the_field('second_button_text_2'); ?>"><?php the_field('second_button_text_2'); ?></a>
<h4>or</h4>
<a class="book" href="<?php the_field('button_link'); ?>"><?php the_field('button_text_here_1'); ?></a>
<?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings(18); endif; ?>

</div>
</div>

</div>
    <?php } ?>