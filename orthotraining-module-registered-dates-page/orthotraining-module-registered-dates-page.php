<?php
/**
* Plugin Name: Orthotraining Module Dates Page
* Description: Custom Plugin to show user's current registered OrthoEd Modules with Dates
* Version: 1.0
*/
add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );

function extra_user_profile_fields( $user ) { ?>
    <h3><?php _e("Event Registration", "blank"); ?></h3>

    <table class="form-table">
    <tr>
        <th><label for="module_1_date"><?php _e("Module 1"); ?></label></th>
        <td>
            <input type="text" name="module_1_date" id="module_1_date" value="<?php echo get_user_meta( $user->id, 'module_1_date', true ); ?>" class="regular-text" disabled/><br />
        </td>
    </tr>
    <tr>
        <th><label for="module_2_1_date"><?php _e("Module 2 Part 1"); ?></label></th>
        <td>
            <input type="text" name="module_2_1_date" id="module_2_1_date" value="<?php echo get_user_meta( $user->id, 'module_2_1_date', true ); ?>" class="regular-text" disabled/><br />
        </td>
    </tr>
    <tr>
        <th><label for="module_2_2_date"><?php _e("Module 2 Part 2"); ?></label></th>
        <td>
            <input type="text" name="module_2_2_date" id="module_2_2_date" value="<?php echo get_user_meta( $user->id, 'module_2_2_date', true ); ?>" class="regular-text" disabled/><br />
        </td>
    </tr>
    <tr>
        <th><label for="module_3_date"><?php _e("Module 3"); ?></label></th>
        <td>
            <input type="text" name="module_3_date" id="module_3_date" value="<?php echo get_user_meta( $user->id, 'module_3_date', true ); ?>" class="regular-text" disabled/><br />
        </td>
    </tr>
    <tr>
        <th><label for="module_4_date"><?php _e("Module 4"); ?></label></th>
        <td>
            <input type="text" name="module_4_date" id="module_4_date" value="<?php echo get_user_meta( $user->id, 'module_4_date', true ); ?>" class="regular-text" disabled/><br />
        </td>
    </tr>
    <tr>
        <th><label for="module_5_date"><?php _e("Module 5"); ?></label></th>
        <td>
            <input type="text" name="module_5_date" id="module_5_date" value="<?php echo get_user_meta( $user->id, 'module_5_date', true ); ?>" class="regular-text" disabled/><br />
        </td>
    </tr>
    <tr>
        <th><label for="module_6_date"><?php _e("Module 6"); ?></label></th>
        <td>
            <input type="text" name="module_6_date" id="module_6_date" value="<?php echo get_user_meta( $user->id, 'module_6_date', true ); ?>" class="regular-text" disabled/><br />
        </td>
    </tr>
    <tr>
        <th><label for="module_7_date"><?php _e("Module 7"); ?></label></th>
        <td>
            <input type="text" name="module_7_date" id="module_7_date" value="<?php echo get_user_meta( $user->id, 'module_7_date', true ); ?>" class="regular-text" disabled/><br />
        </td>
    </tr>
    <tr>
        <th><label for="module_8_date"><?php _e("Module 8"); ?></label></th>
        <td>
            <input type="text" name="module_8_date" id="module_8_date" value="<?php echo get_user_meta( $user->id, 'module_8_date', true ); ?>" class="regular-text" disabled/><br />
        </td>
    </tr>
    <tr>
        <th><label for="module_9_date"><?php _e("Module 9"); ?></label></th>
        <td>
            <input type="text" name="module_9_date" id="module_9_date" value="<?php echo get_user_meta( $user->id, 'module_9_date', true ); ?>" class="regular-text" disabled/><br />
        </td>
    </tr>
    <tr>
        <th><label for="smilefast_pro_date"><?php _e("Smilefast PRO"); ?></label></th>
        <td>
            <input type="text" name="smilefast_pro_date" id="smilefast_pro_date" value="<?php echo get_user_meta( $user->id, 'smilefast_pro_date', true ); ?>" class="regular-text" disabled/><br />
        </td>
    </tr>
    <tr>
        <th><label for="post_grad_test"><?php _e("Postgraduate Test"); ?></label></th>
        <td>
            <input type="text" name="post_grad_test" id="post_grad_test" value="<?php echo get_user_meta( $user->id, 'post_grad_test', true ); ?>" class="regular-text" disabled/><br />
        </td>
    </tr>
    </table>
<?php }?>
