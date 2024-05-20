    </div><!-- /#main -->
    <?php 
    
    
    get_template_part( 'template-parts/nav/nav', 'mobile');

    echo '<div id="mobileMenuToggle" class="menu-toggle d-flex d-md-none">';
        include get_template_directory() . '/img/menuToggle.svg';
    echo '</div>';
    wp_footer(); 
     
     
     ?>
    </body>
</html>