<?php 


   /* ===================================================
   Custom Comment Form 
   =================================================== */


   // Customized the comment form fields ( not the comment text area )
   function beach_resort_custom_form ( $defaults ) {

   		$defaults[ 'comment_notes_before' ] = '';
   		$defaults[ 'id_form' ] = 'comment_form';
   		$defaults['title_reply'] = __( 'Post a new comment','resort' );
   		$defaults[ 'comment_field' ] = '<p><textarea name="comment" id="comment" cols="30" rows="10"></textarea></p>';

   		return $defaults;

   }
   add_filter( 'comment_form_defaults' , 'beach_resort_custom_form' );

   function beach_resort_comment_form () {

   		$commenter = wp_get_current_commenter();
   		$req = get_option( 'require_name_email' );
   		$aria_req = ( $req ? "aria-required='true'" : ' ' );

   		$fields = array(

   			'author' => '<p>' . 
					'<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" ' . $aria_req . ' />' .
					'<label for="author">' . __('Name', 'resort') . '' . ($req ? __(' (required)', 'resort') : '') . '</label>' .
	            '</p>',

			'email' => '<p>' . 
					'<input id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" ' . $aria_req . ' />' .
					'<label for="email">' . __('Email', 'resort') . '' . ($req ? __(' (required)', 'resort') : '') . '</label>' .
	            '</p>',

			'url' => '<p>' . 
					'<input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" />' .
					'<label for="url">' . __('Website', 'resort') . '</label>' .
	            '</p>'

   		);

   		return $fields;
   }
   add_filter( 'comment_form_default_fields' , 'beach_resort_comment_form' );