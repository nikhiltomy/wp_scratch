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

  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );

}
add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_styles' );


// Register Menu Locations
register_nav_menus( [
    'main-menu' => esc_html__( 'Main Menu Select', 'wpheirarchy' ),
]);

function wphierarchy_enqueue_widgets(){
  $widget1 =[
      "name" => "Main Sidebar",
      "id"   => "main-sidebar",
      'description' => "Add Widgets to the main sidebar",
      'before_widget' => '<section class="widget">',
      'after_widget' => '</section>',
      'before_title' => '<h3 class="widget-title">',
      'after_title'  => '</h3>'
  ];
  $widget2 =[
      "name" => "Footer Sidebar",
      "id"   => "footer-sidebar",
      'description' => "Add Widgets to the Footer sidebar",
      'before_widget' => '<section class="widget">',
      'after_widget' => '</section>',
      'before_title' => '<h5 class="widget-title">',
      'after_title'  => '</h5>'
  ];
  register_sidebar($widget1);
  register_sidebar($widget2);
}
add_action( 'widgets_init','wphierarchy_enqueue_widgets');















?>
