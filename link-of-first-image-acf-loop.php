<?php

  $rows = get_field('YOUR_REPEATER_NAME'); 
  $first_img = $rows[0]['YOUR_SUB_FIELD_NAME'];
  $first_img_link = vanilla_theme_get_image_src( $first_img, 'IMAGE SIZE GOES HERE' );

?>
