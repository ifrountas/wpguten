<?php

  function add_featured_image_instruction( $content ) {
        return $content .= '<p>ADD YOUR INSTRUCTIONS HERE</p>';
  }

  add_filter( 'admin_post_thumbnail_html', 'add_featured_image_instruction');
  
?>
