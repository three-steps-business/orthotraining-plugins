<?php
  /**
  * Plugin Name: Orthotraining Event Registration Page
  * Description: Custom shortcode for event registration page
  * Version: 1.0
  */

function event_registration_page() {
  $userID = get_current_user_id();
  $user = get_user_by( 'ID', $userID );

  $page = '<table class="form-table">';
  $page .= '<tr>';
  $page .= '<td><p>Module 1 - Diagnosis & Treatment Planning</p></td>';
  $page .= '<td style="text-align: center;">';
  $page .= '<a class="event-registration-button" href="https://orthotraining.com.au/event-registration/module-1/?email=' . $user->user_email . '">Register here</a>';
  $page .= '</td>';
  $page .= '</tr>';
  $page .= '<tr>';
  $page .= '<td><p>Module 2 - Conventional Straight Wire Mechanics</p></td>';
  $page .= '<td style="text-align: center;">';
  $page .= '<a class="event-registration-button" href="https://orthotraining.com.au/event-registration/module-2/?email=' . $user->user_email . '">Register here</a>';
  $page .= '</td>';
  $page .= '</tr>';
  $page .= '<tr>';
  $page .= '<td><p>Module 3 - Early Treatment</p></td>';
  $page .= '<td style="text-align: center;">';
  $page .= '<a class="event-registration-button" href="https://orthotraining.com.au/event-registration/module-3/?email=' . $user->user_email . '">Register here</a>';
  $page .= '</td>';
  $page .= '</tr>';
  $page .= '<tr>';
  $page .= '<td><p>Module 4 - Aligner Therapy</p></td>';
  $page .= '<td style="text-align: center;">';
  $page .= '<a class="event-registration-button" href="https://orthotraining.com.au/event-registration/module-4/?email=' . $user->user_email . '">Register here</a>';
  $page .= '</td>';
  $page .= '</tr>';
  $page .= '<tr>';
  $page .= '<td><p>Module 5 - Aesthetic and Accelerated Orthodontics</p></td>';
  $page .= '<td style="text-align: center;">';
  $page .= '<a class="event-registration-button" href="https://orthotraining.com.au/event-registration/module-5/?email=' . $user->user_email . '">Register here</a>';
  $page .= '</td>';
  $page .= '</tr>';
  $page .= '<tr>';
  $page .= '<td><p>Module 6 - Advanced Biomechanics</p></td>';
  $page .= '<td style="text-align: center;">';
  $page .= '<a class="event-registration-button" href="https://orthotraining.com.au/event-registration/module-6/?email=' . $user->user_email . '">Register here</a>';
  $page .= '</td>';
  $page .= '</tr>';
  $page .= '<tr>';
  $page .= '<td><p>Module 7 - Management of CL 3 Malocclusions</p></td>';
  $page .= '<td style="text-align: center;">';
  $page .= '<a class="event-registration-button" href="https://orthotraining.com.au/event-registration/module-7/?email=' . $user->user_email . '">Register here</a>';
  $page .= '</td>';
  $page .= '</tr>';
  $page .= '<tr>';
  $page .= '<td><p>Module 8 - IDT and Difficult Orthodontic Problems</p></td>';
  $page .= '<td style="text-align: center;">';
  $page .= '<a class="event-registration-button" href="https://orthotraining.com.au/event-registration/module-8/?email=' . $user->user_email . '">Register here</a>';
  $page .= '</td>';
  $page .= '</tr>';
  $page .= '</table>';

  return $page;
}

add_shortcode( 'event_registration_page', 'event_registration_page' );
?>
