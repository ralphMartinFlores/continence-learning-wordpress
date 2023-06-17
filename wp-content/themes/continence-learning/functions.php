<?php 
function enqueue_bootstrap() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '5.2.0');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '5.2.0');
    wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/css/custom-mini.css', array('bootstrap'), '1.0', 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');
?>