<?php
/*
Plugin Name: DM Missoula Beer
Plugin URI: http://draughtworksbrewery.com/
Description: Helping ugly people get laid since 1862
Version: 1.0.5
Author: Bradford Knowlton
Author URI: http://bradknowlton.com/
License: GPLv2
GitHub Plugin URI: https://github.com/DesignMissoula/DM-beer
GitHub Branch:     master
*/

add_action( 'init', 'register_cpt_beer' );
function register_cpt_beer() {
	
	$labels = array(
		'name' => _x( 'Beer Categories', 'beer_categories' ),
		'singular_name' => _x( 'Beer Category', 'beer_categories' ),
		'search_items' => _x( 'Search Beer Categories', 'beer_categories' ),
		'popular_items' => _x( 'Popular Beer Categories', 'beer_categories' ),
		'all_items' => _x( 'All Beer Categories', 'beer_categories' ),
		'parent_item' => _x( 'Parent Beer Category', 'beer_categories' ),
		'parent_item_colon' => _x( 'Parent Beer Category:', 'beer_categories' ),
		'edit_item' => _x( 'Edit Beer Category', 'beer_categories' ),
		'update_item' => _x( 'Update Beer Category', 'beer_categories' ),
		'add_new_item' => _x( 'Add New Beer Category', 'beer_categories' ),
		'new_item_name' => _x( 'New Beer Category', 'beer_categories' ),
		'separate_items_with_commas' => _x( 'Separate beer categories with commas', 'beer_categories' ),
		'add_or_remove_items' => _x( 'Add or remove Beer Categories', 'beer_categories' ),
		'choose_from_most_used' => _x( 'Choose from most used Beer Categories', 'beer_categories' ),
		'menu_name' => _x( 'Beer Categories', 'beer_categories' ),
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'show_tagcloud' => true,
		'show_admin_column' => false,
		'hierarchical' => true,
		'rewrite' => true,
		'query_var' => true
	);
	register_taxonomy( 'beer_categories', array('beer'), $args );

	
	$labels = array(
		'name' => _x( 'Beers', 'beer' ),
		'singular_name' => _x( 'Beer', 'beer' ),
		'add_new' => _x( 'Add New', 'beer' ),
		'add_new_item' => _x( 'Add New Beer', 'beer' ),
		'edit_item' => _x( 'Edit Beer', 'beer' ),
		'new_item' => _x( 'New Beer', 'beer' ),
		'view_item' => _x( 'View Beer', 'beer' ),
		'search_items' => _x( 'Search Beers', 'beer' ),
		'not_found' => _x( 'No beers found', 'beer' ),
		'not_found_in_trash' => _x( 'No beers found in Trash', 'beer' ),
		'parent_item_colon' => _x( 'Parent Beer:', 'beer' ),
		'menu_name' => _x( 'Beers', 'beer' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions' ),
		'taxonomies' => array( 'beer_categories' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);
	register_post_type( 'beer', $args );
} 
