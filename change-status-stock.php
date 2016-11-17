<?php
  function custom_get_availability( $availability, $_product ) {
   //change text "In Stock' to 'SPECIAL ORDER'
   if ( $_product->is_in_stock() ) $availability['availability'] = __('AVAILABLE', 'woocommerce');

   //change text "Out of Stock' to 'SOLD OUT'
   if ( !$_product->is_in_stock() ) $availability['availability'] = __('SOLD OUT', 'woocommerce');
   return $availability;
   }

  add_filter( 'woocommerce_get_availability', 'custom_get_availability', 1, 2);
?>
