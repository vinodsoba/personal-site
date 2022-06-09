<?php 
function university_post_types() {

   // Event Post Type

   register_post_type( 'event', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt'),
      'rewrite' => array('slug' => 'events'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
         'name' => 'Events',
         'add_new_item' => 'Add New Event',
         'edit_item' => 'Edit Event',
         'all_items' => 'All Events',
         'singular_name' => 'Event'
      ),
      'menu_icon' => 'dashicons-calendar-alt'
   ));

   // Program Post Type
   register_post_type( 'program', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor'),
      'rewrite' => array('slug' => 'programs'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
         'name' => 'Programs',
         'add_new_item' => 'Add New Program',
         'edit_item' => 'Edit Program',
         'all_items' => 'All Programs',
         'singular_name' => 'Program'
      ),
      'menu_icon' => 'dashicons-awards'
   ));

   // Professor Post Type

   register_post_type( 'professor', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
      'public' => true,
      'labels' => array(
         'name' => 'Professors',
         'add_new_item' => 'Add New Professor',
         'edit_item' => 'Edit Professor',
         'all_items' => 'All Professors',
         'singular_name' => 'Professor'
      ),
      'menu_icon' => 'dashicons-welcome-learn-more'
   ));
}

add_action('init', 'university_post_types');


function skills_post_type() {

    // Portfolio Post Type
    register_post_type( 'portfolio', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'taxonomies' => array('category', 'post_tag'),
      'rewrite' => array('slug' => 'portfolio'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
         'name' => 'Portfolio',
         'add_new_item' => 'Add New Portfolio',
         'edit_item' => 'Edit Portfolio',
         'all_items' => 'All Portfolio',
         'singular_name' => 'Portfolio'
      ),
      'menu_icon' => 'dashicons-portfolio'
      
   ));

   // Services Post Type
   register_post_type( 'service', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'taxonomies' => array('category', 'post_tag'),
      'rewrite' => array('slug' => 'services'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
         'name' => 'Services',
         'add_new_item' => 'Add New Service',
         'edit_item' => 'Edit Service',
         'all_items' => 'All Services',
         'singular_name' => 'Service'
      ),
      'menu_icon' => 'dashicons-admin-generic'
      
   ));

   // Skill Post Type
   register_post_type( 'skill', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'taxonomies' => array('category', 'post_tag'),
      'rewrite' => array('slug' => 'skills'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
         'name' => 'Skills',
         'add_new_item' => 'Add New Skill',
         'edit_item' => 'Edit Skill',
         'all_items' => 'All Skills',
         'singular_name' => 'Skill'
      ),
      'menu_icon' => 'dashicons-hammer'
      
   ));

}


add_action( 'init', 'skills_post_type'); 