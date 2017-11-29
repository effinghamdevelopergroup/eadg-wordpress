<?php
  /*
  Plugin Name: Job Listing Content Type
  Description: Adds a Job Listing Content Type
  Version: 1.0.0
  */

  require_once plugin_dir_path(__FILE__) . 'lib/content_type.php';
  require_once plugin_dir_path(__FILE__) . 'lib/position_type_taxonomy.php';
  require_once plugin_dir_path(__FILE__) . 'lib/technology_taxonomy.php';
  require_once plugin_dir_path(__FILE__) . 'lib/register_company_field.php';
  require_once plugin_dir_path(__FILE__) . 'lib/register_recruiter_role.php';

  register_activation_hook(__FILE__, 'register_job_listing');
  register_deactivation_hook(__FILE__, 'deregister_job_listing');

  function register_job_listing() {
    $plugin = 'advanced-custom-fields/acf.php';

    if (!is_plugin_active($plugin)) {
      wp_die('Please enable advanced custom fields for Job Listings to work');
    }

    add_recruiter_role();
  }

  function deregister_job_listing() {
    remove_recruiter_role();
  }

  // create the custom content type
  add_action('init', 'create_job_listing');

  // create the technology taxonomy (i.e. .NET, C#, Ruby, Python, etc.)
  add_action('init', 'create_technology_taxonomy');

  // create taxonomy for position type (i.e. contract, full time, remote)
  add_action('init', 'create_position_type_taxonomy');

  // register extra fields for a job listing
  add_action('init', 'register_job_fields');

  // Register Permissions
  add_action('admin_init', 'add_permissions');
  add_action('admin_init', 'add_admin_permissions');

