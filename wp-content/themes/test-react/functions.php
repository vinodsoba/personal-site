<?php

function react_custom_rest() {
  register_rest_field( 'page', 'authorName', array(
    'get_callback' => function() {
      return get_the_author();
    }
  ));
}

add_action( 'rest_api_init', 'react_custom_rest');

// Enqueue Theme JS w React Dependency

function my_enqueue_theme_js() {
  wp_enqueue_script(
    'test-react',
    get_stylesheet_directory_uri() . '/build/index.js',
    ['wp-element'],
    time(), // Change this to null for production
    true
  );
}

add_action( 'wp_enqueue_scripts', 'my_enqueue_theme_js' );


function boilerplate_add_support() {
  register_nav_menus(array(
    'Header Main Menu' => esc_html__( 'headerMainMenu', 'Header Main Menu' )

  ));

  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');