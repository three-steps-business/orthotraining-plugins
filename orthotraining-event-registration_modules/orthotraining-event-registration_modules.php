<?php

  /**
  * Plugin Name: Orthotraining Event Registration Plugin
  * Description: Custom Plugin to add user metadata on form submission
  * Version: 1.1.1
  */

  /**
  * Module 1 Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_1', 'set_module_1_date', 10, 2 );
  function set_module_1_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '2' ) );
    update_user_meta($user->id, 'module_1_date', rgar( $entry, '1' ));
  }

  /**
  * Module 2 Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_2', 'set_module_2_date', 10, 2 );
  function set_module_2_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '1' ) );
    add_user_meta($user->id, 'module_2_date', rgar( $entry, '2' ));
  }

  /**
  * Module 3 Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_3', 'set_module_3_date', 10, 2 );
  function set_module_3_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '1' ) );
    add_user_meta($user->id, 'module_3_date', rgar( $entry, '2' ));
  }

  /**
  * Module 4 Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_4', 'set_module_4_date', 10, 2 );
  function set_module_4_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '1' ) );
    add_user_meta($user->id, 'module_4_date', rgar( $entry, '2' ));
  }

  /**
  * Module 5 Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_5', 'set_module_5_date', 10, 2 );
  function set_module_5_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '1' ) );
    add_user_meta($user->id, 'module_5_date', rgar( $entry, '2' ));
  }

  /**
  * Module 6 Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_6', 'set_module_6_date', 10, 2 );
  function set_module_6_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '1' ) );
    add_user_meta($user->id, 'module_6_date', rgar( $entry, '2' ));
    update_post_content_0('6', rgar( $entry, '2' ));
  }

  /**
  * Module 7 Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_7', 'set_module_7_date', 10, 2 );
  function set_module_7_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '1' ) );
    add_user_meta($user->id, 'module_7_date', rgar( $entry, '2' ));
  }

  /**
  * Module 8 Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_8', 'set_module_8_date', 10, 2 );
  function set_module_8_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '1' ) );
    add_user_meta($user->id, 'module_8_date', rgar( $entry, '2' ));
  }

  /**
  * All Module Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_9', 'set_all_module_dates', 10, 2 );
  function set_all_module_dates( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '1' ) );
    update_user_meta($user->id, 'module_1_date', rgar( $entry, '2' ));
    update_user_meta($user->id, 'module_2_date', rgar( $entry, '3' ));
    update_user_meta($user->id, 'module_3_date', rgar( $entry, '4' ));
    update_user_meta($user->id, 'module_4_date', rgar( $entry, '5' ));
    update_user_meta($user->id, 'module_5_date', rgar( $entry, '6' ));
    update_user_meta($user->id, 'module_6_date', rgar( $entry, '7' ));
    update_user_meta($user->id, 'module_7_date', rgar( $entry, '8' ));
    update_user_meta($user->id, 'module_8_date', rgar( $entry, '9' ));
  }

  /**
  * Pre Populate Email Field based form logged in user
  */
  add_filter( 'gform_field_value_email', 'prepopulate_email_field' );
  function prepopulate_email_field( $value ) {
    $userID = get_current_user_id();
    $user = get_user_by( 'ID', $userID );
    return $user->user_email;;
  }
?>
