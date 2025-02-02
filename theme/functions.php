<?php

// Theme support
function boostim_theme_support() {

  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );

}
add_action( 'after_setup_theme', 'boostim_theme_support' );

// Styles and scripts import
function boostim_enqueue_scripts() {

  wp_enqueue_style(
    'boostim-style',
    get_parent_theme_file_uri( 'assets/css/style.css' ),
    array(),
    wp_get_theme()->get( 'Version' ),
    'all'
  );

  wp_enqueue_script(
    'boostim-script',
    get_parent_theme_file_uri( 'assets/js/index.js' ),
    array(),
    wp_get_theme()->get( 'Version' ), 
    true
  );

  if ( ! is_user_logged_in() ) {
    wp_dequeue_style( 'wp-block-library' );
  }

}
add_action( 'wp_enqueue_scripts', 'boostim_enqueue_scripts' );