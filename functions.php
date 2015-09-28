<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-nav' => __( 'Navigation Menu' ),
      'footer-social' => __( 'Footer - Social' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Add Post Thumbnail Support

add_theme_support( 'post-thumbnails' );


add_filter( 'pre_get_posts', 'my_get_posts' );
function my_get_posts( $query ) {
if ( is_home() && false == $query->query_vars['suppress_filters'] )
$query->set( 'post_type', array( 'post', 'page') );
return $query;
}

// Add Custom Post "Episodes"

add_action( 'init', 'create_posttype_episode' );
function create_posttype_episode() {
	register_post_type( 'dojo_episode',
		array(
			'labels' => array(
				'name' => __( 'Episodes' ),
				'singular_name' => __( 'Episode' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'episodes'),
			'supports' => array('title', 'editor', 'author', 'thumbnail'),
		)
	);
}

?>
