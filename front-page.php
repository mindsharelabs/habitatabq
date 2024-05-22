<?php
get_header();
if(have_posts()) :
    $classes = get_post_class('', get_the_ID());
    while(have_posts()) : the_post();
        the_content();
    endwhile;
else :
    echo '<div class="container">';
        echo '<div class="row">';
            echo '<div class="col">';
                echo '<h2>There is nothing here.</h2>';
            echo '</div>';
        echo '</div>';
    echo '</div>';    
endif;
get_footer();