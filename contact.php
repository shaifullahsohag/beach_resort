<?php 

	/*
		Template Name: Contact Page
	*/ 

 ?>



<?php get_header(); // Load header.php File?>
		
	<!-- Start section contact_us_wrapper-->
	<section id="contact_us_wrapper">
		
		<div class="container">
	
			<div class="row">
				
				<div class="contact_us_wrapper overflow_hidden" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
					
					<h1>
						<?php wp_title( '' ); ?>
					</h1>
					
					<?php if ( is_active_sidebar( 'contact-left-sidebar' ) ) : ?>
						
						<?php dynamic_sidebar( 'contact-left-sidebar' ); ?>

					<?php endif; ?>

					<div class="site_contact_form overflow_hidden col-sm-8">

						<?php if ( have_posts() ) : ?>

							<?php while( have_posts() ) : the_post(); ?>
						
								<?php the_content(); ?>

							<?php endwhile; ?>

						<?php endif; ?>

					</div> <!-- End site_contact_form -->
					
				</div> <!-- End contact_us_wrapper -->
				
			</div> <!-- End row -->
	
		</div> <!-- End container -->
	
	</section>
	<!-- End section contact_us_wrapper-->
	
<?php get_footer(); // Load footer.php File ?>





























