<?php

function wp_scratch_styles(){
    wp_enqueue_style('main-css',get_stylesheet_directory_uri().'/style.css',array('bootstrap'),'1.0','all');
    wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css',array(),'5.0','all');
}

add_action('wp_enqueue_scripts','wp_scratch_styles');



function wp_scratch_scripts(){
    wp_enqueue_script('bootstrap-js-bundle','https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js',array(),'5.0','true');
}

add_action('wp_enqueue_scripts ','wp_scratch_scripts');


function wp_scratch_register_menu(){
    $locations = array(
        'Primary'=>"Primary Menu is Here",
        'Footer'=>"Footer Menu is Here"
    );
    register_nav_menus($locations);

}

add_action('init','wp_scratch_register_menu');

?>