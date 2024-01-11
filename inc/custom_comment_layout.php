<?php 


	/* ===================================================
	   Function to Display Custom Comments
	   =================================================== */
	function resort_comments( $comment , $args, $depth ) {

		$GLOBALS[ 'comment' ] = $comment;

		if ( get_comment_type() == 'pinkback' || get_comment_type() == 'trackback' ) : ?>

			<li class="pinkback" id="comment-<?php comment_ID(); ?>" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">

				<article <?php comment_class( 'clearfix' ); ?>>

					<header>

						<h5>
							<?php _e( 'pinkback' , 'resort' ); ?>
						</h5>

						<p>
							<?php edit_comment_link(); ?>
						</p>

					</header>
					
					<p>
						<?php comment_author_link(); ?>
					</p>
					

				</article>

			</li>

		<?php elseif ( get_comment_type() == 'comment' ) : ?>

			<li id="comment-<?php comment_ID(); ?>" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">

				<article <?php comment_class( 'clearfix' ); ?>>

					<header>

						<h5>
							<?php comment_author_link(); ?>
						</h5>

						<p>

							<span>on <?php comment_date(); ?> at <?php comment_time(); ?> - </span> 

							<?php comment_reply_link( array_merge( $args , array( 

									'depth'     => $depth,
									'max_depth' => $args[ 'max_depth' ],

							) )); ?>

						</p>

					</header>
					
					<figure class="comment_avatar">

						<?php 

							$avatar_size = 80;

							if ( $comment -> comment_parent != 0 ) {

								$avatar_size = 64;

							}

							echo get_avatar( $comment , $avatar_size );

						 ?>

					</figure>

					<?php if ( $comment -> comment_approved == '0' ) : ?>

						<p class="awaiting_moderation">
							<?php _e( 'Your comment is awaiting for moderation' , 'resort' ); ?>
						</p>

					<?php endif; ?>

					<?php comment_text(); ?>

				</article>

			

		<?php endif; 
	}