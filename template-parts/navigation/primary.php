<?php
/**
 * Primary menu template part
 */    
?>   

<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary', 'poppies' ); ?>">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span></span></button>
    <?php
     wp_nav_menu(
        array(
            'menu' => 'menu',
            'theme_location' => 'menu-1',
        )
    );
    ?>
</nav><!-- #site-navigation -->