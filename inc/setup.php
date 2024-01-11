<?php 


	/* ===================================================
	   Beach Resort Setup
	   =================================================== */
	function beach_resort_setup() {

		// Enable support for Translation
		if ( function_exists( 'load_theme_textdomain' ) ) {

			load_theme_textdomain( 'resort' , get_template_directory_uri() . '/lib' );

		}

		if ( function_exists( 'add_theme_support' ) ) {

			// Add default posts and comments RSS feed links to head
			add_theme_support( 'automatic-feed-links' );

			// Enable support for Custom background
			add_theme_support( 'custom-background' );

			// Dynamic Title tag
			add_theme_support( 'title-tag' );

			// Enable support for post formats
			add_theme_support( 'post-formats' , array(

				'aside',
				'audio',
				'video',
				'gallery',
				'chat',
				'link',
				'quote',
				'image',
				'status',

			) );

			// Switch default core markup for searh form, comment form, and comments to output valid HTML5
			add_theme_support( 'html5' , array(

				'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',

			) );

			// Enable support for Post Thumbnails on posts and pages
			add_theme_support( 'post-thumbnails' );

		}

		// Set the size of images on posts and pages.
		if ( function_exists( 'add_image_size' ) ) {

			add_image_size( 'blog-img' , 763 , 396 , true  );
			
		}
		

		// This theme support wp_nav_menus() in two location.
		if ( function_exists( 'register_nav_menus' ) ) {

			register_nav_menus( array(

				'top-menu'      => esc_html__( 'Top Menus' , 'resort' ),
				'footer-menu'   => esc_html__( 'Footer Menus' , 'resort' ),

			) );

		}


	}