<?php 


	/* ===================================================
	   Enqueue All Styles and scripts
	   =================================================== */
	function beach_resort_scripts () {

		/*
			Enqueue Styles
		*/ 

		// UI KIT Core CSS v.2.27.4
		wp_enqueue_style( 'uikit' , get_theme_file_uri() . '/css/uikit.min.css' , null , null , 'all' );

		// Google Fonts
		wp_enqueue_style( 'google-fonts' , 'http://fonts.googleapis.com/css?family=Montserrat' , null , null , 'all' );

		// Bootstrap Core CSS v3.3.7 from MaxCDN
		wp_enqueue_style( 'bootstrap' , 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' , null , null , 'all' );

		// Custom CSS
		wp_enqueue_style( 'custom' , get_theme_file_uri() . '/style.css' , null , null , 'all' );

		// Responsive CSS
		wp_enqueue_style( 'responsive' , get_theme_file_uri() . '/css/responsive.css' , null , null , 'all' );

		/*
			Enqueue Scripts
		*/

		// HTML5 shim for IE8 support of HTML5 elements and media queries.
		wp_register_script( 'html5shiv' , 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js' );
		wp_script_add_data( 'html5shiv' , 'conditional' , 'lt IE 9' );

		// Respond.js for IE8 support of HTML5 elements and media queries.
		wp_register_script( 'respond' , 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js' );
		wp_script_add_data( 'respond' , 'conditional' , 'lt IE 9' );

		// UI KIT JS v.2.27.4
		wp_enqueue_script( 'uikit-min-js' , get_theme_file_uri() . '/js/uikit.min.js' , array( 'jquery' ) , null , true );

		// Bootstrap JS v3.3.6
		wp_enqueue_script( 'bootstrap-min-js' , 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' , array( 'jquery' ) , null , true );

		// Custom JS
		wp_enqueue_script( 'custom-js' , get_theme_file_uri() . '/js/custom.js' , array( 'jquery' ) , null , true );

		// Enable ajax Support for Threated Comment
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}


	}