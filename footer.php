    </div><!-- /#main -->
    <?php 
    echo '<div class="footer-cont">';
        echo '<div class="container">';
            if ( is_active_sidebar( 'footer_widgets' ) ) :
                echo '<div id="footer-widgets" class="row" role="complementary">';
                    dynamic_sidebar( 'footer_widgets' );
                echo '</div>';
            endif;
        echo '</div>';
    echo '</div>';

    echo '<div class="credit-cont">';
        echo '<div class="container">';
            echo '<div class="row">';
                echo '<div class="col-12 text-center my-3">';
                    echo '<small>&copy; ' . date('Y') . ' ' . get_bloginfo('name') . '</small>';
                echo '</div>';
                echo '<div class="col-12 text-center my-1">';
                    echo '<a href="https://mind.sh/are" target="_blank" style="color:#D1A63D">';
                        echo '<i class="fa-kit fa-2x fa-mindshare"></i>';
                    echo '</a>';
                echo '</div>';
        echo '</div>';
    echo '</div>';
    
    get_template_part( 'template-parts/nav/nav', 'mobile');

    echo '<div id="mobileMenuToggle" class="menu-toggle d-flex d-md-none">';
        include get_template_directory() . '/img/menuToggle.svg';
    echo '</div>';
    wp_footer(); 
     
     
     ?>
    </body>
</html>