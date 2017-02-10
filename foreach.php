<?php $gather_post_ids = array(); ?>

<?php foreach ($posts_array as $post): $i++?>

    <?php setup_postdata( $post ); ?>

        <?php if ($i <= 3 ): ?>

            <?php array_push( $gather_post_ids, $post->ID ); ?>

            <?php the_title(); ?>

        <?php endif;?>

<?php endforeach; ?>

    <?php wp_reset_postdata(); ?>