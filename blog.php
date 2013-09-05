<?php
/*
Template Name: Blog Page
*/
?>
<?php get_header(); ?>
<div class="page-header">
	<div class="container">
		<h2>Cognac is our passion</h2>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/images/aboutus-topbanner.png">
</div>
<div class="container">
	<div class="blog-col">
		<?php
		$featuredPosts = new WP_Query();
		$featuredPosts->query(array('post_type' => 'post'));
		while ($featuredPosts->have_posts()) : $featuredPosts->the_post();
		?>
		<div class="blog-post">
			<h2>
				<?php the_title(); ?>
			</h2>
			<div class="post-meta">
				BY <?php the_author(); ?> | <?php the_date(); ?>
			</div>
			<img class="divider" src="<?php echo get_template_directory_uri(); ?>/images/blog-title-divider.png">
			<div class="featured-image">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				} 
				?>
			</div>
			<div class="post-content">
				<?php the_excerpt(); ?>
			</div>
			<img class="go-button" src="<?php echo get_template_directory_uri(); ?>/images/go-button.png">
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/blog-post-divider.png">
	<?php endwhile; ?>
</div>
<div class="sidebar-col">
	<?php get_sidebar('page'); ?>
</div>
</div>
<?php get_footer(); ?>