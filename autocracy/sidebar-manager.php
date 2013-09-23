<?php
/* Creates the Theme Options Page */

function sidebar_theme_options_do_page() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_script('jquery');
    wp_enqueue_style('thickbox');
    wp_enqueue_script('my-theme-options', get_template_directory_uri() . '/js/theme-options.js', false, null);
    ?>
    <div class="wrap">
        <?php
        screen_icon();
        echo "<h2>" . get_current_theme() . __(' Theme Manager', 'sampletheme') . "</h2>";
        ?>
        <?php if (false !== $_REQUEST['settings-updated']) : ?>
        <div class="updated fade"><p><strong><?php _e('Options saved', 'sampletheme'); ?></strong></p></div>
    <?php endif; ?>
    <form method="post" action="options.php">
        <?php settings_fields('sidebar_options'); ?>
        <?php $sidebaroptions = get_option('sidebar_theme_options'); ?>
        <div class="control">
            <div>Infusion 1 - Title</div>
            <input type="text" size="36" name="sidebar_theme_options[infusion1title]" value="<?php esc_attr_e($sidebaroptions['infusion1title']); ?>" />
        </div>
        <div class="control">
            <div>Infusion 1 - Image</div>
            <label for="upload_image">
                <input class="upload_image" type="text" size="36" name="sidebar_theme_options[infusion1image]" value="<?php esc_attr_e($sidebaroptions['infusion1image']); ?>" />
                <input  class="upload_image_button" type="button" value="Upload Image" />
                <br />Enter an URL or upload an image.
            </label>
        </div>
        <div class="control">
         <div>Infusion 1 - Content</div>
         <textarea id="sidebar_theme_options[infusion1content]" class="large-text" style="height:130px; width:375px;" name="sidebar_theme_options[infusion1content]"><?php echo esc_textarea($sidebaroptions['infusion1content']); ?></textarea>
        </div>
         <div class="control">
            <div>Infusion 1 - Link</div>
            <input type="text" size="36" name="sidebar_theme_options[infusion1link]" value="<?php esc_attr_e($sidebaroptions['infusion1link']); ?>" />
        </div>
        <div class="control">
            <div>Infusion 2 - Title</div>
            <input type="text" size="36" name="sidebar_theme_options[infusion2title]" value="<?php esc_attr_e($sidebaroptions['infusion2title']); ?>" />
        </div>
        <div class="control">
            <div>Infusion 2 - Image</div>
            <label for="upload_image">
                <input class="upload_image" type="text" size="36" name="sidebar_theme_options[infusion2image]" value="<?php esc_attr_e($sidebaroptions['infusion2image']); ?>" />
                <input  class="upload_image_button" type="button" value="Upload Image" />
                <br />Enter an URL or upload an image.
            </label>
        </div>
        <div class="control">
         <div>Infusion 2 - Content</div>
         <textarea id="sidebar_theme_options[infusion2content]" class="large-text" style="height:130px; width:375px;" name="sidebar_theme_options[infusion2content]"><?php echo esc_textarea($sidebaroptions['infusion2content']); ?></textarea>
        </div>
         <div class="control">
            <div>Infusion 2 - Link</div>
            <input type="text" size="36" name="sidebar_theme_options[infusion2link]" value="<?php esc_attr_e($sidebaroptions['infusion2link']); ?>" />
        </div>
        <div class="control">
            <div>Infusion 3 - Title</div>
            <input type="text" size="36" name="sidebar_theme_options[infusion3title]" value="<?php esc_attr_e($sidebaroptions['infusion3title']); ?>" />
        </div>
        <div class="control">
            <div>Infusion 3 - Image</div>
            <label for="upload_image">
                <input class="upload_image" type="text" size="36" name="sidebar_theme_options[infusion3image]" value="<?php esc_attr_e($sidebaroptions['infusion3image']); ?>" />
                <input  class="upload_image_button" type="button" value="Upload Image" />
                <br />Enter an URL or upload an image.
            </label>
        </div>
        <div class="control">
         <div>Infusion 3 - Content</div>
         <textarea id="sidebar_theme_options[infusion3content]" class="large-text" style="height:130px; width:375px;" name="sidebar_theme_options[infusion3content]"><?php echo esc_textarea($sidebaroptions['infusion3content']); ?></textarea>
        </div>
         <div class="control">
            <div>Infusion 3 - Link</div>
            <input type="text" size="36" name="sidebar_theme_options[infusion3link]" value="<?php esc_attr_e($sidebaroptions['infusion3link']); ?>" />
        </div>
     <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e('Save Options', 'sampletheme'); ?>" />
    </p>
</form>

</div>
<?php
}

function sidebar_theme_options_validate($input) {
    global $select_options, $radio_options;
    // Our checkbox value is either 0 or 1
    if (!isset($input['option1']))
        $input['option1'] = null;
    $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
    // Say our text option must be safe text with no HTML tags
    $input['sometext'] = wp_filter_nohtml_kses($input['sometext']);
    // Our select option must actually be in our array of select options
    // Say our textarea option must be safe text with the allowed tags for posts
    $input['sometextarea'] = wp_filter_post_kses($input['sometextarea']);
    return $input;
}
?>