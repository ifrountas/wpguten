<?php
  $rows = get_field('repeater_name'); 
  $first_img = $rows[0]['sub_field_name'];
  $first_img_link = vanilla_theme_get_image_src( $first_img, 'full or other image size' );
?>
