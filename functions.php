<?php

function underscores_enqueue_scripts(){
	wp_enqueue_style( 'parent-css', get_template_directory_uri() .'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'underscores_enqueue_scripts' );