<?php
  function create_position_type_taxonomy() {
    $labels = array(
      'name'                       => 'Job Types',
      'singular_name'              => 'Job Type',
      'search_items'               => 'Job Types',
      'popular_items'              => 'Popular Job Types',
      'all_items'                  => 'All Job Types',
      'parent_item'                => null,
      'parent_item_colon'          => null,
      'edit_item'                  => 'Edit Job Type',
      'update_item'                => 'Update Job Type',
      'add_new_item'               => 'Add New Job Type',
      'new_item_name'              => 'New Job Type',
      'seperate_items_with_commas' => 'Seperate Job Types With Commas',
      'add_or_remove_items'        => 'Add or Remove Job Types',
      'choose_from_most_used'      => 'Choose From Most Used Job Types',
      'not_found'                  => 'No Job Types Found',
      'menu_name'                  => 'Job Types'
    );

    $args = array(
      'labels'                => $labels,
      'hierarchical'          => false,
      'show_ui'               => true,
      'show_admin_column'     => true,
      'update_count_callback' => '_update_post_term_count',
      'query_var'             => true,
      'rewrite'               => array('slug' => 'job_type')
    );

    register_taxonomy('sm_job_type', array('sm_job_listing'), $args);
  }
?>
