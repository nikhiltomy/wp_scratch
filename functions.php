<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

// Load in our CSS
function wphierarchy_enqueue_styles() {

  wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');

}
add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_styles' );


// Register Menu Locations
register_nav_menus( [
    'main-menu' => esc_html__( 'Main Menu Select', 'wpheirarchy' ),
]);




function modify_description($text){
  $new_text=$text."modified";
  return $new_text;
}
add_filter('mod_des','modify_description');


function sample_admin_notice__success() {
  ?>
  <div class="notice notice-success is-dismissible">
    <p><?php _e( 'Done Nikhil!', 'sample-text-domain' ); ?></p>
  </div>
  <?php
}
add_action( 'admin_notices', 'sample_admin_notice__success' );










?>
