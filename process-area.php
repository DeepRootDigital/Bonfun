<?php $processoptions = get_option('process_theme_options'); ?>
<div class="process-content">
	<div class="container">
		<img class="alignment-bkg" src="<?php echo get_template_directory_uri(); ?>/images/process-navigation-background.png">

		<div class="process-buton-set">
			<div class="action-button history" style="margin-left:250px; margin-top:33px;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/process-history-icon.png">
			</div>
			<div class="action-button growth" style="margin-left:205px; margin-top:100px;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/process-growth-icon.png">
			</div>
			<div class="action-button distillation" style="margin-top: 168px; margin-left: 160px;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/process-distillation-icon.png">
			</div>
			<div class="action-button aging" style="margin-top: 235px; margin-left: 115px;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/process-aging-icon.png">
			</div>
			<div class="action-button wine" style="margin-top: 302px; margin-left: 73px;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/process-infusion-icon.png">
			</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/process_shadow.png" class="process-shadows" />
		</div>

		<div id="panel-wrap" class="process-panel-wrap">
			<div class="swipe-wrap">
				<div class="process-panel history">
					<img class="ft-img" src="<?php echo get_template_directory_uri(); ?>/images/Grid-Images/testimages/process_history.jpg">
					<h3><?php echo $processoptions['process1title']; ?></h3>
					<img class="process-logo-icon" src="<?php echo get_template_directory_uri(); ?>/images/process-history-logo.png">
					<span class="process-icon-txt">Stage <i>1</i></span>
					<p><?php echo $processoptions['process1content']; ?></p>
				</div>
				<div class="process-panel growth">
					<img class="ft-img" src="<?php echo get_template_directory_uri(); ?>/images/Grid-Images/testimages/growth.jpg">
					<h3><?php echo $processoptions['process2title']; ?></h3>
					<img class="process-logo-icon" src="<?php echo get_template_directory_uri(); ?>/images/process-growth-logo.png">
					<span class="process-icon-txt">Stage <i>2</i></span>
					<p><?php echo $processoptions['process2content']; ?></p>
				</div>
				<div class="process-panel distillation">
					<img class="ft-img" src="<?php echo get_template_directory_uri(); ?>/images/Grid-Images/testimages/distillation.jpg">
					<h3><?php echo $processoptions['process3title']; ?></h3>
					<img class="process-logo-icon" src="<?php echo get_template_directory_uri(); ?>/images/process-distillation-logo.png">
					<span class="process-icon-txt">Stage <i>3</i></span>
					<p><?php echo $processoptions['process3content']; ?></p>
				</div>
				<div class="process-panel aging">
					<img class="ft-img" src="<?php echo get_template_directory_uri(); ?>/images/Grid-Images/testimages/aging.jpg">
					<h3><?php echo $processoptions['process4title']; ?></h3>
					<img class="process-logo-icon" src="<?php echo get_template_directory_uri(); ?>/images/process-aging-logo.png">
					<span class="process-icon-txt">Stage <i>4</i></span>
					<p><?php echo $processoptions['process4content']; ?></p>
				</div>
				<div class="process-panel wine">
					<img class="ft-img" src="<?php echo get_template_directory_uri(); ?>/images/Grid-Images/testimages/insfusion.jpg">
					<h3><?php echo $processoptions['process5title']; ?></h3>
					<img class="process-logo-icon" src="<?php echo get_template_directory_uri(); ?>/images/process-infusion-logo.png">
					<span class="process-icon-txt">Stage <i>5</i></span>
					<p><?php echo $processoptions['process5content']; ?></p>
				</div>
			</div>
		</div>

	</div>
</div>