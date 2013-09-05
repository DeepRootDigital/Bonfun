<?php get_header(); ?>
<div class="page-header">
	<div class="container">
		<h2>Cognac is our passion</h2>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/images/aboutus-topbanner.png">
</div>
<div class="container">
	<div class="content-col">
		<h1><?php the_title(); ?></h1>
		<img class="divider" src="<?php echo get_template_directory_uri(); ?>/images/about-divider.png">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; 
		endif; ?>
	</div>
	<div class="sidebar-col">
		<?php get_sidebar('page'); ?>
	</div>
</div>
<?php get_footer(); ?>