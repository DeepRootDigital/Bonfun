<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
<div class="page-header blogsummary">
	<div id="google-map"></div>
</div>
<div class="container">
	<div class="content-col">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h2>
			<?php the_title(); ?>
		</h2>
		<img class="divider" src="<?php echo get_template_directory_uri(); ?>/images/blog-title-divider.png">
		<p class="contact-b">We would love to hear from you, so leave us a message and we will be in touch.</p>
		<form method="POST" action="<?php echo get_template_directory_uri(); ?>/mailformprocess.php">
			<input placeholder="Name" name="name" type="text" required>
			<input placeholder="Email" name="email" type="text" required>
			<textarea name="message" placeholder="Message" required></textarea>
			<input class="c-button-right" type="image" src="<?php echo get_template_directory_uri(); ?>/images/submit.png">
		</form>
		<?php endwhile; 
		endif; ?>
	</div>
	<div class="sidebar-col">
		<?php get_sidebar('contact'); ?>
	</div>
</div>
<?php get_footer(); ?>