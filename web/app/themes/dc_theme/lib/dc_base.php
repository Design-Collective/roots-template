<?php

/* Hide admin menu bar on frontend for non-admins */
if (!is_admin() && !current_user_can( 'manage_options' )) {
  show_admin_bar( false );
}


/*******************************
 *  WOOCOMMERCE
 *******************************/

/* Disable WooCommerce CSS */
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

/* Ensure cart contents update when
   products are added to the cart via AJAX */
   
add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
function woocommerce_header_add_to_cart_fragment( $fragments ) {
  global $woocommerce;
  ob_start();
  
  ?>
  <a class="cart-content" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><i class="icon-cart"></i> <?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> | <?php echo $woocommerce->cart->get_cart_total(); ?></a>
  <?php
  
  $fragments['a.cart-content'] = ob_get_clean();
  
  return $fragments;
  
}