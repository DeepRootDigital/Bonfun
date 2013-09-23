<?php
/*
Template Name: Product Summary Page
*/
?>
<?php get_header(); ?>
<div class="page-header productsummary">
	<div class="container">
		<h2 style="margin-top:0px;"><img class="top-line" src="<?php echo get_template_directory_uri(); ?>/images/top-slide-line.png"><br />Cognac<br /><span>With natural flavor</span><br /><img class="bottom-line" src="<?php echo get_template_directory_uri(); ?>/images/bottom-slide-line.png"></h2>
	</div>
	<div class="page-header-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/slide1.png');">
	</div>
</div>
<div class="product-summary-slider">
	<div class="product-slide-left">
	</div>
	<div class="product-slide-right">
	</div>
	<div class="product-summary-slider-viewport">
		<div class="product-summary-slider-strip">
			<?php
				$sliderPosts = new WP_Query();
				$sliderPosts->query(array('post_type' => 'products'));
				while ($sliderPosts->have_posts()) : $sliderPosts->the_post();
				?>
			<div class="product-summary-slider-individual">
                                <div class="wine-shadow"></div>
				<a href="<?php the_permalink(); ?>"><?php autoc_get_img('wineimage'); ?></a>
				<div class="product-summary-line" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/product-summary-line.png')"></div>
				<h4><?php the_title(); ?></h4>
				<h5><a href="<?php the_permalink(); ?>"><span>&raquo;</span> Learn More</a></h5>			
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<div class="container">
<div class="fullwidth-col">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>