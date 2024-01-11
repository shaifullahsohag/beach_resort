<aside class="col-sm-4">

	<div class="sidebar overflow_hidden" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
		
		<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
			
			<?php dynamic_sidebar( 'right-sidebar' ); ?>

		<?php endif; ?>
		
	</div> <!-- End sidebar -->
	
</aside>