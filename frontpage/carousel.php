<!-- Start section main_carousel-->

<section id="main_carousel">
	
	<div class="container">

		<div class="row">
			
			<div id="main_slider" class="carousel slide" data-ride="carousel">

				<?php 

					$carousel = new WP_Query( array(

						'post_type'       => 'slider-item',
						'posts_per_page'  => 3,


					) );


				 ?>

				 <?php $i = 1; ?>
				
				<!-- Carousel Indicators -->

				<ol class="carousel-indicators hidden-xs">
					
					<li data-target="#main_slider" data-slide-to="0" class="active"></li>
					<li data-target="#main_slider" data-slide-to="1"></li>
					<li data-target="#main_slider" data-slide-to="2"></li>

				</ol>

				<!-- Wrapper For Carousel -->

				<div class="carousel-inner">

					<?php if ( have_posts() ) : ?>

						<?php while( $carousel -> have_posts() ) : $carousel -> the_post(); ?>
					
							<div class="item <?php if ( $i == 1 ) echo 'active' ?>">
								
								<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="..." class="img-responsive">
								
								<div class="caption hidden-xs">

									<?php the_title( '<h2 class="pull-right">' , '</h2>' ); ?>

								</div> <!-- End caption -->
								
							</div> <!-- End item -->
						
						<?php $i++; ?>

						<?php endwhile; ?>

						<?php wp_reset_query(); ?>

					<?php endif; ?>
					
				</div> <!-- End carousel-inner -->
				
				<!-- Left and Right Controls -->

				<a href="#main_slider" class="carousel-control left" data-slide="prev">
					
					<span class="icon-prev"></span>

				</a>

				<a href="#main_slider" class="carousel-control right" data-slide="next">
					
					<span class="icon-next"></span>

				</a>

			</div> <!-- End carousel -->
			
		</div> <!-- End row -->

	</div> <!-- End container -->

</section>
<!-- End section main_carousel-->