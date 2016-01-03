<?php
/**
 * GreenZone functions and definitions
 * @package Webace Technology
 * @subpackage GreenZone
 */

 /********************************
    Theme Includes
********************************/
function theme_includes() {
}
add_action('init', 'theme_includes');

/**************************
Theme Support
 **************************/
function theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('widgets');
}
add_action('init', 'theme_support');
 
/********************************
Theme Styles and Scripts
 ********************************/
function theme_styles() {
    
	// Register Style Sheets
    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '', '');
	wp_register_style( 'theme-metallic', get_template_directory_uri().'/css/metallic.css', array('bootstrap'), '', '');
    wp_register_style( 'theme-style', get_template_directory_uri().'/css/style.css', array('bootstrap','theme-metallic'), '', '');
	
    // Enqueue Style Sheets
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('theme-style');
    wp_enqueue_style('theme-metallic');
}

function theme_scripts() {
    
	// Register Scripts
    wp_register_script('jquery', get_template_directory_uri().'/js/jquery-1.11.3.min.js', array(), '', true);
    wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '', true);
    wp_register_script('datepicker', get_template_directory_uri().'/js/zebra_datepicker.js', array('jquery'), '', true);
    wp_register_script('theme-javascript', get_template_directory_uri().'/js/query.js', array('jquery', 'bootstrap','datepicker'), '', true);
    
	// Enqueue Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('datepicker');
    wp_enqueue_script('theme-javascript');
}

function theme_styles_scripts() {
    theme_styles();
    theme_scripts();
}
add_action( 'wp_enqueue_scripts', 'theme_styles_scripts');

/********************************
	Register Nav Menu
 ********************************/
 function register_menu() {
	register_nav_menu('primary-menu', __('Primary Menu'));
}
add_action('init', 'register_menu');
