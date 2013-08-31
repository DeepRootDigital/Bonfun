<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/59138cf6-6f30-458d-ba53-73aa9b77f73d.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<!-- <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/59138cf6-6f30-458d-ba53-73aa9b77f73d.css"/> -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/Jcarousel.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/swipe.js"></script>
</head>
<body>
	<div class="header">
		<div class="header-container">
			<div class="logo">
			</div>
			<div class="pull">
			</div>
			<div class="nav-menu">
				<ul id="nav">
					<li><a>Events</a></li>
					<li><a>Get Social</a></li>
					<li><a>Store Locator</a></li>
					<li><a>Products</a></li>
					<li><a>Blog</a></li>
				</ul>
			</div>
			<div class="social-media">
				<img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="instagram">
				<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="facebook">
				<img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="twitter">
				<img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="linkedin">
			</div>
		</div>
	</div>