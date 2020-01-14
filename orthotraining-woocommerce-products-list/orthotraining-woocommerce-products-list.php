<?php
  /**
  * Plugin Name: Orthotraining Custom Woocommerce Product List
  * Description: Custom shortcode for woocommerce products by category
  * Version: 1.0
  */

function generate_products_list($atts) {
  wp_register_style( 'o-style', plugins_url('/css/o-style.css', __FILE__), false, '1.0.0', 'all' );
  wp_enqueue_style( 'o-style' );

  $product_category = $atts['category'];
  $args = array(
    'category' => array( $product_category ),
  );
  $products = wc_get_products( $args );

  $list = '<ul>';

  foreach ($products as $product) {
    $list .= '<li class="o-course-container">';
    $list .= '<div class="o-course-image">';
    $list .= '<a href="' . $product->get_permalink() . '">';
    $list .= $product->get_image();
    $list .= '</a>';
    $list .= '</div>';
    $list .= '<div class="o-course-details">';
    $list .= '<a href="' . $product->get_permalink() . '">';
    $list .= '<h2>' . $product->name . '</h2>';
    $list .= '</a>';
    $list .= '<div class="o-course-short-desc">' . $product->get_short_description() . '</div>';
    $list .= '<div class="o-course-price">' . $product->get_price_html() . '</div>';
    $list .= '<div class="o-course-button">';
    $list .= '<a href="' . $product->add_to_cart_url() . '">Register</a>';
    $list .= '</div>';
    $list .= '</div>';
    $list .= '</li>';
  }
  $list .= '</ul>';

  return $list;
}

add_shortcode( 'orthotraining_products', 'generate_products_list' );
?>
