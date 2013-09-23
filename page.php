<?php get_header(); ?>
<div class="page-header aboutus-page blogsummary">
	<div class="container">
		<h2><?php the_title(); ?></h2>
	</div>
	<div class="page-header-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/aboutus-topbanner.png');">
	</div>
</div>
<div class="container">
	<div class="content-col">
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