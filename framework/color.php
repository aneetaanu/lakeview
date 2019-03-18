<?php
$root =dirname(dirname(dirname(dirname(dirname(__FILE__)))));
//echo $root; 
if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}
header("Content-type: text/css; charset=utf-8");
global $theme_option; 
function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}
$b=$theme_option['main-color'];
$rgba = hex2rgb($b); 
?>
/* Color Theme - Amethyst /Violet/ */

color - <?php echo $theme_option['main-color']; ?>

.item a .desc {background: rgba(<?php echo $rgba[0]; ?>, <?php echo $rgba[1]; ?>, <?php echo $rgba[2]; ?>, 0.95);}


.title-box h5,.loading h5,.navbar-default .navbar-nav>li>a:focus,.navbar-default .navbar-nav>li>a:hover,.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover
,.intro .file-box a,.quote-bar h4,.home-services .description,.home-features .wpb_column:hover h4,.home-gallery ul.filter li .current,.video-bg h2,
.news h3,.news-list h3,.news-list h3 a,.blog-sidebar .categories ul li a:hover,.ceo-says p span,.projects .project-box:hover h5,footer ul li a:hover,footer .sub-footer .themezinho i,
.slider .text-container h6{
  color:<?php echo $theme_option['main-color']; ?>;
}
.loading #loader path, #loader rect {fill: <?php echo $theme_option['main-color']; ?>;}
.title-box span,.map-container .close-btn,.top-bar,.navbar-default .navbar-nav>li span,.page-title .inner,.intro .file-box a:hover,.quote-bar,.home-services figure,
.home-services .border,.home-services .owl-dot.active,.home-gallery ul.filter li a:hover,.home-gallery ul.filter li a:focus,.news figure,.news figure .icon,.news .border,
.news-list figure,.news-list figure .icon,.news-list .border,.blog-sidebar .social-media a,.blog-sidebar .search form button[type="submit"],
.blog-sidebar .search form input.search-submit,.blog_wrap form input.search-submit,.quote .border,.projects .nav-tabs>li.active a,.projects .project-box figure,
.projects .project-box figcaption .border,.services aside,.footer-bar,footer .border{
  background:<?php echo $theme_option['main-color']; ?>;
}

.navbar-nav>li>.dropdown-menu,.news-list ul.page-numbers>li>span.page-numbers.current, ul.page-numbers>li>span.page-numbers.current:focus, ul.page-numbers>li>span.current, ul.page-numbers>li>span.current:focus
{ background-color:<?php echo $theme_option['main-color']; ?> !important;}

.intro .file-box a,.intro .file-box a:hover{ border:1px solid <?php echo $theme_option['main-color']; ?>; }

.news figure,.news-list figure{ border-top:4px solid <?php echo $theme_option['main-color']; ?>;}

.log_page div.tittle h3{
  color: <?php echo $theme_option['main-color']; ?> !important;
}
#nav ul.dropdown-menu li:hover ul.dropdown-menu{
    background-color: <?php echo $theme_option['main-color']; ?> !important;
}

.navbar-default {
  background: <?php echo $theme_option['header-color']; ?>;
}