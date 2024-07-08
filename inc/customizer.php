<?php
/**
* Create Logo Setting and Upload Control
*/
function habitat_customizer_settings($wp_customize) {
    
    // add a setting for the site logo
    $wp_customize->add_setting('habitat_logo');
    // Add a control to upload the logo
    $wp_customize->add_control( new WP_Customize_Image_Control( 
        $wp_customize, 'habitat_logo',
        array(
            'label' => 'Upload Logo',
            'section' => 'title_tagline',
            'mime_type' => 'image',
        ) 
    ) );
}
add_action('customize_register', 'habitat_customizer_settings');