<?php 

    
/**
	 * Post Type: Inspiration?.
	 */
	$labels = array(
		"name" => __( 'Testimonial', '' ),
		"singular_name" => __( 'Testimonial', '' ),
	);
	$args = array(
		"label" => __( 'Testimonial', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "testimonial", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt" ),
	);

register_post_type( "testimonial", $args );

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$labels = array(
		"name" => __( 'Projects', '' ),
		"singular_name" => __( 'Projects', '' ),
	);
	$args = array(
		"label" => __( 'Projects', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "projects", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt" ),
	);

register_post_type( "project", $args );

?>
