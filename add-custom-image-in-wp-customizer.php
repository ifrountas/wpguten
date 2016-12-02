<?php

    function your_logo_customizer( $wp_customize ) {
        $wp_customize->add_setting( 'your-logo' );        
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your-logo', array(
            'label'    => __( 'Upload your Logo', 'text-domain' ),
            'section'  => 'title_tagline',
            'settings' => 'your-logo',
        ) ) );
    }

    add_action( 'customize_register', 'your_logo_customizer' );

?>