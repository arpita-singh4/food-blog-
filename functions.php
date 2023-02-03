<?php
function add_css()
{
	
	wp_enqueue_style('main-style',get_stylesheet_uri());
	wp_enqueue_style('fonts','/fonts/css/all.css');
	
}


add_action('wp_enqueue_scripts','add_css');
?>

