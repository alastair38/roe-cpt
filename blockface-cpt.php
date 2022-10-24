<?php
/*
Plugin name: Jenny J Roe Custom Post Types
Description: Custom post types for this website
Text Domain: jointstheme
*/


// let's create the function for the custom type
function roe_articles() {
	// creating (registering) the custom type
	register_post_type( 'articles', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Media', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('Media', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All Media', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New Media', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Media', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New Media', 'jointstheme'), /* New Display Title */
			'view_item' => __('View Media', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search Media', 'jointstheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Media', 'jointstheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_in_rest' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 6, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-id-alt', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'media', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
            'taxonomies' => array( 'category', 'post_tag' ),
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail')
	 	) /* end of options */
	); /* end of register post type */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'roe_articles');

	
	
	// let's create the function for the custom type
function roe_videos() {
	// creating (registering) the custom type
	register_post_type( 'videos', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Videos', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('Video', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All Videos', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New Video', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Videos', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New Video', 'jointstheme'), /* New Display Title */
			'view_item' => __('View Videos', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search Videos', 'jointstheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Videos', 'jointstheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_in_rest' => true,
			'template'              => array(
				array(
						'core/pattern',
						array(
								'slug' => 'blockhaus/blockhaus-publication-details',
						),
				),
		),
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 7, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-format-video', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'videos', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
            'taxonomies' => array( 'category', 'post_tag' ),
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail')
	 	) /* end of options */
	); /* end of register post type */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'roe_videos');


	// let's create the function for the custom type
function roe_resources() {
	// creating (registering) the custom type
	register_post_type( 'resources', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Publications', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('Publication', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All Publications', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New Publication', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Publications', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New Publication', 'jointstheme'), /* New Display Title */
			'view_item' => __('View Publications', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search Publications', 'jointstheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Publications', 'jointstheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_in_rest' => true,
			'template'              => array(
				array(
						'core/pattern',
						array(
								'slug' => 'blockhaus/blockhaus-publication-details',
						),
				),
		),
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 9, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-clipboard', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'publications', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
            'taxonomies' => array( 'category', 'post_tag' ),
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'thumbnail', 'editor', 'excerpt')
	 	) /* end of options */
	); /* end of register post type */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'roe_resources');


	// let's create the function for the custom type
	function roe_books() {
		// creating (registering) the custom type
		register_post_type( 'books', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
			 // let's now add all the options for this post type
			array('labels' => array(
				'name' => __('Books', 'jointstheme'), /* This is the Title of the Group */
				'singular_name' => __('Book', 'jointstheme'), /* This is the individual type */
				'all_items' => __('All Books', 'jointstheme'), /* the all items menu item */
				'add_new' => __('Add New', 'jointstheme'), /* The add new menu item */
				'add_new_item' => __('Add New Book', 'jointstheme'), /* Add New Display Title */
				'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
				'edit_item' => __('Edit Books', 'jointstheme'), /* Edit Display Title */
				'new_item' => __('New Book', 'jointstheme'), /* New Display Title */
				'view_item' => __('View Books', 'jointstheme'), /* View Display Title */
				'search_items' => __('Search Books', 'jointstheme'), /* Search Custom Type Title */
				'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
				'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
				), /* end of arrays */
				'description' => __( 'Books', 'jointstheme' ), /* Custom Type Description */
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => false,
				'show_in_rest' => true,
				'template'              => array(
					array(
							'core/pattern',
							array(
									'slug' => 'blockhaus/blockhaus-publication-details',
							),
					),
			),
				'show_ui' => true,
				'query_var' => true,
				'menu_position' => 9, /* this is what order you want it to appear in on the left hand side menu */
				'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu */
				'rewrite'	=> array( 'slug' => 'books', 'with_front' => false ), /* you can specify its url slug */
				'has_archive' => true, /* you can rename the slug here */
				'capability_type' => 'post',
				'hierarchical' => false,
							'taxonomies' => array( 'category', 'post_tag' ),
				/* the next one is important, it tells what's enabled in the post editor */
				'supports' => array( 'title', 'thumbnail', 'editor', 'excerpt')
			 ) /* end of options */
		); /* end of register post type */
	
	}
	
		// adding the function to the Wordpress init
		add_action( 'init', 'roe_books');
	

	
?>
