<?php

/* Scripts and Styles */
function my_additional_files() { 
    wp_enqueue_style('my_main_style', get_stylesheet_uri()); 
    wp_enqueue_script( 'my_webpack_bundle', get_stylesheet_directory_uri() . '/dist/main.js', array(), false, true );
	if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
		wp_enqueue_script('comment-reply', 'wp-includes/js/comment-reply', array(), false, true);
	}
} 

add_action('wp_enqueue_scripts', 'my_additional_files');
