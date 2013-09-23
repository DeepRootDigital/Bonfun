<?php $sidebaroptions = get_option('sidebar_theme_options'); ?>
<div class="sidebar-col first">
<div class="sidebar-wrap">
    <div class="sidebar-widget">
        <h3>Social <span>Happenings</span></h3>
        <img class="divider-red" src="<?php echo get_template_directory_uri(); ?>/images/about-divider.png">
        <?php echo do_shortcode('[dc_social_feed id="104"]'); ?>
    </div>
</div>
</div>
<div class="sidebar-col">
    <div class="sidebar-widget">
        <h3>New <span>Infusions</span></h3>
        <img class="divider-red" src="<?php echo get_template_directory_uri(); ?>/images/about-divider.png">
        <div class="infusion">
            <img class="bottle-img" src="<?php echo $sidebaroptions['infusion1image']; ?>">
            <h4><?php echo $sidebaroptions['infusion1title']; ?></h4>
            <img class="divider" src="<?php echo get_template_directory_uri(); ?>/images/infusion-divider.png">
            <p><?php echo $sidebaroptions['infusion1content']; ?></p>
            <a href="<?php echo $sidebaroptions['infusion1link']; ?>">
                <img class="go-button" src="<?php echo get_template_directory_uri(); ?>/images/go-button.png">
            </a>
        </div>
        <div class="infusion">
            <img class="bottle-img" src="<?php echo $sidebaroptions['infusion2image']; ?>">
            <h4><?php echo $sidebaroptions['infusion2title']; ?></h4>
            <img class="divider" src="<?php echo get_template_directory_uri(); ?>/images/infusion-divider.png">
            <p><?php echo $sidebaroptions['infusion2content']; ?></p>
            <a href="<?php echo $sidebaroptions['infusion2link']; ?>">
                <img class="go-button" src="<?php echo get_template_directory_uri(); ?>/images/go-button.png">
            </a>
        </div>
        <div class="infusion">
            <img class="bottle-img" src="<?php echo $sidebaroptions['infusion3image']; ?>">
            <h4><?php echo $sidebaroptions['infusion3title']; ?></h4>
            <img class="divider" src="<?php echo get_template_directory_uri(); ?>/images/infusion-divider.png">
            <p><?php echo $sidebaroptions['infusion3content']; ?></p>
            <a href="<?php echo $sidebaroptions['infusion3link']; ?>">
                <img class="go-button" src="<?php echo get_template_directory_uri(); ?>/images/go-button.png">
            </a>
        </div>
    </div>
</div>
</div>