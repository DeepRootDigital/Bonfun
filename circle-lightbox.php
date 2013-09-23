	<div class="lightbox-circle">
		<img src="<?php echo get_template_directory_uri(); ?>/images/one-step.png">
		<p>Join the <span>Circle of 'Fun</span></p>
		<form method="POST" action="<?php echo get_template_directory_uri(); ?>/circlemailer.php">
			<input name="name" placeholder="Name" type="text">
			<input name="email" placeholder="Email" type="text">
			<input type="image" src="<?php echo get_template_directory_uri(); ?>/images/join.png">
		</form>
	</div>
	<div class="lightbox-overlay-circle"></div>