<?php
  function add_recruiter_role() {
    $permissions = array(
      'read'         => true,
      'edit_posts'   => false,
      'delete_posts' => false,
      'upload_files' => true
    );

    add_role('job_recruiter', 'Job Recruiter', $permissions);
  }

  function remove_recruiter_role() {
    $role = 'job_recruiter';
    if (get_role($role)) {
      remove_role($role);
    }
  }

  function add_permissions() {
    $roles = array('job_recruiter', 'editor', 'administrator');

    foreach($roles as $role) {
      $current_role = get_role($role);
      $current_role->add_cap('read');
      $current_role->add_cap('read_sm_job_listing');
      $current_role -> add_cap('read_private_sm_job_listings');
      $current_role -> add_cap('edit_sm_job_listing');
      $current_role -> add_cap('edit_sm_job_listings');
      $current_role -> add_cap('edit_published_sm_job_listings');
      $current_role -> add_cap('publish_sm_job_listings');
      $current_role -> add_cap('delete_private_sm_job_listings');
      $current_role -> add_cap('delete_published_sm_job_listings');
    }
  }

  function add_admin_permissions() {
    $roles = array('editor', 'administrator');

    foreach ($roles as $role) {
      $current_role = get_role($role);
      $current_role -> add_cap('delete_others_sm_job_listings');
      $current_role -> add_cap('edit_others_sm_job_listings');
    }
  }
?>
