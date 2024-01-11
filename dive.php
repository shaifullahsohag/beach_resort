<?php 

	/*
		Template Name: Dive page
	*/ 

 ?>



<?php get_header(); // Load header.php File?>
			
	<!-- Start section dive_wrapper-->
	<section id="dive_wrapper">
		
		<div class="container">
	
			<div class="row">
				
				<div class="dive_wrapper overflow_hidden">
					
					<h1>
						<?php wp_title( '' ); ?>
					</h1>

					<?php 

						$dives = new WP_Query( array(

							'post_type'       => 'dive-details',
							'posts_per_page'  => 3,

						) );

					 ?>

					<?php if ( have_posts() ) : ?>

						<?php while( $dives -> have_posts() ) : $dives -> the_post(); ?>

							<div class="single_dive_wrapper overflow_hidden" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
								
								<div class="single_dive_wrapper_left overflow_hidden col-sm-6">
									
									<article>

										<?php the_title( '<h2>' , '</h2>' ); ?>

										<?php the_content(); ?>

									</article>

								</div> <!-- End single_dive_wrapper_left -->
								
								<div class="single_dive_wrapper_right overflow_hidden col-sm-6">
									
									<?php if ( has_post_thumbnail() ) : ?>

										<?php the_post_thumbnail(); ?>

									<?php endif; ?>

								</div> <!-- End single_dive_wrapper_right -->
								
							</div> <!-- End single_dive_wrapper -->

						<?php endwhile; ?>

						<?php wp_reset_query(); ?>

					<?php endif; ?>

				</div> <!-- End dive_wrapper -->
				
			</div> <!-- End row -->
	
		</div> <!-- End container -->
	
	</section>
	<!-- End section dive_wrapper-->
	
<?php get_footer(); // Load footer.php File ?>





























