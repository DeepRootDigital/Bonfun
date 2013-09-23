<?php
/* Creates the Theme Options Page */

function theme_options_do_page() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_script('jquery');
    wp_enqueue_style('thickbox');
    wp_enqueue_script('my-theme-options', get_template_directory_uri() . '/js/theme-options.js', false, null);
    ?>
    <div class="wrap">
        <?php
        screen_icon();
        echo "<h2>" . get_current_theme() . __(' Homepage Manager', 'sampletheme') . "</h2>";
        ?>

        <?php if (false !== $_REQUEST['settings-updated']) : ?>
        <div class="updated fade"><p><strong><?php _e('Options saved', 'sampletheme'); ?></strong></p></div>
    <?php endif; ?> 
    <form method="post" action="options.php">
        <?php settings_fields('sample_options'); ?>
        <?php $options = get_option('sample_theme_options'); ?>
        <table class="form-table">
            <!--******************-->
            <!-- HOMEPAGE CONTENT -->
            <!--******************-->
            <h3>Fader TypeSettings</h3>
            <p>Use SPAN codes to set the type to orange, the last SPAN of the content block becomes the large white word.</p>
            <tr valign="top">
                <td>
                    <h3>Slide 1:</h3>
                    <textarea id="sample_theme_options[slide-1]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[slide-1]"><?php echo esc_textarea($options['slide-1']); ?></textarea>
                </td>
            </tr>
            <tr valign="top">
                <td>
                    <h3>Slide 2:</h3>
                    <textarea id="sample_theme_options[slide-2]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[slide-2]"><?php echo esc_textarea($options['slide-2']); ?></textarea>
                </td>
            </tr>
            <tr valign="top">
                <td>
                    <h3>Slide 3:</h3>
                    <textarea id="sample_theme_options[slide-3]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[slide-3]"><?php echo esc_textarea($options['slide-3']); ?></textarea>
                </td>
            </tr>
            <tr valign="top">
                <td>
                    <h3>Slide 4:</h3>
                    <textarea id="sample_theme_options[slide-4]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[slide-4]"><?php echo esc_textarea($options['slide-4']); ?></textarea>
                </td>
            </tr>
            <tr valign="top">
                <td>
                    <h3>Slide 5:</h3>
                    <textarea id="sample_theme_options[slide-5]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[slide-5]"><?php echo esc_textarea($options['slide-5']); ?></textarea>
                </td>
            </tr>
            <tr valign="top">
                <td>
                    <h3>Carousel Bottle Images</h3>
                    <label for="upload_image">
                        Image 1:
                        <input class="upload_image" type="text" size="36" name="sample_theme_options[carouselimage1]" value="<?php esc_attr_e($options['carouselimage1']); ?>" />
                        <input  class="upload_image_button" type="button" value="Upload Image" />
                        <br />Enter an URL or upload an image.
                    </label>
                </td>
            </tr>
            <tr valign="top">
                <td>
                    <label for="upload_image">
                        Image 2:
                        <input class="upload_image" type="text" size="36" name="sample_theme_options[carouselimage2]" value="<?php esc_attr_e($options['carouselimage2']); ?>" />
                        <input  class="upload_image_button" type="button" value="Upload Image" />
                        <br />Enter an URL or upload an image.
                    </label>
                </td>
            </tr>
            <tr valign="top">
                <td>
                    <label for="upload_image">
                        Image 3:
                        <input class="upload_image" type="text" size="36" name="sample_theme_options[carouselimage3]" value="<?php esc_attr_e($options['carouselimage3']); ?>" />
                        <input  class="upload_image_button" type="button" value="Upload Image" />
                        <br />Enter an URL or upload an image.
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                  <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e('Save Options', 'sampletheme'); ?>" />
                </p>
            </td>
        </tr>
    </table>
</form>
</div>
<?php
}
function theme_options_validate($input) {
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