<?php get_header(); ?>
<div class="product-page">
	<div class="page-header single-product">
		<div class="page-header-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/product-banner.png');">
			</div>
		<div class="container">
			<div class="product-typeset">     
				<h2>
<img class="top-line" src="http://clients.businessonmarketst.com/bonfun/wp-content/themes/Bonfun/images/top-slide-line.png"><br /><?php the_title(); ?><br /><img class="bottom-line" src="http://clients.businessonmarketst.com/bonfun/wp-content/themes/Bonfun/images/bottom-slide-line.png">
</h2>
			</div>
			<div class="flag">
                                <div class="wine-shadow wine-single"></div>
				<?php autoc_get_img('wineimage'); ?>
			</div>
			<div class="mobile-product-panel">
				<div class="flag-horizontal">
				</div>
				<?php autoc_get_img('wineimage'); ?>

			</div>	
		</div>
		<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/product-banner.png"> -->
	</div>
	<div class="container">
		<div class="content-wrap">
			<div class="content-col">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="product-content">
						<h3><?php echo get_post_meta(get_the_ID(), 'products_toptexttitle', true) ?></h3>
						<div>
							<div class="product-excerpt">
								<?php echo get_post_meta(get_the_ID(), 'products_toptext', true) ?>
							</div>
							<!-- <img class="pair-button" src="<?php echo get_template_directory_uri(); ?>/images/pairings-button.png"> -->
						</div>
                                                <h3><?php echo get_post_meta(get_the_ID(), 'products_secondtexttitle', true) ?></h3>
						<div>
							<div class="product-excerpt">
								<?php echo get_post_meta(get_the_ID(), 'products_secondtext', true) ?>
							</div>
						</div>
					</div>
					<div class="pair-content">
						<h2>
							<?php the_title(); ?> Food Pairings
						</h2>
						<img class="divider" src="<?php echo get_template_directory_uri(); ?>/images/blog-title-divider.png">
						<?php the_content(); ?>
					<?php endwhile; 
					endif; ?>
				</div>
			</div>
			<div class="sidebar-col">
				<?php get_sidebar('page'); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>