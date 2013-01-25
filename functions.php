<?php

//Valley CDN url
function valleycdn() {
	global $valleycdn;
	$valleycdn = "http://cdn.valleychurch.eu";
	return $valleycdn;
}

//Custom WordPress login logo
function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_directory').'/images/wp-login-logo.png) !important; }
    </style>';
}

add_action('login_head', 'my_custom_login_logo');



wp_deregister_script('jquery');



//Register WP menus
function register_my_menus() {
  register_nav_menus(
    array( 'main-nav' => __( 'Main Nav' ) )
  );
}

add_action( 'init', 'register_my_menus' );



//Register custom post types
function create_my_post_types() {
	register_post_type( 'events',
		array(
			'labels' => array(
				'name' => __( 'Events' ),
				'singular_name' => __( 'Event' ),
				'add_new' => _x('Add New', 'events'),
    				'add_new_item' => __('Add New Event'),
    				'edit_item' => __('Edit Event'),
    				'new_item' => __('New Event'),
    				'all_items' => __('All Events'),
    				'view_item' => __('View Event'),
    				'search_items' => __('Search Events'),
    				'not_found' =>  __('No events found'),
    				'not_found_in_trash' => __('No events found in Trash'), 
    				'parent_item_colon' => '',
    				'menu_name' => 'Events'
			),
			'public' => true,
			'archive' => false,
			'show_ui' => true, // UI in admin panel
			'_builtin' => false, // It's a custom post type, not built in!
			'hierarchical' => false,
			'supports' => array( 'title', 'editor', 'revisions', 'thumbnail' ),
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'menu_position' => 6,
			'rewrite' => array( 'slug' => 'event', 'with_front' => false ),
		)
	);

	register_post_type( 'slider',
		array(
			'labels' => array(
				'name' => __( 'Home Slider' ),
				'singular_name' => __( 'Slider' ),
				'add_new' => _x('Add New', 'slider'),
    				'add_new_item' => __('Add New Slide'),
    				'edit_item' => __('Edit Slide'),
    				'new_item' => __('New Slide'),
    				'all_items' => __('All Slides'),
    				'view_item' => __('View Slide'),
    				'search_items' => __('Search Slides'),
    				'not_found' =>  __('No slides found'),
    				'not_found_in_trash' => __('No slides found in Trash'), 
    				'parent_item_colon' => '',
    				'menu_name' => 'Home Slider'
			),
			'public' => true,
			'archive' => false,
			'publicly_queryable' => false,
			'exclude_from_search' => true,
			'menu_position' => 9,
			'rewrite' => array( 'slug' => 'slider', 'with_front' => false ),
			'supports' => array( 'title', 'revisions' ),
		)
	);

	register_post_type( 'podcast',
		array(
			'labels' => array(
				'name' => __( 'Messages' ),
				'singular_name' => __( 'Message' ),
				'add_new' => _x('Add New', 'podcast'),
    				'add_new_item' => __('Add New Message'),
    				'edit_item' => __('Edit Message'),
    				'new_item' => __('New Message'),
    				'all_items' => __('All Messages'),
    				'view_item' => __('View Message'),
    				'search_items' => __('Search Messages'),
    				'not_found' =>  __('No messages found'),
    				'not_found_in_trash' => __('No messages found in Trash'), 
    				'parent_item_colon' => '',
    				'menu_name' => 'Messages'
			),
			'public' => true,
			'show_ui' => true,
			'archive' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'menu_position' => 8,
			'supports' => array( 'title', 'editor', 'thumbnail', 'author' ),
			'rewrite' => array( 'slug' => 'message', 'with_front' => false ),
		)
	);
}

add_action( 'init', 'create_my_post_types' );



//Add featured images
add_theme_support('post-thumbnails');



//Add custom css for TinyMCE
add_editor_style('editor-style.css');



//Add TypeKit to TinyMCE
add_filter("mce_external_plugins", "tomjn_mce_external_plugins");
function tomjn_mce_external_plugins($plugin_array){
	$plugin_array['typekit']  =  get_template_directory_uri().'/js/typekit.tinymce.js';
    return $plugin_array;
}

?>