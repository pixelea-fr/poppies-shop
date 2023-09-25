<?php
/**
 * Register nav menus locations
 */

 if ( ! function_exists( 'poppies_register_nav_menu' ) ) {

	function poppies_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'poppies' ),
	    	'footer_menu'  => __( 'Footer Menu', 'poppies' ),
		) );
	}
	add_action( 'after_setup_theme', 'poppies_register_nav_menu', 0 );
}