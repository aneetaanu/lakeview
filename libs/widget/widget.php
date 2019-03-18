<?php 
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {
	
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar',
		'before_widget' => '<div class="side_bar_blog widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="rounded">',
		'after_title'   => '</h4>',
	) );
	

	register_sidebar( array(
		'name'          => 'Contact',
		'id'            => 'Contact',
		'before_widget' => '<div class="side_bar_blog widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="rounded">',
		'after_title'   => '</h4>',
	) );
	
	
	register_sidebar( array(
		'name'          => 'Opening Hours',
		'id'            => 'Opening Hours',
		'before_widget' => '<div class="side_bar_blog widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="rounded">',
		'after_title'   => '</h4>',
	) );
	

	register_sidebar( array(
		'name'          => 'Our Services',
		'id'            => 'Our Services',
		'before_widget' => '<div class="side_bar_blog widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="rounded">',
		'after_title'   => '</h4>',
	) );	
	
	register_sidebar( array(
		'name'          => 'Join us',
		'id'            => 'Join us',
		'before_widget' => '<div class="side_bar_blog widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="rounded">',
		'after_title'   => '</h4>',
	) );	
        register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footerwid',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
        register_sidebar( array(
		'name'          => 'Count Down',
		'id'            => 'countd',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );



}
add_action( 'widgets_init', 'arphabet_widgets_init' );

	


?>
