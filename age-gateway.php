<?php if (!isset($_COOKIE['ageGateWay'])) { ?>
	<div class="lightbox-agegate">
		<img class="lightbox-banner" src="<?php echo get_template_directory_uri(); ?>/images/lightbox-text.png">
		<p>Are you of Legal Drinking Age?</p>
		<img class="yes" src="<?php echo get_template_directory_uri(); ?>/images/yes.png">
		<img src="<?php echo get_template_directory_uri(); ?>/images/no.png">
	</div>
	<div class="lightbox-overlay"></div>
<?php } ?>