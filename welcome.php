<?php 
	
	/*
		Template Name: Welcome Template
	*/ 

 ?>


<?php get_header(); // Load header.php file ?>
			
	<?php get_template_part( 'frontpage/carousel' ); // Load carousel.php File ?>

	</div> <!-- End background -->

	<?php get_template_part( 'frontpage/welcoming' ); // Load welcoming.php File ?>
			
	<?php get_template_part( 'frontpage/front_details' ); // Load front_details.php File ?>

<?php get_footer(); // Load footer.php file ?>




























