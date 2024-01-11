<?php get_header(); // Load header.php File?>
		
	<!-- Start section news_wrapper-->
	<section id="news_wrapper">
		
		<div class="container">
	
			<div class="row">
				
				<div class="news_wrapper overflow_hidden">
					
					<?php the_archive_title( '<h1>' , '</h1>' ); ?>

					<div class="single_blog_post overflow_hidden col-sm-8">

						<?php if ( have_posts() ) : ?>

							<?php while ( have_posts() ) : the_post(); ?>
						
								<div class="unique_blog_post overflow_hidden" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">

									<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

										<?php the_title( '<h2>' , '</h2>' ); ?>
										
										<p>
											<?php custom_excerpt_length( 30 ); ?>
										</p>

										<p class="read_more">
											<a href="<?php the_permalink(); ?>">Continue Reading &raquo;</a>
										</p>

									</article>

								</div> <!-- End unique_blog_post -->

							<?php endwhile; else: ?>

								<h1><?php _e( 'Sorry, no posts were found!' , 'resort' ) ?></h1>

						<?php endif; ?>

						<div class="articles_nav">
								
							<p class="articles_nav_prev">
								<?php next_posts_link(__( '&laquo; Older Posts' , 'resort' ) ); ?>
							</p>

							<p class="articles_nav_next">
								<?php previous_posts_link( __( 'Newer Posts &raquo;' , 'resort' ) ); ?>
							</p>

						</div> <!-- End articles_nav -->

					</div> <!-- End single_blog_post -->
					
					<?php get_sidebar(); // Load sidebar.php File ?>

				</div> <!-- End news_wrapper -->
				
			</div> <!-- End row -->
	
		</div> <!-- End container -->
	
	</section>
	<!-- End section news_wrapper-->
	
<?php get_footer(); // Load footer.php File ?>





























