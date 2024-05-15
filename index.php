<?php
get_header();

echo '<div class="row">';
if(have_posts()) :
    while(have_posts()) : the_post();
        get_template_part( 'template-parts/loop', get_post_type(get_the_id()));
    endwhile;
    get_template_part( 'template-parts/pagination');
endif;
echo '</div>';



get_footer();