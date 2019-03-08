<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

		<!-- If Site Icon isn't set in customizer -->
<!--
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
	
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>
-->

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Karla|Source+Serif+Pro:400,600,700" rel="stylesheet">

		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>


		<div class="off-canvas-wrapper">
			
			<!-- Load off-canvas container. Feel free to remove if not using. -->			
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<header class="header grid-container full" role="banner">
							
					<div class="grid-x">
					
						<div class="cell medium-6 logo">
							<div class="content">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo Icon">
								<span>William Cover<br> Architecture</span>
							</div>
						</div>

						<div class="cell medium-6 menu">
							<a href="<?php echo bloginfo('url'); ?>/about">About</a>
							<a href="<?php echo bloginfo('url'); ?>/contact">Contact</a>
						</div>

					</div>
	 	
				</header> <!-- end .header -->