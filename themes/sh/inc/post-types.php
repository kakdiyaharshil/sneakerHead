<?php 
/**
 * Functions Which enhance the theme by creating custom_post_type
 *
 *
 *
 * @package Sneaker_Head
 */
function wpdocs_kantbtrue_init() {
    $labels = array(
        'name'                  => _x( 'Sneakers', 'Post type general name', 'sh' ),
        'singular_name'         => _x( 'Sneakers', 'Post type singular name', 'sh' ),
        'menu_name'             => _x( 'Sneakers', 'Admin Menu text', 'sh' ),
        'name_admin_bar'        => _x( 'Sneakers', 'Add New on Toolbar', 'sh' ),
        'add_new'               => __( 'Add New', 'sh' ),
        'add_new_item'          => __( 'Add New sneakers', 'sh' ),
        'new_item'              => __( 'New sneakers', 'sh' ),
        'edit_item'             => __( 'Edit sneakers', 'sh' ),
        'view_item'             => __( 'View sneakers', 'sh' ),
        'all_items'             => __( 'All sneakerss', 'sh' ),
        'search_items'          => __( 'Search sneakerss', 'sh' ),
        'parent_item_colon'     => __( 'Parent sneakerss:', 'sh' ),
        'not_found'             => __( 'No sneakerss found.', 'sh' ),
        'not_found_in_trash'    => __( 'No sneakerss found in Trash.', 'sh' ),
        'featured_image'        => _x( 'Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'sh' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'sh' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'sh' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'sh' ),
        'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'sh' ),
        'insert_into_item'      => _x( 'Insert into sneakers', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'sh' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this sneakers', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'sh' ),
        'filter_items_list'     => _x( 'Filter sneakerss list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'sh' ),
        'items_list_navigation' => _x( 'Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'sh' ),
        'items_list'            => _x( 'Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'sh' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Recipe custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'sneaker' ),
        'capability_type'    => 'post',
        'has_archive'        => 'sneakers',
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'sh_sneakers', $args );
}
add_action( 'init', 'wpdocs_kantbtrue_init' );