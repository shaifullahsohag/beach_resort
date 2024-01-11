<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- Designed by: Md: Shifulla Sohag -->
<head>
	<!-- Website Title & Description for Search Engine purposes -->
	<title><?php wp_title( '|' , true , 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<!-- For IE Compatability -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Mobile viewport optimized -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Fevicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sohag.ico">

	<!-- For  Pink back -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- For meta data profile --> 
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<?php wp_head(); //WP API HOOK ?>
	
</head>

<body <?php body_class(); ?>>

	<!--[if lt IE 8]>
        <p class="browser_upgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	
	<div class="background">

		<!-- Start site header site_header -->
		<header id="site_header">
		
			<div class="container">
				
				<div class="row">
					
					<div class="logo" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
						
						<a href="<?php echo esc_url( home_url() ); ?>">	
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="Beach resort" class="img-responsive" />
						</a>

					</div> <!-- End logo -->
					
					<div class="main_menu">
						
						<nav class="navbar">
							
							<div class="navbar-header">
								
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_navigation" aria-expanded="false">

									<span class="sr-only"><?php _e( 'Toggle navigation' , 'resort' ); ?></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>

								</button>

							</div> <!-- End navbar-header -->
							
							<div class="collapse navbar-collapse" id="main_navigation">
								
								<?php 

									if ( function_exists( 'wp_nav_menu' ) ) {

										wp_nav_menu( array(

											'conatiner'       => 'nav',
											'menu_class'      => 'nav navbar-nav',
											'theme_location'  => 'top-menu',

										) );

									}

								 ?>

							</div> <!-- End collapse -->
							
						</nav>

					</div> <!-- End main_menu -->
					
				</div> <!-- End row -->
		
			</div> <!-- End container -->
		
		</header>
		<!-- End site header site_header -->