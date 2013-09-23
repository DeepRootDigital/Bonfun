<?php get_header(); ?>
<?php $homepageoptions = get_option('sample_theme_options'); ?>
<div class="slider-area">
	<div class="slider">
		<ul>
			<?php if (!empty($homepageoptions['slide-1'])) { ?>
			<li>
				<h1>
					<img class="linefix" src="<?php echo get_template_directory_uri(); ?>/images/top-slide-line.png">
					<br>
					<?php echo $homepageoptions['slide-1']; ?>
					<img class="arrow-next" src="<?php echo get_template_directory_uri(); ?>/images/slider_arrow_default.png">
				</h1>
			</li>
			<?php } ?>
			<?php if (!empty($homepageoptions['slide-2'])) { ?>
			<li>
				<h1>
					<img class="linefix" src="<?php echo get_template_directory_uri(); ?>/images/top-slide-line.png">
					<br>
					<?php echo $homepageoptions['slide-2']; ?>
					<img class="arrow-next" src="<?php echo get_template_directory_uri(); ?>/images/slider_arrow_default.png">
				</h1>
			</li>
			<?php } ?>
			<?php if (!empty($homepageoptions['slide-3'])) { ?>
			<li>
				<h1>
					<img class="linefix" src="<?php echo get_template_directory_uri(); ?>/images/top-slide-line.png">
					<br>
					<?php echo $homepageoptions['slide-3']; ?>
					<img class="arrow-next" src="<?php echo get_template_directory_uri(); ?>/images/slider_arrow_default.png">
				</h1>
			</li>
			<?php } ?>
			<?php if (!empty($homepageoptions['slide-4'])) { ?>
			<li>
				<h1>
					<img class="linefix" src="<?php echo get_template_directory_uri(); ?>/images/top-slide-line.png">
					<br>
					<?php echo $homepageoptions['slide-4']; ?>
					<img class="arrow-next" src="<?php echo get_template_directory_uri(); ?>/images/slider_arrow_default.png">
				</h1>
			</li>
			<?php } ?>
			<?php if (!empty($homepageoptions['slide-5'])) { ?>
			<li>
				<h1>
					<img class="linefix" src="<?php echo get_template_directory_uri(); ?>/images/top-slide-line.png">
					<br>
					<?php echo $homepageoptions['slide-5']; ?>
					<img class="arrow-next" src="<?php echo get_template_directory_uri(); ?>/images/slider_arrow_default.png">
				</h1>
			</li>
			<?php } ?>
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
			<div class="carousel-label"><a href="http://clients.businessonmarketst.com/bonfun/?page_id=59">Find It</a></div>
			<div class="carousel">            
				<!-- All images with class of "cloudcarousel" will be turned into carousel items -->
				<!-- You can place links around these images -->
				<?php if (!empty($homepageoptions['carouselimage1'])) { ?>
				<img class="cloudcarousel" src="<?php echo $homepageoptions['carouselimage1'] ?>" />
				<?php } ?>
				<?php if (!empty($homepageoptions['carouselimage2'])) { ?>
				<img class="cloudcarousel" src="<?php echo $homepageoptions['carouselimage2'] ?>" />
				<?php } ?>
				<?php if (!empty($homepageoptions['carouselimage3'])) { ?>
				<img class="cloudcarousel" src="<?php echo $homepageoptions['carouselimage3'] ?>" />
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<div class="process-area false">
	<img class="process-button" src="<?php echo get_template_directory_uri(); ?>/images/process-button.png">
<img class="process-navigation-left" src="<?php echo get_template_directory_uri(); ?>/images/process-nav-left.png" />
<img class="process-navigation-right" src="<?php echo get_template_directory_uri(); ?>/images/process-nav-right.png" />
</div>
<?php get_template_part('process','area'); ?>
<?php get_template_part('grid','area'); ?>
<?php get_footer(); ?>