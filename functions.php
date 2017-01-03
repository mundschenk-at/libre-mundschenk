<?php

namespace Mundschenk\Libre;

add_action( 'wp_enqueue_scripts', 'Mundschenk\Libre\theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_filter( 'typo_ignore_parser_errors', '__return_true' );
