<?php
get_header();

echo '<div class="row">';
if(have_posts()) :
    while(have_posts()) : the_post();
        the_content();
    endwhile;
endif;
echo '</div>';

get_footer();