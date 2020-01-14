<?php

  /**
  * Plugin Name: Orthotraining Event Registration Plugin
  * Description: Custom Plugin to add user metadata on form submission
  * Version: 1.2
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
  * Module 2 Part 1 Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_2', 'set_module_2_1_date', 10, 2 );
  function set_module_2_1_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '1' ) );
    add_user_meta($user->id, 'module_2_1_date', rgar( $entry, '2' ));
  }

  /**
  * Module 2 Part 2 Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_11', 'set_module_2_2_date', 10, 2 );
  function set_module_2_2_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '1' ) );
    add_user_meta($user->id, 'module_2_2_date', rgar( $entry, '2' ));
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
  * Module 9 Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_16', 'set_module_9_date', 10, 2 );
  function set_module_9_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '1' ) );
    add_user_meta($user->id, 'module_9_date', rgar( $entry, '2' ));
  }

  /**
  * Smilefast Pro Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_13', 'set_smilefast_pro_date', 10, 2 );
  function set_smilefast_pro_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '1' ) );
    add_user_meta($user->id, 'smilefast_pro_date', rgar( $entry, '2' ));
  }

  /**
  * Module 1-4 Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_9', 'set_module_1_to_4_dates', 10, 2 );
  function set_module_1_to_4_dates( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '1' ) );
    if (!empty(rgar( $entry, '2' ))){
      update_user_meta($user->id, 'module_1_date', rgar( $entry, '2' ));
    }
    if (!empty(rgar( $entry, '3' ))){
      update_user_meta($user->id, 'module_2_1_date', rgar( $entry, '3' ));
    }
    if (!empty(rgar( $entry, '10' ))){
      update_user_meta($user->id, 'module_2_2_date', rgar( $entry, '10' ));
    }
    if (!empty(rgar( $entry, '4' ))){
      update_user_meta($user->id, 'module_3_date', rgar( $entry, '4' ));
    }
    if (!empty(rgar( $entry, '5' ))){
      update_user_meta($user->id, 'module_4_date', rgar( $entry, '5' ));
    }
  }

  /**
  * Module 5-6 Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_10', 'set_module_5_to_8_dates', 10, 2 );
  function set_module_5_to_8_dates( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '1' ) );
    if (!empty(rgar( $entry, '6' ))){
      update_user_meta($user->id, 'module_5_date', rgar( $entry, '6' ));
    }
    if (!empty(rgar( $entry, '7' ))){
      update_user_meta($user->id, 'module_6_date', rgar( $entry, '7' ));
    }
    if (!empty(rgar( $entry, '8' ))){
      update_user_meta($user->id, 'module_7_date', rgar( $entry, '8' ));
    }
    if (!empty(rgar( $entry, '9' ))){
      update_user_meta($user->id, 'module_8_date', rgar( $entry, '9' ));
    }
  }

  /**
  * Internal Form for Manual Module Dates - Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_14', 'set_module_manual_1_dates', 10, 2 );
  function set_module_manual_1_dates( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '9' ) );
    if (!empty(rgar( $entry, '1' ))){
      update_user_meta($user->id, 'module_1_date', rgar( $entry, '1' ));
    }
    if (!empty(rgar( $entry, '2' ))){
      update_user_meta($user->id, 'module_2_1_date', rgar( $entry, '2' ));
    }
    if (!empty(rgar( $entry, '3' ))){
      update_user_meta($user->id, 'module_2_2_date', rgar( $entry, '3' ));
    }
    if (!empty(rgar( $entry, '4' ))){
      update_user_meta($user->id, 'module_3_date', rgar( $entry, '4' ));
    }
    if (!empty(rgar( $entry, '5' ))){
      update_user_meta($user->id, 'module_4_date', rgar( $entry, '5' ));
    }
    if (!empty(rgar( $entry, '6' ))){
      update_user_meta($user->id, 'module_5_date', rgar( $entry, '6' ));
    }
    if (!empty(rgar( $entry, '7' ))){
      update_user_meta($user->id, 'module_6_date', rgar( $entry, '7' ));
    }
    if (!empty(rgar( $entry, '8' ))){
      update_user_meta($user->id, 'module_7_date', rgar( $entry, '8' ));
    }
    if (!empty(rgar( $entry, '10' ))){
      update_user_meta($user->id, 'module_8_date', rgar( $entry, '10' ));
    }
    if (!empty(rgar( $entry, '11' ))){
      update_user_meta($user->id, 'module_9_date', rgar( $entry, '11' ));
    }
    if (!empty(rgar( $entry, '12' ))){
      update_user_meta($user->id, 'smilefast_pro_date', rgar( $entry, '12' ));
    }
  }

  /**
  * Internal Form for OrthoEd Past Attendee - Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_18', 'set_module_manual_2_dates', 10, 2 );
  function set_module_manual_2_dates( $entry, $form ) {
    $user = get_user_by( 'email', rgar( $entry, '9' ) );
    if (!empty(rgar( $entry, '1' ))){
      update_user_meta($user->id, 'module_1_date', rgar( $entry, '1' ));
    }
    if (!empty(rgar( $entry, '2' ))){
      update_user_meta($user->id, 'module_2_1_date', rgar( $entry, '2' ));
    }
    if (!empty(rgar( $entry, '3' ))){
      update_user_meta($user->id, 'module_2_2_date', rgar( $entry, '3' ));
    }
    if (!empty(rgar( $entry, '4' ))){
      update_user_meta($user->id, 'module_3_date', rgar( $entry, '4' ));
    }
    if (!empty(rgar( $entry, '5' ))){
      update_user_meta($user->id, 'module_4_date', rgar( $entry, '5' ));
    }
    if (!empty(rgar( $entry, '6' ))){
      update_user_meta($user->id, 'module_5_date', rgar( $entry, '6' ));
    }
    if (!empty(rgar( $entry, '7' ))){
      update_user_meta($user->id, 'module_6_date', rgar( $entry, '7' ));
    }
    if (!empty(rgar( $entry, '8' ))){
      update_user_meta($user->id, 'module_7_date', rgar( $entry, '8' ));
    }
    if (!empty(rgar( $entry, '10' ))){
      update_user_meta($user->id, 'module_8_date', rgar( $entry, '10' ));
    }
    if (!empty(rgar( $entry, '11' ))){
      update_user_meta($user->id, 'module_9_date', rgar( $entry, '11' ));
    }
    if (!empty(rgar( $entry, '12' ))){
      update_user_meta($user->id, 'smilefast_pro_date', rgar( $entry, '12' ));
    }
  }

  /*********** MANUAL ENROLMENT ******************/
  /**
  * Manual Module 1 Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_23', 'set_module_manual_1_date', 10, 2 );
  function set_module_manual_1_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '2' ) );
    update_user_meta($user->id, 'module_1_date', rgar( $entry, '3' ));
  }

  add_action( 'gform_after_submission_24', 'set_module_manual_2_1_date', 10, 2 );
  function set_module_manual_2_1_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '2' ) );
    update_user_meta($user->id, 'module_2_1_date', rgar( $entry, '3' ));
  }

  add_action( 'gform_after_submission_25', 'set_module_manual_2_2_date', 10, 2 );
  function set_module_manual_2_2_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '2' ) );
    update_user_meta($user->id, 'module_2_2_date', rgar( $entry, '3' ));
  }

  add_action( 'gform_after_submission_26', 'set_module_manual_3_date', 10, 2 );
  function set_module_manual_3_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '2' ) );
    update_user_meta($user->id, 'module_3_date', rgar( $entry, '3' ));
  }

  add_action( 'gform_after_submission_27', 'set_module_manual_4_date', 10, 2 );
  function set_module_manual_4_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '2' ) );
    update_user_meta($user->id, 'module_4_date', rgar( $entry, '3' ));
  }

  add_action( 'gform_after_submission_28', 'set_module_manual_5_date', 10, 2 );
  function set_module_manual_5_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '2' ) );
    update_user_meta($user->id, 'module_5_date', rgar( $entry, '3' ));
  }

  add_action( 'gform_after_submission_29', 'set_module_manual_6_date', 10, 2 );
  function set_module_manual_6_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '2' ) );
    update_user_meta($user->id, 'module_6_date', rgar( $entry, '3' ));
  }

  add_action( 'gform_after_submission_30', 'set_module_manual_7_date', 10, 2 );
  function set_module_manual_7_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '2' ) );
    update_user_meta($user->id, 'module_7_date', rgar( $entry, '3' ));
  }

  add_action( 'gform_after_submission_31', 'set_module_manual_8_date', 10, 2 );
  function set_module_manual_8_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '2' ) );
    update_user_meta($user->id, 'module_8_date', rgar( $entry, '3' ));
  }

  add_action( 'gform_after_submission_32', 'set_module_manual_9_date', 10, 2 );
  function set_module_manual_9_date( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '2' ) );
    update_user_meta($user->id, 'module_9_date', rgar( $entry, '3' ));
  }

  add_action( 'gform_after_submission_34', 'set_module_manual_post_grad_test', 10, 2 );
  function set_module_manual_post_grad_test( $entry, $form ) {
	  $user = get_user_by( 'email', rgar( $entry, '2' ) );
    update_user_meta($user->id, 'post_grad_test', rgar( $entry, '3' ));
  }
  /*********** END OF MANUAL ENROLMENT ******************/

  /**
  * Mini Masters Event Registration (Modules 1 - 4) Intensive Add User Metadata from Gravity Forms fields
  */
  add_action( 'gform_after_submission_33', 'set_module_1_4_intensive_date', 10, 2 );
  function set_module_1_4_intensive_date( $entry, $form ) {
	$user = get_user_by( 'email', rgar( $entry, '1' ) );
	if (!empty(rgar( $entry, '2' ))){
		update_user_meta($user->id, 'module_1_date', rgar( $entry, '2' ));
		update_user_meta($user->id, 'module_2_1_date', rgar( $entry, '2' ));
    }
	if (!empty(rgar( $entry, '3' ))){
		update_user_meta($user->id, 'module_2_2_date', rgar( $entry, '3' ));
		update_user_meta($user->id, 'module_3_date', rgar( $entry, '3' ));
    }
	if (!empty(rgar( $entry, '5' ))){
		update_user_meta($user->id, 'module_4_date', rgar( $entry, '5' ));
    }
  }
  /*********** End of Mini Masters Event Registration (Modules 1 - 4) Intensive ******************/


  /**
  * Pre Populate Email Field based form logged in user
  */
  add_filter( 'gform_field_value_email', 'prepopulate_email_field' );
  function prepopulate_email_field( $value ) {
    $userID = get_current_user_id();
    $user = get_user_by( 'ID', $userID );
    return $user->user_email;
  }
?>
