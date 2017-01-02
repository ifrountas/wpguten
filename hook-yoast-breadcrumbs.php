<?php


    //Remove or add anything you want from Yoast Breadcrumb structure
    
    function hook_your_breadcrumb( $links ) {
        global $post;

        if ( is_home() || is_singular( 'YOUR_POST_TYPE_GOES_HERE' ) || is_archive() ) {

            array_splice( $links, 1, 1, '' ); // Leaving the last field blank will remove the link in position 1 of breadcrumb
        }

        return $links;
    }

    add_filter( 'wpseo_breadcrumb_links', 'hook_your_breadcrumb' );

?>