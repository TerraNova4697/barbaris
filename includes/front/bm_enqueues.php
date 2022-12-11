<?php

function queue_scripts_and_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap-basic', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' );
    
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/d38031073f.js', );
    wp_enqueue_script( 'navBar', get_template_directory_uri() . '/js/navBar.js', [], '1.0', true );
    wp_enqueue_script( 'order', get_template_directory_uri() . '/js/order.js', [], '1.0', true );
    wp_enqueue_script( 'quizBtns', get_template_directory_uri() . '/js/quizBtns.js', [], '1.0', true );
    wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/slider.js', [], '1.0', true );
    wp_enqueue_script( 'stages', get_template_directory_uri() . '/js/stages.js', [], '1.0', true );
    wp_enqueue_script( 'hamburger', get_template_directory_uri() . '/js/hamburger.js', [], '1.0', true );
}