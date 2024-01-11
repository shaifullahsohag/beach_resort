<?php 

	/* ===================================================
	   Beach Resort Custom Post
	   =================================================== */
	function beach_resort_custom_post () {

		if ( function_exists( 'register_post_type' ) ) {

			// Custom Post For Room
			register_post_type( 'rooms-details' , array(

				'labels' => array(

					'name'                  => esc_html__( 'Rooms', 'resort' ), 
                    'singular_name'         => esc_html__( 'Room', 'resort' ),
                    'menu_name'             => esc_html__( 'Rooms', 'resort' ),
			        'name_admin_bar'        => esc_html__( 'Rooms', 'resort' ),
			        'add_new'               => esc_html__( 'Add New Room', 'resort' ),
			        'add_new_item'          => esc_html__( 'Add New Room', 'resort' ),
			        'new_item'              => esc_html__( 'New Room', 'resort' ),
			        'edit_item'             => esc_html__( 'Edit Room', 'resort' ),
			        'view_item'             => esc_html__( 'View Room', 'resort' ),
			        'all_items'             => esc_html__( 'All Rooms', 'resort' ),
			        'search_items'          => esc_html__( 'Search Room', 'resort' ),
			        'not_found'             => esc_html__( 'No rooms were found!', 'resort' ),
			        'not_found_in_trash'    => esc_html__( 'No room was found in the trash!', 'resort' ),
			        'featured_image'        => __( 'Room Image', 'resort' ),
			        'set_featured_image'    => __( 'Set Room Image', 'resort' ),
			        'remove_featured_image' => __( 'Remove Room Image', 'resort' ),
			        'use_featured_image'    => __( 'Use Room Image', 'resort' ),

				),

				'public'                    => true,
				'publicly_queryable'        => true,
		        'show_ui'                   => true,
		        'show_in_menu'              => true,
                'show_in_nav_menus'         => true,              
		        'query_var'                 => true,
		        'capability_type'           => 'post',
		        'has_archive'               => true,
		        'hierarchical'              => false,
		        'menu_position'             => 25,
                'menu_icon'                 => 'dashicons-admin-home',
                

		        'supports' => array(

		        	'title',
		        	'editor',
		        	'thumbnail',

		        ),


			) );

			// Custom Post For Dive
			register_post_type( 'dive-details' , array(

				'labels' => array(

					'name'                  => esc_html__( 'Dives', 'resort' ), 
	                'singular_name'         => esc_html__( 'Dive', 'resort' ),
	                'menu_name'             => esc_html__( 'Dives', 'resort' ),
			        'name_admin_bar'        => esc_html__( 'Dives', 'resort' ),
			        'add_new'               => esc_html__( 'Add New Dive', 'resort' ),
			        'add_new_item'          => esc_html__( 'Add New Dive', 'resort' ),
			        'new_item'              => esc_html__( 'New Dive', 'resort' ),
			        'edit_item'             => esc_html__( 'Edit Dive', 'resort' ),
			        'view_item'             => esc_html__( 'View Dive', 'resort' ),
			        'all_items'             => esc_html__( 'All Dive', 'resort' ),
			        'search_items'          => esc_html__( 'Search Dive', 'resort' ),
			        'not_found'             => esc_html__( 'No dives were found!', 'resort' ),
			        'not_found_in_trash'    => esc_html__( 'No dive was found in the trash!', 'resort' ),
			        'featured_image'        => __( 'Dive Image', 'resort' ),
			        'set_featured_image'    => __( 'Set Dive Image', 'resort' ),
			        'remove_featured_image' => __( 'Remove Dive Image', 'resort' ),
			        'use_featured_image'    => __( 'Use Dive Image', 'resort' ),

				),

				'public'                    => true,
				'publicly_queryable'        => true,
		        'show_ui'                   => true,
		        'show_in_menu'              => true,
	            'show_in_nav_menus'         => true,              
		        'query_var'                 => true,
		        'capability_type'           => 'post',
		        'has_archive'               => true,
		        'hierarchical'              => false,
		        'menu_position'             => 25,
	            'menu_icon'                 => 'dashicons-tickets-alt',
	            

		        'supports' => array(

		        	'title',
		        	'editor',
		        	'thumbnail',

		        ),


			) );

			// Custom Post For Dive
			register_post_type( 'food-details' , array(

				'labels' => array(

					'name'                  => esc_html__( 'Foods', 'resort' ), 
	                'singular_name'         => esc_html__( 'Food', 'resort' ),
	                'menu_name'             => esc_html__( 'Food', 'resort' ),
			        'name_admin_bar'        => esc_html__( 'Food', 'resort' ),
			        'add_new'               => esc_html__( 'Add New Food', 'resort' ),
			        'add_new_item'          => esc_html__( 'Add New Food', 'resort' ),
			        'new_item'              => esc_html__( 'New Food', 'resort' ),
			        'edit_item'             => esc_html__( 'Edit Food', 'resort' ),
			        'view_item'             => esc_html__( 'View Food', 'resort' ),
			        'all_items'             => esc_html__( 'All Food', 'resort' ),
			        'search_items'          => esc_html__( 'Search Food', 'resort' ),
			        'not_found'             => esc_html__( 'No Foods were found!', 'resort' ),
			        'not_found_in_trash'    => esc_html__( 'No Food was found in the trash!', 'resort' ),
			        'featured_image'        => __( 'Food Image', 'resort' ),
			        'set_featured_image'    => __( 'Set Food Image', 'resort' ),
			        'remove_featured_image' => __( 'Remove Food Image', 'resort' ),
			        'use_featured_image'    => __( 'Use Food Image', 'resort' ),

				),

				'public'                    => true,
				'publicly_queryable'        => true,
		        'show_ui'                   => true,
		        'show_in_menu'              => true,
	            'show_in_nav_menus'         => true,              
		        'query_var'                 => true,
		        'capability_type'           => 'post',
		        'has_archive'               => true,
		        'hierarchical'              => false,
		        'menu_position'             => 25,
	            'menu_icon'                 => 'dashicons-editor-removeformatting',
	            

		        'supports' => array(

		        	'title',
		        	'editor',
		        	'thumbnail',

		        ),


			) );

			// Custom Post For Dive
			register_post_type( 'about-details' , array(

				'labels' => array(

					'name'                  => esc_html__( 'About', 'resort' ), 
	                'singular_name'         => esc_html__( 'About', 'resort' ),
	                'menu_name'             => esc_html__( 'About', 'resort' ),
			        'name_admin_bar'        => esc_html__( 'About', 'resort' ),
			        'add_new'               => esc_html__( 'Add New About', 'resort' ),
			        'add_new_item'          => esc_html__( 'Add New About', 'resort' ),
			        'new_item'              => esc_html__( 'New About', 'resort' ),
			        'edit_item'             => esc_html__( 'Edit About', 'resort' ),
			        'view_item'             => esc_html__( 'View About', 'resort' ),
			        'all_items'             => esc_html__( 'All Abouts', 'resort' ),
			        'search_items'          => esc_html__( 'Search About', 'resort' ),
			        'not_found'             => esc_html__( 'No Abouts were found!', 'resort' ),
			        'not_found_in_trash'    => esc_html__( 'No About was found in the trash!', 'resort' ),
			        'featured_image'        => __( 'About Image', 'resort' ),
			        'set_featured_image'    => __( 'Set About Image', 'resort' ),
			        'remove_featured_image' => __( 'Remove About Image', 'resort' ),
			        'use_featured_image'    => __( 'Use About Image', 'resort' ),

				),

				'public'                    => true,
				'publicly_queryable'        => true,
		        'show_ui'                   => true,
		        'show_in_menu'              => true,
	            'show_in_nav_menus'         => true,              
		        'query_var'                 => true,
		        'capability_type'           => 'post',
		        'has_archive'               => true,
		        'hierarchical'              => false,
		        'menu_position'             => null,
	            'menu_icon'                 => 'dashicons-image-rotate-right',
	            

		        'supports' => array(

		        	'title',
		        	'editor',
		        	'thumbnail',

		        ),


			) );

			// Custom Post For Slider Item
			register_post_type( 'slider-item' , array(

				'labels' => array(

					'name'                  => esc_html__( 'Sliders', 'resort' ), 
	                'singular_name'         => esc_html__( 'Slider', 'resort' ),
	                'menu_name'             => esc_html__( 'Slider', 'resort' ),
			        'name_admin_bar'        => esc_html__( 'Slider', 'resort' ),
			        'add_new'               => esc_html__( 'Add New Slider', 'resort' ),
			        'add_new_item'          => esc_html__( 'Add New Slider', 'resort' ),
			        'new_item'              => esc_html__( 'New Slider', 'resort' ),
			        'edit_item'             => esc_html__( 'Edit Slider', 'resort' ),
			        'view_item'             => esc_html__( 'View Slider', 'resort' ),
			        'all_items'             => esc_html__( 'All Sliders', 'resort' ),
			        'search_items'          => esc_html__( 'Search Slider', 'resort' ),
			        'not_found'             => esc_html__( 'No sliders were found!', 'resort' ),
			        'not_found_in_trash'    => esc_html__( 'No Slider was found in the trash!', 'resort' ),
			        'featured_image'        => __( 'Slider Image', 'resort' ),
			        'set_featured_image'    => __( 'Set Slider Image', 'resort' ),
			        'remove_featured_image' => __( 'Remove Slider Image', 'resort' ),
			        'use_featured_image'    => __( 'Use Slider Image', 'resort' ),

				),

				'public'                    => true,
				'publicly_queryable'        => true,
		        'show_ui'                   => true,
		        'show_in_menu'              => true,
	            'show_in_nav_menus'         => true,              
		        'query_var'                 => true,
		        'capability_type'           => 'post',
		        'has_archive'               => true,
		        'hierarchical'              => false,
		        'menu_position'             => null,
	            'menu_icon'                 => 'dashicons-smiley',
	            

		        'supports' => array(

		        	'title',
		        	'thumbnail',

		        ),


			) );



			// Custom Post For Welcome Note
			register_post_type( 'welcome-note' , array(

				'labels' => array(

					'name'                  => esc_html__( 'Welcome', 'resort' ), 
	                'singular_name'         => esc_html__( 'Welcome', 'resort' ),
	                'menu_name'             => esc_html__( 'Welcome', 'resort' ),
			        'name_admin_bar'        => esc_html__( 'Welcome', 'resort' ),
			        'add_new'               => esc_html__( 'Add New Welcome', 'resort' ),
			        'add_new_item'          => esc_html__( 'Add New Welcome', 'resort' ),
			        'new_item'              => esc_html__( 'New Welcome', 'resort' ),
			        'edit_item'             => esc_html__( 'Edit Welcome', 'resort' ),
			        'view_item'             => esc_html__( 'View Welcome', 'resort' ),
			        'all_items'             => esc_html__( 'All Welcome', 'resort' ),

				),


				'public'                    => true,
				'publicly_queryable'        => false,
		        'show_ui'                   => true,
		        'show_in_menu'              => true,
	            'show_in_nav_menus'         => true,              
		        'query_var'                 => true,
		        'capability_type'           => 'post',
		        'has_archive'               => false,
		        'hierarchical'              => false,
		        'menu_position'             => 5,
	            'menu_icon'                 => 'dashicons-admin-customizer',
	            

		        'supports' => array(

		        	'title',
		        	'editor',

		        ),


			) );


			// Custom Post For Testimonials
			register_post_type( 'testmonial-area' , array(

				'labels' => array(

					'name'                  => esc_html__( 'Testmonial', 'resort' ), 
	                'singular_name'         => esc_html__( 'Testmonial', 'resort' ),
	                'menu_name'             => esc_html__( 'Testmonial', 'resort' ),
			        'name_admin_bar'        => esc_html__( 'Testmonial', 'resort' ),
			        'add_new'               => esc_html__( 'Add New Testmonial', 'resort' ),
			        'add_new_item'          => esc_html__( 'Add New Testmonial', 'resort' ),
			        'new_item'              => esc_html__( 'New Testmonial', 'resort' ),
			        'edit_item'             => esc_html__( 'Edit Testmonial', 'resort' ),
			        'view_item'             => esc_html__( 'View Testmonial', 'resort' ),
			        'all_items'             => esc_html__( 'All Testmonials', 'resort' ),

				),


				'public'                    => true,
				'publicly_queryable'        => false,
		        'show_ui'                   => true,
		        'show_in_menu'              => true,
	            'show_in_nav_menus'         => true,              
		        'query_var'                 => true,
		        'capability_type'           => 'post',
		        'has_archive'               => false,
		        'hierarchical'              => false,
		        'menu_position'             => 5,
	            'menu_icon'                 => 'dashicons-format-chat',
	            

		        'supports' => array(

		        	'title',
		        	'editor',

		        ),


			) );



		}

	}