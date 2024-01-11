<?php 


	/* ===================================================
	   Customize Excerpt Link
	   =================================================== */

	// Remove dot from default excerpt 
	function remove_dot_from_paragraph ( $remove ) {

		return '';

	}
	add_filter( 'excerpt_more' , 'remove_dot_from_paragraph' );

	// Control Excerpt word length
	function control_excerpt_length () {

		return 30;
		
	}
	add_filter( 'excerpt_length' , 'control_excerpt_length' );

	// Custom excerpt length
	function custom_excerpt_length ( $limit ) {

		$post_content = explode( ' ' , get_the_content() );

		$maximum_post_content = array_slice( $post_content , 0 , $limit );

		echo implode( ' ' , $maximum_post_content );
	}