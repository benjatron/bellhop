<?php
if( !function_exists('testimonials_post_type') ):
  function testimonials_post_type() {
    $labels = array(
      'name'                  => _x( 'Testimonials', 'Post Type General Name', 'bellhop' ),
      'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'bellhop' ),
      'menu_name'             => __( 'Testimonials', 'bellhop' ),
      'name_admin_bar'        => __( 'Testimonials', 'bellhop' ),
      'archives'              => __( 'Testimonial Archives', 'bellhop' ),
      'attributes'            => __( 'Testimonial Attributes', 'bellhop' ),
      'parent_item_colon'     => __( 'Parent Testimonial:', 'bellhop' ),
      'all_items'             => __( 'All Testimonials', 'bellhop' ),
      'add_new_item'          => __( 'Add New Testimonial', 'bellhop' ),
      'add_new'               => __( 'Add New', 'bellhop' ),
      'new_item'              => __( 'New Testimonial', 'bellhop' ),
      'edit_item'             => __( 'Edit Testimonial', 'bellhop' ),
      'update_item'           => __( 'Update Testimonial', 'bellhop' ),
      'view_item'             => __( 'View Testimonial', 'bellhop' ),
      'view_items'            => __( 'View Testimonials', 'bellhop' ),
      'search_items'          => __( 'Search Testimonial', 'bellhop' ),
      'not_found'             => __( 'Not found', 'bellhop' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'bellhop' ),
      'featured_image'        => __( 'Featured Image', 'bellhop' ),
      'set_featured_image'    => __( 'Set featured image', 'bellhop' ),
      'remove_featured_image' => __( 'Remove featured image', 'bellhop' ),
      'use_featured_image'    => __( 'Use as featured image', 'bellhop' ),
      'insert_into_item'      => __( 'Insert into testimonial', 'bellhop' ),
      'uploaded_to_this_item' => __( 'Uploaded to this testimonial', 'bellhop' ),
      'items_list'            => __( 'Testimonials list', 'bellhop' ),
      'items_list_navigation' => __( 'Testimonials list navigation', 'bellhop' ),
      'filter_items_list'     => __( 'Filter testimonials list', 'bellhop' ),
    );
    $args = array(
      'label'                 => __( 'Testimonial', 'bellhop' ),
      'description'           => __( 'Customer Testimonials', 'bellhop' ),
      'labels'                => $labels,
      'supports'              => array( 'title' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 15,
      'menu_icon'             => 'dashicons-thumbs-up',
      'show_in_admin_bar'     => false,
      'show_in_nav_menus'     => false,
      'can_export'            => true,
      'has_archive'           => false,
      'exclude_from_search'   => true,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
    );
    register_post_type( 'testimonials', $args );
  }
  add_action( 'init', 'testimonials_post_type', 0 );
endif;
