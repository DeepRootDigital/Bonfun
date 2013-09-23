<?php
/* Creates the Theme Options Page */

function process_theme_options_do_page() {
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
        <?php settings_fields('process_options'); ?>
        <?php $processoptions = get_option('process_theme_options'); ?>
        <div class="control">
            <div>Process Area 1 - Title</div>
            <input type="text" size="36" name="process_theme_options[process1title]" value="<?php esc_attr_e($processoptions['process1title']); ?>" />
        </div>
        <div class="control">
           <div>Process Area 1 - Content</div>
           <textarea id="process_theme_options[process1content]" class="large-text" style="height:130px; width:375px;" name="process_theme_options[process1content]"><?php echo esc_textarea($processoptions['process1content']); ?></textarea>
       </div>
       <div class="control">
        <div>Process Area 2 - Title</div>
        <input type="text" size="36" name="process_theme_options[process2title]" value="<?php esc_attr_e($processoptions['process2title']); ?>" />
    </div>
    <div class="control">
        <div>Process Area 2 - Content</div>
        <textarea id="process_theme_options[process2content]" class="large-text" style="height:130px; width:375px;" name="process_theme_options[process2content]"><?php echo esc_textarea($processoptions['process2content']); ?></textarea>
    </div>
    <div class="control">
        <div>Process Area 3 - Title</div>
        <input type="text" size="36" name="process_theme_options[process3title]" value="<?php esc_attr_e($processoptions['process3title']); ?>" />
    </div>
    <div class="control">
        <div>Process Area 3 - Content</div>
        <textarea id="process_theme_options[process3content]" class="large-text" style="height:130px; width:375px;" name="process_theme_options[process3content]"><?php echo esc_textarea($processoptions['process3content']); ?></textarea>
    </div>
    <div class="control">
        <div>Process Area 4 - Title</div>
        <input type="text" size="36" name="process_theme_options[process4title]" value="<?php esc_attr_e($processoptions['process4title']); ?>" />
    </div>
    <div class="control">
        <div>Process Area 4 - Content</div>
        <textarea id="process_theme_options[process4content]" class="large-text" style="height:130px; width:375px;" name="process_theme_options[process4content]"><?php echo esc_textarea($processoptions['process4content']); ?></textarea>
    </div>
    <div class="control">
        <div>Process Area 5 - Title</div>
        <input type="text" size="36" name="process_theme_options[process5title]" value="<?php esc_attr_e($processoptions['process5title']); ?>" />
    </div>
    <div class="control">
        <div>Process Area 5 - Content</div>
        <textarea id="process_theme_options[process5content]" class="large-text" style="height:130px; width:375px;" name="process_theme_options[process5content]"><?php echo esc_textarea($processoptions['process5content']); ?></textarea>
    </div>
    <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e('Save Options', 'sampletheme'); ?>" />
    </p>
</form>
</div>
<?php
}

function process_theme_options_validate($input) {
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