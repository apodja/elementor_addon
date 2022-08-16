<?php
/**
 * Plugin Name: Clickservice Elementor Addon 
 * Description: Simple widget for Elementor.
 * Version:     1.0.0
 * Author:      Aldi
 * Author URI:  https://clickservice.at/
 */

function register_custom_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/elementor_addon.php' );

	$widgets_manager->register( new \Elementor_Hello_World_Widget_1() );
	$widgets_manager->register( new \Elementor_Addon() );

}

function my_plugin_frontend_stylesheets() {
	wp_register_style( 'frontend-style-1', plugins_url( 'assets/css/main.css', __FILE__ ) );
	wp_enqueue_style( 'frontend-style-1' );
}

function my_plugin_frontend_scripts() {
	wp_register_script( 'frontend-script-1', plugins_url( '/assets/js/addon.js', __FILE__ ) );
	wp_enqueue_script( 'frontend-script-1' );
	
}

add_action( 'elementor/widgets/register', 'register_custom_widget' );
add_action( 'elementor/frontend/before_enqueue_styles', 'my_plugin_frontend_stylesheets' );
add_action( 'elementor/frontend/before_register_scripts', 'my_plugin_frontend_scripts' );

