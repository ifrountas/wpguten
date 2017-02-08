<?php 

    // Here is the default validation error message for Gravity forms

    function change_validation_error_message( $message ) {
        return "<div class='validation_error'>" . esc_html__( 'Here you can add your custom message', 'text-domain' ) . ' </div>';
    }

    add_filter( 'gform_validation_message', 'change_validation_error_message', 10, 2 );


?>