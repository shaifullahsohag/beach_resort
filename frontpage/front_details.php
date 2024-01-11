		
<!-- Start section latest_blog_and_testimonial-
================================================= -->

<section id="latest_blog_and_testimonial">
	
	<div class="container">

		<div class="row">
			
			<div class="col-sm-8">
				
				<div class="latest_blog">
					
					<h2>
						Latest Blog
					</h2>

					<?php 

						$latest_blog = new WP_Query( array(

							'post_type'       => 'post',
							'posts_per_page'  => 2,

						) );

					 ?>

					<?php if ( have_posts() ) : ?>

						<?php while( $latest_blog -> have_posts() ) : $latest_blog -> the_post();  ?>

							<div class="single_lates_blog overflow_hidden" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">

								<article>

									<?php the_title( '<h3>' , '</h3>' ); ?>

									<p class="date_latest">
										<?php the_time( 'F j, Y' ); ?>
									</p>

									<p>
										<?php custom_excerpt_length( 30 ); ?>
									</p>

								</article>

							</div> <!-- End single_lates_blog -->

						<?php endwhile; ?>

						<?php wp_reset_query(); ?>

					<?php endif; ?>
					
				</div> <!-- End latest_blog -->
				
				<div class="testimonial overflow_hidden" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">

					<?php 

						$testimonial = new WP_Query( array(

							'post_type'       => 'testmonial-area',
							'posts_per_page'  => 1,

						) );

					 ?>
					
					<?php if ( have_posts() ) : ?>

						<?php while ( $testimonial -> have_posts() ) : $testimonial -> the_post(); ?>

							<?php the_title( '<h2>' , '</h2>' ); ?>

							<?php the_content(); ?>

						<?php endwhile; ?>

						<?php wp_reset_query(); ?>

					<?php endif; ?>

				</div> <!-- End testimonial -->
				
			</div> <!-- End col-sm-8 -->
			
			<div class="col-sm-4">
				
				<aside>
					
					<div class="single_aside overflow_hidden" id="single_first_aside" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
						
						<a href="http://localhost/beachresort/rooms/">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/single_aside_img_01.png" class="img-responsive" alt="Single Image" />
						</a>

						<span class="title pull-right hidden-sm hidden-xs">Rooms</span>

					</div> <!-- End single_aside -->
					
					<div class="single_aside overflow_hidden" id="single_second_aside" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
						
						<a href="http://localhost/beachresort/dive-site/">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/single_aside_img_02.png" class="img-responsive" alt="Single Image" />
						</a>

						<span class="title pull-right hidden-sm hidden-xs">Dive</span>

					</div> <!-- End single_aside -->
					
					<div class="single_aside overflow_hidden" id="single_third_aside" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
						
						<a href="http://localhost/beachresort/food/">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/single_aside_img_03.png" class="img-responsive" alt="Single Image" />
						</a>

						<span class="title pull-right hidden-sm hidden-xs">Food</span>

					</div> <!-- End single_aside -->
					
				</aside>

			</div> <!-- End col-sm-4 -->
			
		</div> <!-- End row -->

	</div> <!-- End container -->

</section>
<!-- End section latest_blog_and_testimonial-->