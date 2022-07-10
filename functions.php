<?php
function abstractart_scripts() {
  // Enqueue parent style
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  // Enqueue canvas-art script
	wp_enqueue_script( 'canvas-art', get_stylesheet_directory_uri() . '/script.js', array(), null, true );
}

// The function below will actually trigger the abstractart_scripts function above when WordPress loads the site
add_action( 'wp_enqueue_scripts', 'abstractart_scripts' );
