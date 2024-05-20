<?php

echo '<div class="header-cont">';
    echo '<div class="header-menu container py-3">';
        echo '<div class="row">';
            echo '<div class="header-logo order-last order-md-first col-12 col-md-6 col-lg-4">';
                echo '<a href="' . esc_url(home_url('/')) . '">';
                    echo '<img src="' . get_template_directory_uri() . '/img/logo.svg" alt="' . get_bloginfo('name') . '">';
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


