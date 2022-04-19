<?php
    
    function load_assets(){

        //cargar BS CSS
        wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');

        //cargar BS JS
        wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');

        //permite cargar el csss del tema
        wp_enqueue_style('style', get_stylesheet_uri() );

    }
    
    add_action('wp_enqueue_scripts', 'load_assets');

    //soporte para imagenes destacadas en paginas
    add_theme_support('post-thumbnails');

?>