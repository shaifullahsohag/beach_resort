<?php 

	
	/* ===================================================
	   Includes All Files
	   =================================================== */

	   // Include enqueue.php File
	   include_once( get_template_directory() . '/inc/enqueue.php' );

	   // Include setup.php File
	   include_once( get_template_directory() . '/inc/setup.php' );

	   // Include widgets.php File
	   include_once( get_template_directory() . '/inc/widgets.php' );

	   // Include customize_excerpt.php File
	   include_once( get_template_directory() . '/inc/customize_excerpt.php' );

	   // Include custom_post.php File
	   include_once( get_template_directory() . '/inc/custom_post.php' );

	   // Include custom_comment_layout.php File
	   include_once( get_template_directory() . '/inc/custom_comment_layout.php' );

	   // Include custom_comment_field. php File
	   include_once( get_template_directory() . '/inc/custom_comment_field.php' );



	/* ===================================================
	   Action and Filter Hooks
	   =================================================== */
	
	   // Enqueue All Styles and Scripts
	   add_action( 'wp_enqueue_scripts' , 'beach_resort_scripts' );

	   // Beach Resort Setup
	   add_action( 'after_setup_theme' , 'beach_resort_setup' );

	   // Beach Resort Widgets Init
	   add_action( 'widgets_init' , 'beach_resort_widgets_init' );

	   // Beach Resort Custom Post
	   add_action( 'init' , 'beach_resort_custom_post' );


	   // Set the desfualt width of the content.
	   if ( ! isset( $content_width ) ) $content_width = 1170;


	   
	   

 ?>