<?php

// Register Custom Post Type
function event_post_type() {

	$labels = array(
		'name'                  => _x( 'Event', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Event', 'text_domain' ),
		'name_admin_bar'        => __( 'Event', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Event:', 'text_domain' ),
		'all_items'             => __( 'All Events', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New Event', 'text_domain' ),
		'new_item'              => __( 'New event', 'text_domain' ),
		'edit_item'             => __( 'Edit event', 'text_domain' ),
		'update_item'           => __( 'Update event', 'text_domain' ),
		'view_item'             => __( 'View event', 'text_domain' ),
		'view_items'            => __( 'View events', 'text_domain' ),
		'search_items'          => __( 'Search event', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Event', 'Post Type General Name', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'event', $args );

}
add_action( 'init', 'event_post_type', 0 );


function campus_post_type(){
	
	$labels = array(
		'name'                  => _x( 'Campsuses', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Campus', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Campuses', 'text_domain' ),
		'name_admin_bar'        => __( 'Campus', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Campus:', 'text_domain' ),
		'all_items'             => __( 'All Campuses', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New Campus', 'text_domain' ),
		'new_item'              => __( 'New event', 'text_domain' ),
		'edit_item'             => __( 'Edit Campus', 'text_domain' ),
		'update_item'           => __( 'Update Campus', 'text_domain' ),
		'view_item'             => __( 'View Campus', 'text_domain' ),
		'view_items'            => __( 'View Campuses', 'text_domain' ),
		'search_items'          => __( 'Search Campus', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Campus', 'Post Type General Name', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'campus', $args );
}


add_action( 'init', 'campus_post_type');


// Programs Post type
// Register Custom Post Type
function programs_post_type() {

	$labels = array(
		'name'                  => _x( 'programs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'program', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'programs', 'text_domain' ),
		'name_admin_bar'        => __( 'programs', 'text_domain' ),
		'archives'              => __( 'program Archives', 'text_domain' ),
		'attributes'            => __( 'program Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent program:', 'text_domain' ),
		'all_items'             => __( 'All programs', 'text_domain' ),
		'add_new_item'          => __( 'Add New program', 'text_domain' ),
		'add_new'               => __( 'Add New program', 'text_domain' ),
		'new_item'              => __( 'New program', 'text_domain' ),
		'edit_item'             => __( 'Edit program', 'text_domain' ),
		'update_item'           => __( 'Update program', 'text_domain' ),
		'view_item'             => __( 'View program', 'text_domain' ),
		'view_items'            => __( 'View programs', 'text_domain' ),
		'search_items'          => __( 'Search program', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'program', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'programs', $args );

}
add_action( 'init', 'programs_post_type', 0 );

?>