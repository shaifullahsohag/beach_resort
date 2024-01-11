	<!-- Start footer_top -->
	<section id="footer_top">
	
		<div class="container">
			
			<div class="row">
				
				<div class="footer_top overflow_hidden" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
					
					<div class="col-sm-8">
						
						<div class="footer_menu overflow_hidden hidden-xs">
							
							<?php 

								if ( function_exists( 'wp_nav_menu' ) ) {

									wp_nav_menu( array(

										'container'       => 'nav',
										'container_class' => 'navbar',
										'container_id'    => 'footer_navigation',
										'menu_class'      => 'nav navbar-nav',
										'theme_location'  => 'footer-menu',

									) );
								}

							 ?>
							 
						</div> <!-- End footer_menu -->
						
					</div> <!-- End col-sm-8 -->
					
					<?php if ( is_active_sidebar( 'footer-right-sidebar' ) ) : ?>

						<?php dynamic_sidebar( 'footer-right-sidebar' ); ?>

					<?php endif; ?>
						
				</div> <!-- End footer_top -->

			</div> <!-- End row -->
	
		</div> <!-- End container -->
	
	</section>
	<!-- End footer_top -->


	
	<!-- Start site footer site_footer -->
	<footer id="site_footer">
	
		<div class="container">
			
			<div class="row">
				
				<div class="copyright_info">

					<p class="text-center">
						<span id="scroll_top" data-toggle="tooltip" title="To Top" class="glyphicon glyphicon-chevron-up"></span>
					</p>
					
					<h6 class="text-center">
						&#160; Developed by &#169; <?php the_author(); ?>. All rights reserved | <?php echo date( 'Y' ); ?>
					</h6>

				</div> <!-- End copyright_info -->
				
			</div> <!-- End row -->
	
		</div> <!-- End container -->
	
	</footer>
	<!-- End site footer site_footer -->
	
	<?php wp_footer(); //WP API HOOK ?>

</body>
</html>
