<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/what-input.min.js', array(), '', true );
    
    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/foundation.js', array( 'jquery' ), '6.2.3', true );
    
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );
    

	//enqueues our external font awesome stylesheet
	wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
	   
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );
    
    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);

function load_fonts() {
	wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Domine|Roboto|Varela+Round');
	wp_enqueue_style( 'googleFonts');
}
    
add_action('wp_print_styles', 'load_fonts');