<!-- Start section welcome_wrapper-->
<section id="welcome_wrapper">
	
	<div class="container">

		<div class="row">

			<?php 

				$welcome = new wp_Query( array(

					'post_type'       => 'welcome-note',
					'posts_per_page'  => 1,

				) );

			 ?>

			<?php if ( have_posts() ) : ?>

				<?php while( $welcome -> have_posts() ) : $welcome -> the_post(); ?>
			
					<div class="welcome" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
						
						<article>

							<?php the_title( '<h2>' , '</h2>' ); ?>

							<?php the_content(); ?>

						</article>

					</div> <!-- End welcome -->

				<?php endwhile; ?>

			<?php endif; ?>
			
		</div> <!-- End row -->

	</div> <!-- End container -->

</section>
<!-- End section welcome_wrapper-->