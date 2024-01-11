<?php get_header(); // Load header.php File?>
		
	<!-- Start section rooms_wrapper-->
	<section id="rooms_wrapper">
		
		<div class="container">
	
			<div class="row">
				
				<div class="rooms_wrapper">
					
					<h1>
						<?php wp_title( '' ); ?>
					</h1>

					<?php if ( have_posts() ) : ?>

						<?php while( have_posts() ) : the_post(); ?>

							<div class="single_room_wrapper overflow_hidden" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
								
								<div class="single_room_wrapper_left overflow_hidden col-sm-6">
									
									<?php if ( has_post_thumbnail() ) : ?>
										
										<?php the_post_thumbnail(); ?>
										
									<?php endif; ?>

								</div> <!-- End single_room_wrapper_left -->
								
								<div class="single_room_wrapper_right overflow_hidden col-sm-6">

									<?php the_content(); ?>

								</div> <!-- End single_room_wrapper_right -->
								
							</div> <!-- End single_room_wrapper -->

						<?php endwhile; ?>

					<?php endif; ?>
					
				</div> <!-- End rooms_wrapper -->
				
			</div> <!-- End row -->
	
		</div> <!-- End container -->
	
	</section>
	<!-- End section rooms_wrapper-->
	
<?php get_footer(); // Load footer.php File ?>