<?php 

$args = array(
    'posts_per_page'   => 10,
    'offset'           => 0,
    'category'         => '',
    'category_name'    => 'category_name',
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


<?php $gather_post_ids = array(); ?>

<?php foreach ($posts_array as $post): $i++?>

    <?php setup_postdata( $post ); ?>

        <?php if ($i <= 3 ): ?>

            <?php array_push( $gather_post_ids, $post->ID ); ?>

            <?php the_title(); ?>

        <?php endif;?>

<?php endforeach; ?>

    <?php wp_reset_postdata(); ?>


<?php

    $new_posts = new WP_Query( 
        array(  'post_type' => 'YOUR CUSTOM POST TYPE',
                'post__in' => $gather_post_ids,
                'posts_per_page'=> -1
    )); 

?>

<?php foreach ($new_posts as $post): ?>

    <?php setup_postdata( $post ); ?>

            <?php the_title(); ?>

<?php endforeach; ?>

    <?php wp_reset_postdata(); ?>