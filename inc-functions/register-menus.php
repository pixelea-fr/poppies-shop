<?php
/**
 * Register nav menus locations
 */

 if ( ! function_exists( 'pixstudio_register_nav_menu' ) ) {

	function pixstudio_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'pixstudio' ),
	    	'footer_menu'  => __( 'Footer Menu', 'pixstudio' ),
		) );
	}
	add_action( 'after_setup_theme', 'pixstudio_register_nav_menu', 0 );
}