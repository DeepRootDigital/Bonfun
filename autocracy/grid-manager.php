<?php
/* Creates the Theme Options Page */

function grid_theme_options_do_page() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_script('jquery');
    wp_enqueue_style('thickbox');
    wp_enqueue_script('my-theme-options', get_template_directory_uri() . '/js/theme-options.js', false, null);
    ?>
    <style>
    .column {
        float: left;
        padding-left:20px;
        padding-right: 20px;
    }
    .control div {
        font-weight: bold;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    .row {
        clear: both;
        float:left;
        padding-bottom: 20px;
        border-bottom:1px solid #ccc;
    }
    </style>
    <div class="wrap">
        <?php
        screen_icon();
        echo "<h2>" . get_current_theme() . __(' Theme Manager', 'sampletheme') . "</h2>";
        ?>
        <?php if (false !== $_REQUEST['settings-updated']) : ?>
        <div class="updated fade"><p><strong><?php _e('Options saved', 'sampletheme'); ?></strong></p></div>
    <?php endif; ?>
    <form method="post" action="options.php">
        <?php settings_fields('grid_options'); ?>
        <?php $gridoptions = get_option('grid_theme_options'); ?>
        <div class="row">
            <h3>Grid Top Row</h3>
            <div class="column">
                <div class="control">
                    <div>Left Panel - Title</div>
                    <input type="text" size="36" name="grid_theme_options[lefttitle1]" value="<?php esc_attr_e($gridoptions['lefttitle1']); ?>" />
                </div>
                <div class="control">
                    <div>Left Panel - Grid Image:</div>
                    <label for="upload_image">
                        <input class="upload_image" type="text" size="36" name="grid_theme_options[leftfimage1]" value="<?php esc_attr_e($gridoptions['leftfimage1']); ?>" />
                        <input  class="upload_image_button" type="button" value="Upload Image" />
                        <br />Enter an URL or upload an image.
                    </label>
                </div>
                <div class="control">
                    <div>Left Panel - Link</div>
                    <input type="text" size="36" name="grid_theme_options[leftlink1]" value="<?php esc_attr_e($gridoptions['leftlink1']); ?>" />
                </div>
                <div class="control">
                   <div>Left Panel - Content</div>
                   <textarea id="grid_theme_options[leftcontent1]" class="large-text" style="height:130px; width:375px;" name="grid_theme_options[leftcontent1]"><?php echo esc_textarea($gridoptions['leftcontent1']); ?></textarea>
               </div>
               <div class="control">
                <div>Left Panel - Inlay Image:</div>
                <label for="upload_image">
                    <input class="upload_image" type="text" size="36" name="grid_theme_options[leftiimage1]" value="<?php esc_attr_e($gridoptions['leftiimage1']); ?>" />
                    <input  class="upload_image_button" type="button" value="Upload Image" />
                    <br />Enter an URL or upload an image.
                </label>
            </div>
        </div>
        <div class="column">
            <div class="control">
                <div>Mid Panel - Title</div>
                <input type="text" size="36" name="grid_theme_options[Midtitle1]" value="<?php esc_attr_e($gridoptions['Midtitle1']); ?>" />
            </div>
            <div class="control">
                <div>Mid Panel - Grid Image:</div>
                <label for="upload_image">
                    <input class="upload_image" type="text" size="36" name="grid_theme_options[Midfimage1]" value="<?php esc_attr_e($gridoptions['Midfimage1']); ?>" />
                    <input  class="upload_image_button" type="button" value="Upload Image" />
                    <br />Enter an URL or upload an image.
                </label>
            </div>
            <div class="control">
                <div>Mid Panel - Link</div>
                <input type="text" size="36" name="grid_theme_options[Midlink1]" value="<?php esc_attr_e($gridoptions['Midlink1']); ?>" />
            </div>
            <div class="control">
             <div>Mid Panel - Content</div>
             <textarea id="grid_theme_options[Midcontent1]" class="large-text" style="height:130px; width:375px;" name="grid_theme_options[Midcontent1]"><?php echo esc_textarea($gridoptions['Midcontent1']); ?></textarea>
         </div>
         <div class="control">
            <div>Mid Panel - Inlay Image:</div>
            <label for="upload_image">
                <input class="upload_image" type="text" size="36" name="grid_theme_options[Midiimage1]" value="<?php esc_attr_e($gridoptions['Midiimage1']); ?>" />
                <input  class="upload_image_button" type="button" value="Upload Image" />
                <br />Enter an URL or upload an image.
            </label>
        </div>
    </div>
    <div class="column">
        <div class="control">
            <div>Right Panel - Title</div>
            <input type="text" size="36" name="grid_theme_options[Righttitle1]" value="<?php esc_attr_e($gridoptions['Righttitle1']); ?>" />
        </div>
        <div class="control">
            <div>Right Panel - Grid Image:</div>
            <label for="upload_image">
                <input class="upload_image" type="text" size="36" name="grid_theme_options[Rightfimage1]" value="<?php esc_attr_e($gridoptions['Rightfimage1']); ?>" />
                <input  class="upload_image_button" type="button" value="Upload Image" />
                <br />Enter an URL or upload an image.
            </label>
        </div>
        <div class="control">
            <div>Right Panel - Link</div>
            <input type="text" size="36" name="grid_theme_options[Rightlink1]" value="<?php esc_attr_e($gridoptions['Rightlink1']); ?>" />
        </div>
        <div class="control">
           <div>Right Panel - Content</div>
           <textarea id="grid_theme_options[Rightcontent1]" class="large-text" style="height:130px; width:375px;" name="grid_theme_options[Rightcontent1]"><?php echo esc_textarea($gridoptions['Rightcontent1']); ?></textarea>
       </div>
       <div class="control">
        <div>Right Panel - Inlay Image:</div>
        <label for="upload_image">
            <input class="upload_image" type="text" size="36" name="grid_theme_options[Rightiimage1]" value="<?php esc_attr_e($gridoptions['Rightiimage1']); ?>" />
            <input  class="upload_image_button" type="button" value="Upload Image" />
            <br />Enter an URL or upload an image.
        </label>
    </div>
</div>
</div>
<div class="row">
    <h3>Grid Middle Row</h3>
    <div class="column">
        <div class="control">
            <div>Left Panel - Title</div>
            <input type="text" size="36" name="grid_theme_options[lefttitle2]" value="<?php esc_attr_e($gridoptions['lefttitle2']); ?>" />
        </div>
        <div class="control">
            <div>Left Panel - Grid Image:</div>
            <label for="upload_image">
                <input class="upload_image" type="text" size="36" name="grid_theme_options[leftfimage2]" value="<?php esc_attr_e($gridoptions['leftfimage2']); ?>" />
                <input  class="upload_image_button" type="button" value="Upload Image" />
                <br />Enter an URL or upload an image.
            </label>
        </div>
        <div class="control">
            <div>Left Panel - Link</div>
            <input type="text" size="36" name="grid_theme_options[leftlink2]" value="<?php esc_attr_e($gridoptions['leftlink2']); ?>" />
        </div>
        <div class="control">
           <div>Left Panel - Content</div>
           <textarea id="grid_theme_options[leftcontent2]" class="large-text" style="height:130px; width:375px;" name="grid_theme_options[leftcontent2]"><?php echo esc_textarea($gridoptions['leftcontent2']); ?></textarea>
       </div>
       <div class="control">
        <div>Left Panel - Inlay Image:</div>
        <label for="upload_image">
            <input class="upload_image" type="text" size="36" name="grid_theme_options[leftiimage2]" value="<?php esc_attr_e($gridoptions['leftiimage2']); ?>" />
            <input  class="upload_image_button" type="button" value="Upload Image" />
            <br />Enter an URL or upload an image.
        </label>
    </div>
</div>
<div class="column">
    <div class="control">
        <div>Mid Panel - Title</div>
        <input type="text" size="36" name="grid_theme_options[Midtitle2]" value="<?php esc_attr_e($gridoptions['Midtitle2']); ?>" />
    </div>
    <div class="control">
        <div>Mid Panel - Grid Image:</div>
        <label for="upload_image">
            <input class="upload_image" type="text" size="36" name="grid_theme_options[Midfimage2]" value="<?php esc_attr_e($gridoptions['Midfimage2']); ?>" />
            <input  class="upload_image_button" type="button" value="Upload Image" />
            <br />Enter an URL or upload an image.
        </label>
    </div>
    <div class="control">
        <div>Mid Panel - Link</div>
        <input type="text" size="36" name="grid_theme_options[Midlink2]" value="<?php esc_attr_e($gridoptions['Midlink2']); ?>" />
    </div>
    <div class="control">
     <div>Mid Panel - Content</div>
     <textarea id="grid_theme_options[Midcontent2]" class="large-text" style="height:130px; width:375px;" name="grid_theme_options[Midcontent2]"><?php echo esc_textarea($gridoptions['Midcontent2']); ?></textarea>
 </div>
 <div class="control">
    <div>Mid Panel - Inlay Image:</div>
    <label for="upload_image">
        <input class="upload_image" type="text" size="36" name="grid_theme_options[Midiimage2]" value="<?php esc_attr_e($gridoptions['Midiimage2']); ?>" />
        <input  class="upload_image_button" type="button" value="Upload Image" />
        <br />Enter an URL or upload an image.
    </label>
</div>
</div>
<div class="column">
    <div class="control">
        <div>Right Panel - Title</div>
        <input type="text" size="36" name="grid_theme_options[Righttitle2]" value="<?php esc_attr_e($gridoptions['Righttitle2']); ?>" />
    </div>
    <div class="control">
        <div>Right Panel - Grid Image:</div>
        <label for="upload_image">
            <input class="upload_image" type="text" size="36" name="grid_theme_options[Rightfimage2]" value="<?php esc_attr_e($gridoptions['Rightfimage2']); ?>" />
            <input  class="upload_image_button" type="button" value="Upload Image" />
            <br />Enter an URL or upload an image.
        </label>
    </div>
    <div class="control">
        <div>Right Panel - Link</div>
        <input type="text" size="36" name="grid_theme_options[Rightlink2]" value="<?php esc_attr_e($gridoptions['Rightlink2']); ?>" />
    </div>
    <div class="control">
       <div>Right Panel - Content</div>
       <textarea id="grid_theme_options[Rightcontent2]" class="large-text" style="height:130px; width:375px;" name="grid_theme_options[Rightcontent2]"><?php echo esc_textarea($gridoptions['Rightcontent2']); ?></textarea>
   </div>
   <div class="control">
    <div>Right Panel - Inlay Image:</div>
    <label for="upload_image">
        <input class="upload_image" type="text" size="36" name="grid_theme_options[Rightiimage2]" value="<?php esc_attr_e($gridoptions['Rightiimage2']); ?>" />
        <input  class="upload_image_button" type="button" value="Upload Image" />
        <br />Enter an URL or upload an image.
    </label>
</div>
</div>
</div>
<div class="row">
    <h3>Grid Bottom Row</h3>
    <div class="column">
        <div class="control">
            <div>Left Panel - Title</div>
            <input type="text" size="36" name="grid_theme_options[lefttitle3]" value="<?php esc_attr_e($gridoptions['lefttitle3']); ?>" />
        </div>
        <div class="control">
            <div>Left Panel - Grid Image:</div>
            <label for="upload_image">
                <input class="upload_image" type="text" size="36" name="grid_theme_options[leftfimage3]" value="<?php esc_attr_e($gridoptions['leftfimage3']); ?>" />
                <input  class="upload_image_button" type="button" value="Upload Image" />
                <br />Enter an URL or upload an image.
            </label>
        </div>
        <div class="control">
            <div>Left Panel - Link</div>
            <input type="text" size="36" name="grid_theme_options[leftlink3]" value="<?php esc_attr_e($gridoptions['leftlink3']); ?>" />
        </div>
        <div class="control">
           <div>Left Panel - Content</div>
           <textarea id="grid_theme_options[leftcontent3]" class="large-text" style="height:130px; width:375px;" name="grid_theme_options[leftcontent3]"><?php echo esc_textarea($gridoptions['leftcontent3']); ?></textarea>
       </div>
       <div class="control">
        <div>Left Panel - Inlay Image:</div>
        <label for="upload_image">
            <input class="upload_image" type="text" size="36" name="grid_theme_options[leftiimage3]" value="<?php esc_attr_e($gridoptions['leftiimage3']); ?>" />
            <input  class="upload_image_button" type="button" value="Upload Image" />
            <br />Enter an URL or upload an image.
        </label>
    </div>
</div>
<div class="column">
    <div class="control">
        <div>Mid Panel - Title</div>
        <input type="text" size="36" name="grid_theme_options[Midtitle3]" value="<?php esc_attr_e($gridoptions['Midtitle3']); ?>" />
    </div>
    <div class="control">
        <div>Mid Panel - Grid Image:</div>
        <label for="upload_image">
            <input class="upload_image" type="text" size="36" name="grid_theme_options[Midfimage3]" value="<?php esc_attr_e($gridoptions['Midfimage3']); ?>" />
            <input  class="upload_image_button" type="button" value="Upload Image" />
            <br />Enter an URL or upload an image.
        </label>
    </div>
    <div class="control">
        <div>Mid Panel - Link</div>
        <input type="text" size="36" name="grid_theme_options[Midlink3]" value="<?php esc_attr_e($gridoptions['Midlink3']); ?>" />
    </div>
    <div class="control">
     <div>Mid Panel - Content</div>
     <textarea id="grid_theme_options[Midcontent3]" class="large-text" style="height:130px; width:375px;" name="grid_theme_options[Midcontent3]"><?php echo esc_textarea($gridoptions['Midcontent3']); ?></textarea>
 </div>
 <div class="control">
    <div>Mid Panel - Inlay Image:</div>
    <label for="upload_image">
        <input class="upload_image" type="text" size="36" name="grid_theme_options[Midiimage3]" value="<?php esc_attr_e($gridoptions['Midiimage3']); ?>" />
        <input  class="upload_image_button" type="button" value="Upload Image" />
        <br />Enter an URL or upload an image.
    </label>
</div>
</div>
<div class="column">
    <div class="control">
        <div>Right Panel - Title</div>
        <input type="text" size="36" name="grid_theme_options[Righttitle3]" value="<?php esc_attr_e($gridoptions['Righttitle3']); ?>" />
    </div>
    <div class="control">
        <div>Right Panel - Grid Image:</div>
        <label for="upload_image">
            <input class="upload_image" type="text" size="36" name="grid_theme_options[Rightfimage3]" value="<?php esc_attr_e($gridoptions['Rightfimage3']); ?>" />
            <input  class="upload_image_button" type="button" value="Upload Image" />
            <br />Enter an URL or upload an image.
        </label>
    </div>
    <div class="control">
        <div>Right Panel - Link</div>
        <input type="text" size="36" name="grid_theme_options[Rightlink3]" value="<?php esc_attr_e($gridoptions['Rightlink3']); ?>" />
    </div>
    <div class="control">
       <div>Right Panel - Content</div>
       <textarea id="grid_theme_options[Rightcontent3]" class="large-text" style="height:130px; width:375px;" name="grid_theme_options[Rightcontent3]"><?php echo esc_textarea($gridoptions['Rightcontent3']); ?></textarea>
   </div>
   <div class="control">
    <div>Right Panel - Inlay Image:</div>
    <label for="upload_image">
        <input class="upload_image" type="text" size="36" name="grid_theme_options[Rightiimage3]" value="<?php esc_attr_e($gridoptions['Rightiimage3']); ?>" />
        <input  class="upload_image_button" type="button" value="Upload Image" />
        <br />Enter an URL or upload an image.
    </label>
</div>
</div>
</div>
<div class="row">
    <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e('Save Options', 'sampletheme'); ?>" />
    </p>
</div>
</form>
</div>
<?php
}
function grid_theme_options_validate($input) {
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