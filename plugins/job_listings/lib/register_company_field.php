<?php
  // registers the extra fields for a Job Listing
  function register_job_fields() {
    if (function_exists('register_field_group')) {
      register_field_set();
    }
  }

  function register_field_set() {
    register_field_group(array(
      'key'   => 'sm_job_listing_fields',
      'title' => 'Job Information',
      'fields' => array(
        array(
          'key' => 'sm_job_listing_company',
          'label' => 'Company Name',
          'name' => 'company_name',
          'type' => 'text'
        )
      ),
      'location' => array(
        array(
          array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'sm_job_listing'
          )
        )
      )
    ));
  }
?>
