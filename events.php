<?php
/*
Template Name: Events Page
*/
?>
<?php get_header(); ?>
<div class="page-header eventspage">
	<div class="container eventspage">
		<div class="blog-slider">
			<div class="slideWrap">
			<?php if ( dynamic_sidebar('slider_events') ) : else : endif; ?>	
		        </div>
	       </div>
	       <div class="page-header-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/aboutus-topbanner.png');">
	       </div>
        </div>
</div>
<div class="container eventspage">
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