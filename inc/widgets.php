<?php 


	/* ===================================================
	   Beach Resort Sidebar Widgets
	   =================================================== */
	function beach_resort_widgets_init() {

		if ( function_exists( 'register_sidebar' ) ) {

			register_sidebar( array(

				'name'          => esc_html__( 'Blog Right Sidebar' , 'resort' ),
				'description'   => esc_html__( 'Decorate the sidebar of your blog.' , 'resort' ),
				'id'            => 'right-sidebar',
				'before_widget' => '<div class="single_sidebar overflow_hidden">',
				'after_widget'  => '</div> <!-- End single_sidebar -->',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',

			) );


			register_sidebar( array(

				'name'          => esc_html__( 'Contact Left Sidebar' , 'resort' ),
				'description'   => esc_html__( 'Decorate the sidebar of your contact page.' , 'resort' ),
				'id'            => 'contact-left-sidebar',
				'before_widget' => '<div class="contact_us_wrapper_left overflow_hidden col-sm-4">',
				'after_widget'  => '</div> <!-- End contact_us_wrapper_left -->',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',

			) );

			register_sidebar( array(

				'name'          => esc_html__( 'Footer Right Sidebar' , 'resort' ),
				'description'   => esc_html__( 'Decorate the Social Icons in the right side of your side.' , 'resort' ),
				'id'            => 'footer-right-sidebar',
				'before_widget' => '<div class="social_media_link overflow_hidden pull-right col-sm-4">',
				'after_widget'  => '</div> <!-- End social_media_link -->',
				'before_title'  => '',
				'after_title'   => '',

			) );


		}
	}