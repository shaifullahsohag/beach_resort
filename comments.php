<?php 
	
	// Prevent the direct loading of this file.
	if ( !empty( $_SERVER[ 'SCRIPT-FILENAME' ] ) && basename( $_SERVER[ 'SCRIPT-FILENAME' ] ) == 'comments.php' ) {

		die( __( 'You can\'t access this file.'  , 'resort' ) );

	}

	// Chech if post is password protected
	if ( post_password_required() ) : ?>

		<p>
			<?php _e( 'This post is password protected. Enter the password to view the comments.' , 'resort' ); ?>

			<?php return; ?>

		</p>

	<?php endif; 


	// 
	if ( have_comments() ) : ?>

		<a href="#respond" class="article_add_comments">+</a>

		<h3>

			<?php comments_number( 

				__( 'No comments to this article' , 'resort' ), 
				__( 'One comments to this article' , 'resort' ),
				 __( '% comments to this article' , 'resort' )

			); ?>

		</h3>

		<ol class="commentslist">
			
			<?php wp_list_comments( 'callback=resort_comments' ); ?>

		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

			<div class="comments_nav_section clearfix">
									
				<p class="pull-left">
					<a href="#"><?php previous_comments_link( '&larr; Older Comments ' , 'resort' ); ?></a>
				</p>

				<p class="pull-right">
					<a href="#"><?php next_comments_link( 'Newer Comments &rarr; ' , 'resort' ); ?></a>
				</p>
				
			</div> <!-- comments_nav_section -->

		<?php endif; ?>

	<?php elseif ( !comments_open() && !is_page() && post_type_supports( get_post_type() , 'comments' ) ) : ?>

		<p>
			<?php _e( 'Comments are closed!' , 'resort' ); ?>
		</p>

	<?php endif; 

	// Display Comment Form
	comment_form();



 ?>