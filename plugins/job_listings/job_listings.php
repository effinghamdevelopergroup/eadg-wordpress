<?php
  /*
  Plugin Name: Job Listing Content Type
  Description: Adds a Job Listing Content Type
  Version: 1.0.0
  */

  require_once plugin_dir_path(__FILE__) . 'lib/content_type.php';
  require_once plugin_dir_path(__FILE__) . 'lib/position_type_taxonomy.php';
  require_once plugin_dir_path(__FILE__) . 'lib/technology_taxonomy.php';

  register_activation_hook(__FILE__, 'register_job_listing');

  function register_job_listing() {
    $plugin = 'advanced-custom-fields/acf.php';

    if (!is_plugin_active($plugin)) {
      wp_die('Please enable advanced custom fields for Job Listings to work');
    }
  }

  add_action('init', 'create_job_listing');
  add_action('init', 'create_technology_taxonomy');
  add_action('init', 'create_position_type_taxonomy');
