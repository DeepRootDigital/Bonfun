<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/59138cf6-6f30-458d-ba53-73aa9b77f73d.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/nick.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/Jcarousel.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/function.js"></script>
<?php $mainoptions = get_option('main_theme_options'); ?>
</head>
<body>
<?php get_template_part('age', 'gateway'); ?>
<?php get_template_part('circle', 'lightbox'); ?>
	<div class="header">
		<div class="header-container">
			<a href="<?php echo get_site_url(); ?>">
				<div class="logo">
				</div>
			</a>
			<div class="pull">
			</div>
			<div class="nav-menu">
				<?php wp_nav_menu(array('theme_location' => 'Header Nav',)); ?>
			</div>
			<div class="social-media">
				<a href="<?php echo $mainoptions['instagramurl']; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="instagram"></a>
				<a href="<?php echo $mainoptions['facebookurl']; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="facebook"></a>
				<a href="<?php echo $mainoptions['twitterurl']; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="twitter"></a>
				<a href="http://www.linkedin.com/company/2640885?trk=tyah&trkInfo=tas%3Abonfun%20spiri" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="linkedin"></a>
<a href="https://plus.google.com/105161029642301998136/posts" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/googleplus.png" alt="googleplus"></a>
			</div>
		</div>
	</div>