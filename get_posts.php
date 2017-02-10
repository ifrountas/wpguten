<?php 

//For more details about this function see WordPress Codex

$args = array(
    'posts_per_page'   => 10,
    'offset'           => 0,
    'category'         => 'YOUR CATEGORY ID',
    'category_name'    => 'YOUR CATEGORY NAME',
    'orderby'          => 'date',
    'order'            => 'DESC',
    'include'          => '',
    'exclude'          => '',
    'meta_key'         => '',
    'meta_value'       => '',
    'post_type'        => 'post',
    'post_mime_type'   => '',
    'post_parent'      => '',
    'author'       => '',
    'author_name'      => '',
    'post_status'      => 'publish',
    'suppress_filters' => true 
);

$posts_array = get_posts( $args ); ?>
