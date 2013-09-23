<?php
/*
Template Name: Social Hub Page
*/
?>
<?php get_header(); ?>
<div class="page-header socialhub">
	<div class="container">
		<h2 style="margin-top:-12px;">
<img class="top-line" src="<?php echo get_template_directory_uri(); ?>/images/top-slide-line.png"><br/>
<span style="color:#f38400; font-size:43px;letter-spacing:8px;">Join</span><span style="font-size:43px;letter-spacing:8px;"> our</span> <span style="font-family:'Avenir LT W01 95 Black'; font-size:60px;">Circle</span> of <span style="font-family:'Avenir LT W01 95 Black'; font-size:60px;">Fun</span>
<br/>
<img class="bottom-line" src="<?php echo get_template_directory_uri(); ?>/images/bottom-slide-line.png" />
</h2>
<img class="enter-button circle-of-fun" src="<?php echo get_template_directory_uri(); ?>/images/enter-button.png" />
	</div>

	<div class="page-header-image" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/circle-of-fun-bg.png');">
	</div>
	<div class="social-hub-slider">
              <div class="social-hub-slider-wrap">
                   <div class="social-hub-slider-panel">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/social-hub-background.png" />
                          <div class="social-hub-slider-text">
                               <h3>Access to exclusive recording sessions</h3>
                          </div>
                   </div>
              </div>
	</div>
</div>
<div class="container">
	<div class="fullwidth-col">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; 
		endif; ?>
	</div>
</div>
<?php get_footer(); ?>