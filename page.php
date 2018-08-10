<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all the pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main cell" role="main">
				
				<article id="slide01" class="slide fs">
					<div class="wrapper">
						<header>
							<h1 class="slideInUp">Scrolling Departika!</h1>
						</header>
						<section>
							<h2 class="slideInUp">Foundation with Wordpress?</h2>
							<p class="slideInUp">Yes and Scroll Magic doing the magic</p>
						</section>
					</div> <!-- .wrapper -->
				</article>

				<article id="slide02" class="slide fs">
					<div class="wrapper">
						<header>
							<h1 class="slideInUp">Departika Sass!</h1>
						</header>
						<section>
							<h2 class="slideInUp">CSS functions, mixins, variables WHAT??</h2>
							<p class="slideInUp">I love my life now!</p>
						</section>
					</div> <!-- .wrapper -->
				</article>

				<article id="slide03" class="slide is-light fs">
					<div class="wrapper">
						<header>
							<h1 class="slideInUp">JS plugins with Node and writing ES6+ Javascript???</h1>
						</header>
						<section>
							<h2 class="slideInUp">Yes, it's true. </h2>
							<p class="slideInUp">This is a bit too much excitement to handle all at once, right?</p>
						</section>
					</div> <!-- .wrapper -->
				</article>
				<article id="slide04" class="slide is-light fs">
					<div class="wrapper">
						<header>
							<h1 class="slideInUp">Oh! Dont forget Fancybox!</h1>
						</header>
						<section>
							<a data-fancybox href="https://vimeo.com/191947042">
								<img class="slideInUp" src="https://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg" width="800">
							</a>
						</section>
					</div> <!-- .wrapper -->
				</article>
				<article id="popmotionAnimation">
					<div class="wrapper padding">
						<header id="popMe" class="text-center padding-small">
							<h1>TRY POPMOTION!</h1>
							<h3>Drag the heads to make a beautiful portrait</h3>
						</header>
						<section class="row">
							<div class="trumpContainer">
								<div id="trump1" class="trumpy head columns medium-4">
									<img class="columns small-8 large-offset-2" src="<?php echo IMG_PATH; ?>/trump1.png" alt="trump1">
								</div>
								<div id="trump2" class="trumpy head columns medium-4">
									<img class="columns small-8 large-offset-2" src="<?php echo IMG_PATH; ?>/trump2.png" alt="trump2">
								</div>
								<div id="trump3" class="trumpy head columns medium-4">
									<img class="columns small-8 large-offset-2" src="<?php echo IMG_PATH; ?>/trump3.png" alt="trump3">
								</div>
							</div>
							<div class="body columns medium-4">
								<img src="<?php echo IMG_PATH; ?>/body.png" alt="">
							</div>
							<div class="body columns medium-4">
								<img src="<?php echo IMG_PATH; ?>/body2.jpg" alt="">
							</div>
							<div class="body columns medium-4">
								<img src="<?php echo IMG_PATH; ?>/body3.jpg" alt="">
							</div>
						</section>
					</div> <!-- .wrapper -->
				</article>
				
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>