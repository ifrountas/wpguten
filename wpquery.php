<?php

    $new_posts = new WP_Query( 
        array(  'post_type' => 'YOUR CUSTOM POST TYPE',
                'post__in' => $gather_post_ids,
                'posts_per_page'=> -1
    )); 

?>
