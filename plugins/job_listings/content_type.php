<?php

  function create_job_listing() {
    $labels = array(
      'name'           => 'Job Listings',
      'singular_name'  => 'Job Listing',
      'menu_name'      => 'Job Listings',
      'menu_admin_bar' => 'Job Listing',
      'add_new'        => 'Add New',
      'add_new_item'   => 'Add New Listing',
      'new_item'       => 'New Job Listing',
      'edit_item'      => 'Edit Job Listing',
      'view_item'      => 'View Job Listing',
      'all_items'      => 'All Job Listings',
      'search_items'   => 'Search Job Listings',
      'not_found'      => 'No Job Listings Found',
      'not_found_in_trash' => 'No Job Listings Found'
    );

    $supports = array('title', 'editor', 'author', 'thumbnail', 'except',
                      'comments');

    $args = array(
      'labels'              => $labels,
      'public'              => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'show_ui'             => true,
      'show_ui_nav_menus'   => true,
      'show_in_menu'        => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-admin-apperance',
      'capability_type'     => 'post',
      'hierarchical'        => false,
      'supports'            => $supports,
      'has_archive'         => true,
      'rewrite'             => array('slug' => 'job_listings'),
      'query_var'           => true
    );

    register_post_type('sm_job_listing', $args);
  }

  function create_technology_taxonomy() {
    $labels = array(
      'name'              => 'Technologies',
      'singular_name'     => 'Technology',
      'search_items'      => 'Search Technologies',
      'all_items'         => 'All Technologies',
      'parent_item'       => 'Parent Technology',
      'parent_item_colon' => 'Parent Technology:',
      'edit_item'         => 'Edit Technology',
      'update_item'       => 'Update Technology',
      'add_new_item'      => 'Add New Technology',
      'new_type_name'     => 'New Technology Name',
      'menu_name'         => 'Technology'
    );

    $args = array(
      'hierarchical'      => true,
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite'           => array( 'slug' => 'job/technology')
    );

    register_taxonomy('sm_job_technology', array('sm_job_listing'), $args);
  }
?>
