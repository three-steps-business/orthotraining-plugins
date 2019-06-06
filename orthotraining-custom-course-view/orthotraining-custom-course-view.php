<?php
  /**
  * Plugin Name: Orthotraining Custom Course View
  * Description: Custom plugin to show courses on specific registered dates
  * Version: 1.0
  */

add_action( 'wp_loaded', 'get_module_dates' );
function get_module_dates() {
  $userID = get_current_user_id();
  $user = get_user_by( 'ID', $userID );
  $module_1_date = get_user_meta( $user->id, 'module_1_date', true );
	$module_2_date = get_user_meta( $user->id, 'module_2_date', true );
	$module_3_date = get_user_meta( $user->id, 'module_3_date', true );
	$module_4_date = get_user_meta( $user->id, 'module_4_date', true );
	$module_5_date = get_user_meta( $user->id, 'module_5_date', true );
	$module_6_date = get_user_meta( $user->id, 'module_6_date', true );
	$module_7_date = get_user_meta( $user->id, 'module_7_date', true );
	$module_8_date = get_user_meta( $user->id, 'module_8_date', true );

  wp_register_script(
      'custom-course-view',
	  	plugins_url( 'js/custom-course-view.js', __FILE__ ),
       array( 'jquery' ),
       1.0,
       true
  );

  wp_enqueue_script( 'custom-course-view' );

  wp_localize_script( 'custom-course-view', 'moduleDates', array(
	  'module_1_date' => $module_1_date,
	  'module_2_date' => $module_2_date,
	  'module_3_date' => $module_3_date,
	  'module_4_date' => $module_4_date,
	  'module_5_date' => $module_5_date,
	  'module_6_date' => $module_6_date,
	  'module_7_date' => $module_7_date,
	  'module_8_date' => $module_8_date
  ) );
}
?>
