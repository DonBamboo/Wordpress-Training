<?php

/* this section is for loading scripts and css files */
function load_scripts() {
  wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all' );
  wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.1.3', true );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

/* this section is for main menu function */
register_nav_menus(
  array(
    'my_main_menu' => 'Main Menu',
    'footer_menu' => 'Footer Menu'
  )
);