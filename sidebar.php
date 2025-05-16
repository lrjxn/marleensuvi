<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-content">
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'sidebar-works-menu', 
                'menu_class'     => 'works-list',
                'fallback_cb'    => 'fallback_no_menu'
            ));
            
            wp_nav_menu(array(
                'theme_location' => 'sidebar-contact-menu',
                'menu_class'     => 'contact-list',
                'fallback_cb'    => 'fallback_no_contact_menu'
            ));
            ?>
        </nav>
    </div>
</div>
