<?php get_header(); // Load header.php File?>
		
	<!-- Start section news_wrapper-->
	<section id="news_wrapper">
		
		<div class="container">
	
			<div class="row">
				
				<div class="news_wrapper overflow_hidden">
					
					<h1>
						<?php wp_title( '' ); ?>
					</h1>

					<div class="single_blog_post overflow_hidden col-sm-8">

						<?php if ( have_posts() ) : ?>

							<?php while ( have_posts() ) : the_post(); ?>
						
								<div class="unique_blog_post overflow_hidden" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">

									<?php if ( has_post_thumbnail() ) : ?>

										<?php the_post_thumbnail( 'blog-img' , array(

											'class' => 'img-responsive img-thumbnail',

										) ); ?>

									<?php endif; ?>

									<?php the_title( '<h2>' , '</h2>' ); ?>

									<div class="single_blog_meta_info overflow_hidden">
										
										<p class="date">
											<?php the_time( 'F j, Y' ); ?>
										</p>

										<p class="author">
											by: <a href=""><?php the_author_posts_link(); ?></a> 
										</p>

									</div> <!-- End single_blog_meta_info -->
									
									<?php the_content(); ?>

								<?php endwhile; else: ?>

									<h1><?php _e( 'Sorry, no posts were found!' , 'resort' ) ?></h1>

							<?php endif; ?>

							<hr>

							<div class="article_author overflow_hidden" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
								
								<h5>
									Author by : <?php the_author_posts_link(); ?>
								</h5>

								<?php the_author_meta( 'description' ); ?>

							</div> <!-- article_author -->

							<div class="comments_area" id="comments">

								<?php comments_template( '' , true ); ?>

							</div> <!-- End comments-area -->

					</div> <!-- End single_blog_post -->

				</div> <!-- End news_wrapper -->

				<?php get_sidebar(); // Load sidebar.php File ?>
				
			</div> <!-- End row -->
	
		</div> <!-- End container -->
	
	</section>
	<!-- End section news_wrapper-->
	
<?php get_footer(); // Load footer.php File ?>





























