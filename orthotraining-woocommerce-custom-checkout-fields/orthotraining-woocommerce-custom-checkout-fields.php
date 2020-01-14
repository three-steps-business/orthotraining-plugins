<?php
  /**
  * Plugin Name: Orthotraining Custom Woocommerce Checkout Fields
  * Description: Custom Checkout Fields for woocommerce
  * Version: 1.0
  */

  // add fields
  add_action( 'woocommerce_after_checkout_billing_form', 'add_custom_checkout_fields' );

  // update billing phone
  add_filter( 'woocommerce_checkout_fields' , 'update_billing_phone_label_description', 9999 );

  //validate_phone_format
  add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');

  // save fields to order meta
  add_action( 'woocommerce_checkout_update_order_meta', 'save_custom_checkout_fields' );


  // add custom fields
  function add_custom_checkout_fields( $checkout ){

    // Practice Name
  	woocommerce_form_field( 'practice_name', array(
  		'type'          => 'text',
  		'required'	=> true,
  		'class'         => array('ortho-custom-field'),
  		'label'         => 'Practice Name',
  		'label_class'   => 'ortho-custom-field-label'
		), $checkout->get_value( 'practice_name' ) );

//     // Practice Address
//   	woocommerce_form_field( 'practice_address', array(
//   		'type'          => 'text',
//   		'required'	=> true,
//   		'class'         => array('ortho-custom-field'),
//   		'label'         => 'Practice Address',
//   		'label_class'   => 'ortho-custom-field-label'
// 		), $checkout->get_value( 'practice_address' ) );

    // Practice Phone Number
  	woocommerce_form_field( 'practice_phone_number', array(
  		'type'          => 'text',
  		'required'	=> true,
  		'class'         => array('ortho-custom-field'),
  		'label'         => 'Practice Phone Number',
      'description'   => 'Follow correct phone format e.g. +61455562400',
  		'label_class'   => 'ortho-custom-field-label'
		), $checkout->get_value( 'practice_phone_number' ) );

//     // Mobile Number
//   	woocommerce_form_field( 'mobile_number', array(
//   		'type'          => 'text',
//   		'required'	=> true,
//   		'class'         => array('ortho-custom-field'),
//   		'label'         => 'Mobile Number',
//       'description'   => 'Follow correct phone format e.g. +61455562400',
//   		'label_class'   => 'ortho-custom-field-label'
// 		), $checkout->get_value( 'mobile_number' ) );

    // Dietary Requirements
  	woocommerce_form_field( 'dietary_requirements', array(
  		'type'          => 'text',
  		'required'	=> true,
  		'class'         => array('ortho-custom-field'),
  		'label'         => 'Dietary Requirements',
      'description'   => 'We will try to cater for your food requirements, input "none" if you have no specific food requirements',
      'label_class'   => 'ortho-custom-field-label'
		), $checkout->get_value( 'dietary_requirements' ) );

    // How did you hear about us
    woocommerce_form_field( 'how_did_you_hear_about_us', array(
      'type'          => 'select',
      'required'	=> false,
      'class'         => array('ortho-custom-field'),
      'label'         => 'How did you hear about us?',
      'label_class'   => 'ortho-custom-field-label',
      'options'	=> array(
        ''		=> 'Please select',
        'Email'	=> 'Email',
        'Internet Search'	=> 'Internet Search',
        'Facebook'	=> 'Facebook',
        'LinkedIn'	=> 'LinkedIn',
        'Magazine'	=> 'Magazine',
        'Referral from a friend'	=> 'Referral from a friend',
        'Direct communication with Dr Hall'	=> 'Direct communication with Dr Hall'
        )
      ), $checkout->get_value( 'how_did_you_hear_about_us' ) );

      // Have you completed other Orthodontic Training
    	woocommerce_form_field( 'completed_orthodontic_training', array(
    		'type'          => 'text',
    		'required'	=> false,
    		'class'         => array('ortho-custom-field'),
    		'label'         => 'Have you completed other Orthodontic Training?',
    		'label_class'   => 'ortho-custom-field-label'
  		), $checkout->get_value( 'completed_orthodontic_training' ) );

      woocommerce_form_field( 'agreed_t_and_c', array(
        'type'	=> 'checkbox',
        'required'	=> true,
        'class'	=> array('ortho-custom-field-label'),
        'label'	=> ' I agree to the T&#39;s & C&#39;s'
      ), $checkout->get_value( 'agreed_t_and_c' ) );

      echo '<div><a href="http://www.orthoed.com.au/terms-and-conditions-for-registration-to-orthoed-programme" target="_blank">Terms and Conditions Link</a></div>';

  }

  // update Billing Phone label and description
  function update_billing_phone_label_description( $f ) {

  	// update Billing Phone label and description
  	$f['billing']['billing_phone']['label'] = 'Mobile Phone';
    $f['billing']['billing_phone']['description'] = 'Follow correct phone format e.g. +61455562400';

  	return $f;

  }

  //validate checkout
  function my_custom_checkout_field_process() {
      // Check if set, if its not set add an error.
      if ( ! $_POST['practice_name'] )
        wc_add_notice( __( 'Practice Name is a required field.' ), 'error' );

//       if ( ! $_POST['practice_address'] )
//         wc_add_notice( __( 'Practice Address is a required field.' ), 'error' );

      if ( ! $_POST['practice_phone_number'] )
        wc_add_notice( __( 'Practice Phone Number is a required field.' ), 'error' );

//       if ( ! $_POST['mobile_number'] )
//         wc_add_notice( __( 'Mobile Number is a required field.' ), 'error' );

      if ( ! $_POST['dietary_requirements'] )
        wc_add_notice( __( 'Dietary Requirement is a required field.' ), 'error' );

      if ( ! $_POST['agreed_t_and_c'] )
        wc_add_notice( __( 'I agree to the T&#39;s & C&#39;s is a required field.' ), 'error' );

	  if ( $_POST['billing']['billing_phone'] ) {
        if ( !preg_match( '/^\+(?:[0-9]?){6,14}[0-9]$/', $_POST[ 'mobile_number' ] ) ) {
          wc_add_notice( __( 'Your Mobile Number has incorrect format' ), 'error' );
        }
      }

      if ( $_POST['practice_phone_number'] ) {
        if ( !preg_match( '/^\+(?:[0-9]?){6,14}[0-9]$/', $_POST[ 'practice_phone_number' ] ) ) {
          wc_add_notice( __( 'Your Practice Phone Number has incorrect format' ), 'error' );
        }
      }

//       if ( $_POST['mobile_number'] ) {
//         if ( !preg_match( '/^\+(?:[0-9]?){6,14}[0-9]$/', $_POST[ 'mobile_number' ] ) ) {
//           wc_add_notice( __( 'Your Mobile Number has incorrect format' ), 'error' );
//         }
//       }
  }

  // save field values
  function save_custom_checkout_fields( $order_id ){

  	if( !empty( $_POST['practice_name'] ) )
  		update_post_meta( $order_id, 'practice_name', sanitize_text_field( $_POST['practice_name'] ) );

//     if( !empty( $_POST['practice_address'] ) )
//     	update_post_meta( $order_id, 'practice_address', sanitize_text_field( $_POST['practice_address'] ) );

    if( !empty( $_POST['practice_phone_number'] ) )
  		update_post_meta( $order_id, 'practice_phone_number', sanitize_text_field( $_POST['practice_phone_number'] ) );

//     if( !empty( $_POST['mobile_number'] ) )
//     	update_post_meta( $order_id, 'mobile_number', sanitize_text_field( $_POST['mobile_number'] ) );

    if( !empty( $_POST['dietary_requirements'] ) )
  		update_post_meta( $order_id, 'dietary_requirements', sanitize_text_field( $_POST['dietary_requirements'] ) );

    if( !empty( $_POST['how_did_you_hear_about_us'] ) )
    	update_post_meta( $order_id, 'how_did_you_hear_about_us', sanitize_text_field( $_POST['how_did_you_hear_about_us'] ) );

    if( !empty( $_POST['completed_orthodontic_training'] ) )
    	update_post_meta( $order_id, 'completed_orthodontic_training', sanitize_text_field( $_POST['completed_orthodontic_training'] ) );

  	if( !empty( $_POST['agreed_t_and_c'] ) && $_POST['agreed_t_and_c'] == 1 )
  		update_post_meta( $order_id, 'agreed_t_and_c', 1 );

  }
