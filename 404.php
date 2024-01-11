<?php get_header(); // Load header.php File?>
		
	<!-- Start section news_wrapper-->
	<section id="news_wrapper">
		
		<div class="container">
	
			<div class="row">
				
				<div class="news_wrapper overflow_hidden">
					
					<h1>
						<?php _e( '404 Error, Not Found!' , 'resort' ); ?>
					</h1>

					<div class="single_blog_post overflow_hidden col-sm-8">

						<p>
							<?php _e( 'Sorry, the content you\'re trying to reach doesn\'t exist! Please search with the right keywords.' , 'resort' ); ?>
						</p>

						<form action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" id="search-form" method="get">
											
							<div class="form-group">
								
								<input type="text" value="<?php get_search_query(); ?>" name ="s" id="s" class="blog_search form-control" placeholder="<?php the_search_query(); ?>">
								<input type="hidden" value="submit">

							</div> <!-- End form-group -->
							
						</form>

						<p class="eroor">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Or, Back To The Homepage!</a>
						</p>

					</div> <!-- End single_blog_post -->

				</div> <!-- End news_wrapper -->
				
			</div> <!-- End row -->
	
		</div> <!-- End container -->
	
	</section>
	<!-- End section news_wrapper-->
	
<?php get_footer(); // Load footer.php File ?>





























