<?php
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
