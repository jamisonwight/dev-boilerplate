<?php
	// Adjust the breakpoint of the title-bar by adjusting this variable
	$breakpoint = "medium";
	$backgroundClass;
	$logo; 

	if (is_page('Homepage') || is_page('Arctic Berry') || is_page('Privacy Policy') || is_page('Terms of Service') || is_page('Contact')):
		$backgroundClass = 'header-blue';
		$logo = 'blue';
	elseif (is_page('Orange Flame')):
		$backgroundClass = 'header-orange';
		$logo = 'orange';
	elseif (is_page('Pineapple Blast')):
		$backgroundClass = 'header-yellow';
		$logo = 'yellow';
	elseif (is_page('Citrus Storm')):
		$backgroundClass = 'header-green';
		$logo = 'green';
	endif; 
?>

<div class="title-bar <?php echo $backgroundClass; ?>" data-responsive-toggle="example-animated-menu" data-hide-for="">
	<a href="<?php echo BASE_PATH; ?>">
		
	</a>
    <div class="md-menu" data-toggle></div>
</div>

<div class="top-bar" id="example-animated-menu" data-closable="slide-out-right fast" data-animate="slide-in-right fast slide-out-right fast">
	<div class="md-asset-container">

	</div>
		<?php 
			wp_nav_menu( array( 
				'menu'            => 'Header',
				'container_class' => 'top-bar-left',
				'items_wrap'      => '<ul class="dropdown menu vertical align-center" data-dropdown-menu>%3$s<li><a href="#"><i id="fb" class="fb"></i></a><a href="#"><i id="insta" class="insta"></i></a></li></ul>',
			)); 
		?>
</div>