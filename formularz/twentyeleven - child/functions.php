<?php
function load_custom_js() {
	wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/script.js' );
}
add_action( 'wp_enqueue_scripts', 'load_custom_js' );

wp_enqueue_script (
    'jquery',
    'http://code.jquery.com/jquery-1.11.0.min.js',
    false,
    '1.11.0',
    true
);

wp_enqueue_script (
    'validate-scripts',
    'http://ajax.microsoft.com/ajax/jquery.validate/1.6/jquery.validate.js',
    false,
    '3.2.0',
    true
);

?>