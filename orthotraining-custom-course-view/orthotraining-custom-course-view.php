<?php
  /**
  * Plugin Name: Orthotraining Custom Course View
  * Description: Custom plugin to show courses on specific registered dates
  * Version: 1.1
  */


add_action( 'parse_query', 'get_module_dates' );

function get_module_dates() {
	$page_id = get_queried_object_id();
	if( $page_id == 2365) {
	  $userID = get_current_user_id();
	  $user = get_user_by( 'ID', $userID );
	  $module_1_date = get_user_meta( $user->id, 'module_1_date', true );
		$module_2_1_date = get_user_meta( $user->id, 'module_2_1_date', true );
		$module_2_2_date = get_user_meta( $user->id, 'module_2_2_date', true );
		$module_3_date = get_user_meta( $user->id, 'module_3_date', true );
		$module_4_date = get_user_meta( $user->id, 'module_4_date', true );
		$module_5_date = get_user_meta( $user->id, 'module_5_date', true );
		$module_6_date = get_user_meta( $user->id, 'module_6_date', true );
		$module_7_date = get_user_meta( $user->id, 'module_7_date', true );
		$module_8_date = get_user_meta( $user->id, 'module_8_date', true );
		$module_9_date = get_user_meta( $user->id, 'module_9_date', true );
		$smilefast_pro_date = get_user_meta( $user->id, 'smilefast_pro_date', true );
		$post_grad_test = get_user_meta( $user->id, 'post_grad_test', true );

// 	  if( strtotime('-42 day', strtotime($module_1_date)) > strtotime('now') ) {
// 		$module_1_date = false;
// 	  }
	  if( strtotime('-42 day', strtotime($module_2_1_date)) > strtotime('now') ) {
		$module_2_1_date = false;
	  }
	  if( strtotime('-42 day', strtotime($module_2_2_date)) > strtotime('now') ) {
		$module_2_2_date = false;
	  }
	  if( strtotime('-42 day', strtotime($module_3_date)) > strtotime('now') ) {
		$module_3_date = false;
	  }
	  if( strtotime('-42 day', strtotime($module_4_date)) > strtotime('now') ) {
		$module_4_date = false;
	  }
	  if( strtotime('-42 day', strtotime($module_5_date)) > strtotime('now') ) {
		$module_5_date = false;
	  }
	  if( strtotime('-42 day', strtotime($module_6_date)) > strtotime('now') ) {
		$module_6_date = false;
	  }
	  if( strtotime('-42 day', strtotime($module_7_date)) > strtotime('now') ) {
		$module_7_date = false;
	  }
	  if( strtotime('-42 day', strtotime($module_8_date)) > strtotime('now') ) {
		$module_8_date = false;
	  }
	  if( strtotime('-42 day', strtotime($module_9_date)) > strtotime('now') ) {
		$module_9_date = false;
	  }
	  if( strtotime('-42 day', strtotime($smilefast_pro_date)) > strtotime('now') ) {
		$smilefast_pro_date = false;
	  }
	  if( $post_grad_test != 'Yes' ) {
		$post_grad_test = false;
	  }

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
		  'module_2_1_date' => $module_2_1_date,
		  'module_2_2_date' => $module_2_2_date,
		  'module_3_date' => $module_3_date,
		  'module_4_date' => $module_4_date,
		  'module_5_date' => $module_5_date,
		  'module_6_date' => $module_6_date,
		  'module_7_date' => $module_7_date,
		  'module_8_date' => $module_8_date,
		  'module_9_date' => $module_9_date,
		  'smilefast_pro_date' => $smilefast_pro_date,
		  'post_grad_test' => $post_grad_test
	  ) );
	}
}
?>
