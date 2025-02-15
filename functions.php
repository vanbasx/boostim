<?php

// THEME OPTIMIZATION
remove_action( 'wp_head', 'start_post_rel_link', 10 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'feed_links_extra' );
remove_action( 'wp_head', 'feed_links' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_classic_theme_styles' );


// THEME SUPPORT
function boostim_theme_support() {

  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5' );
  add_theme_support( 'editor-styles' );
  add_editor_style( get_parent_theme_file_uri( 'assets/css/style.css' ) );

}
add_action( 'after_setup_theme', 'boostim_theme_support' );



// STYLES AND SCRIPTS REGISTER
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



// FONTS REGISTER
function boostim_enqueue_fonts() {

  echo '<link rel="preload" href="' . get_parent_theme_file_uri( 'assets/fonts/Manrope-Bold.woff2' ) . '" as="font" type="font/woff2" crossorigin>';
  echo '<link rel="preload" href="' . get_parent_theme_file_uri( 'assets/fonts/Manrope-Medium.woff2' ) . '" as="font" type="font/woff2" crossorigin>';

}
add_action( 'wp_head', 'boostim_enqueue_fonts', 5 );



// CPT REGISTER
function boostim_custom_post_type() {

  register_post_type('case',
		array(
			'labels'      => array(
				'name'            => __( 'Case study', 'boostim' ),
				'singular_name'   => __( 'Case', 'boostim' ),
			),
				'public'          => true,
				'has_archive'     => false,
        'rewrite'         => array( 'slug' => 'case-study' ),
        'menu_icon'       => 'dashicons-portfolio',
        'menu_position'   => 5,
        'supports'        => array(
          'title',
          'editor',
          'thumbnail',
          'excerpt'
        ),
        'show_in_rest'    => true
		)
	);

  register_post_type('resource',
		array(
			'labels'      => array(
				'name'            => __( 'Resources', 'boostim' ),
				'singular_name'   => __( 'Resource', 'boostim' ),
			),
				'public'          => true,
				'has_archive'     => false,
        'rewrite'         => array( 'slug' => 'resources' ),
        'menu_icon'       => 'dashicons-welcome-write-blog',
        'menu_position'   => 5,
        'supports'        => array(
          'title',
          'editor',
          'thumbnail',
          'excerpt'
        ),
        'show_in_rest'    => true
		)
	);

}
add_action( 'init', 'boostim_custom_post_type' );


// REGISTER BLOCKS
function boostim_register_blocks() {

	register_block_type( __DIR__ . '/blocks/build/block-section' );
  register_block_type( __DIR__ . '/blocks/build/block-paragraph' );

}
add_action( 'init', 'boostim_register_blocks' );