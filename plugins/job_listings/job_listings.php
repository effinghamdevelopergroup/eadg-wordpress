<?php
  /*
  Plugin Name: Job Listing Content Type
  Description: Adds a Job Listing Content Type
  Version: 2071124
  */

  require_once plugin_dir_path(__FILE__) . 'content_type.php';

  register_activation_hook(__FILE__, 'register_job_listing');

  function register_job_listing() {
  }

    add_action('init', 'create_job_listing');
    add_action('init', 'create_technology_taxonomy');
