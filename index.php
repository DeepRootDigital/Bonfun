<?php get_header(); ?>
<div class="slider-area">
	<div class="slider">
		<ul>
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png">
				<h1>Wine<span>Infused</span><span>
					<br />Cognac</span></h1>
					<div class="slider-bottom-line"></div>
				</li>
			</ul>
			<div class="mobile-main-panel">
				<div class="flag-horizontal">
				</div>
				<div class="mobile-wine-images">
					<img src="<?php echo get_template_directory_uri(); ?>/images/purple-wine-shadow.png" />
					<img src="<?php echo get_template_directory_uri(); ?>/images/red-wine-shadow.png" />
					<img src="<?php echo get_template_directory_uri(); ?>/images/white-wine-shadow.png" />
				</div>
			</div>
			<div class="flag">
				<div class="carousel">            
					<!-- All images with class of "cloudcarousel" will be turned into carousel items -->
					<!-- You can place links around these images -->
					<img class="cloudcarousel" src="<?php echo get_template_directory_uri(); ?>/images/red-wine.png" />
					<img class="cloudcarousel" src="<?php echo get_template_directory_uri(); ?>/images/purple-wine.png"/>
					<img class="cloudcarousel" src="<?php echo get_template_directory_uri(); ?>/images/white-wine.png" />
				</div>
			</div>
		</div>
	</div>
	<div class="process-area">
		<img class="process-button" src="<?php echo get_template_directory_uri(); ?>/images/process-button.png">
	</div>
	<?php get_template_part('process','area'); ?>
	<?php get_template_part('grid','area'); ?>
	<?php get_footer(); ?>