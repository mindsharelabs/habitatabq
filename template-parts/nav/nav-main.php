<?php






echo '<div class="header-cont">';
    echo '<div class="header-menu container pt-3">';
        echo '<div class="row">';
            echo '<div class="header-logo order-last order-md-first col-12 col-md-6 col-lg-4">';
                echo '<a href="' . esc_url(home_url('/')) . '">';

                // check to see if the logo exists and add it to the page
                if ( get_theme_mod( 'habitat_logo' ) ) :
                    echo '<img src="' . get_theme_mod( 'habitat_logo' ) . '" alt="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" >';
                // add a fallback if the logo doesn't exist
                else :
                    echo '<img src="' . get_template_directory_uri() . '/img/logo.svg" alt="' . get_bloginfo('name') . '">';
                endif;

                    
                echo '</a>';
            echo '</div>';
            echo '<nav class="header-menu order-first order-md-last col-12 col-md-6 col-lg-8 my-auto">';
                mind_nav('header-menu', array('depth' => 1));
            echo '</nav>';
        echo '</div>';
        echo '<nav class="main-menu mt-3 d-none d-md-block">';
            mind_nav('main-menu');
        echo '</nav>';
    echo '</div>';
echo '</div>';


