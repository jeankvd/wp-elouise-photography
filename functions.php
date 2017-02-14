<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script for the theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), 1.1,true );
	
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

?>