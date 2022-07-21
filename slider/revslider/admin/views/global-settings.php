<?php
/**
 * @package   Revolution Slider
 * @author    ThemePunch <info@themepunch.com>
 * @link      http://revolution.themepunch.com/
 * @copyright 2017 ThemePunch
 */
 
if( !defined( 'ABSPATH') ) exit();

$operations = new RevSliderOperations();
$arrValues = $operations->getGeneralSettingsValues();

$js_defer = RevSliderBase::getVar($arrValues, 'js_defer', 'off');
$show_dev_export = RevSliderBase::getVar($arrValues, 'show_dev_export', 'on');
$change_font_loading = RevSliderBase::getVar($arrValues, 'change_font_loading', '');
$enable_logs = RevSliderBase::getVar($arrValues, 'enable_logs', 'off');
$load_all_javascript = RevSliderBase::getVar($arrValues, 'load_all_javascript', 'off');

$pack_page_creation = RevSliderBase::getVar($arrValues, 'pack_page_creation', 'on');
$single_page_creation = RevSliderBase::getVar($arrValues, 'single_page_creation', 'off');

$enable_newschannel = apply_filters('revslider_set_notifications', 'on');
$enable_newschannel = RevSliderBase::getVar($arrValues, "enable_newschannel",$enable_newschannel);

$width = RevSliderBase::getVar($arrValues, 'width', 1240);
$width_notebook = RevSliderBase::getVar($arrValues, 'width_notebook', 1024);
$width_tablet = RevSliderBase::getVar($arrValues, 'width_tablet', 778);
$width_mobile = RevSliderBase::getVar($arrValues, 'width_mobile', 480);

$force_activation_box = RevSliderBase::getVar($arrValues, 'force_activation_box', 'off');

$enable_dev_mode = RevSliderBase::getVar($arrValues, 'enable_dev_mode', 'off');
$logging_level = RevSliderBase::getVar($arrValues, 'logging_level', '0');
$force_pclzip = RevSliderBase::getVar($arrValues, 'force_pclzip', 'off');

?>
<div class='wrap'>
	<div class="clear_both"></div>
	<div class="title_line" style="margin-bottom:10px">
		<?php 
		$icon_general = '<div class="icon32" id="icon-options-general"></div>';
		echo apply_filters( 'rev_icon_general_filter', $icon_general ); 
		?>
        <a class="button-primary revgreen button_save_general_settings float_right mtop_10 mleft_10" original-title=""><?php _e('Save Settings', 'revslider'); ?></a>
	</div>

	<div class="clear_both"></div>
	
	<div id="rs-global-settings-dialog-wrap">
		<form name="form_general_settings" id="form_general_settings">
			<script type="text/javascript">
				g_settingsObj['form_general_settings'] = {};
				
				jQuery(document).ready(function(){
					RevSliderSettings.createModernOnOff();
					
					jQuery('.tp-moderncheckbox').each(function(){
						RevSliderSettings.onoffStatus(jQuery(this));
					});
				});
			</script>

			<div class="rs-global-setting">
				<div class="rs-gs-tc">
					<label><?php _e("Defer JavaScript Loading:",'revslider'); ?></label>
				</div>
				<div class="rs-gs-tc">
					<input type="checkbox" id="js_defer_1" name="js_defer" class="tp-moderncheckbox" data-unchecked="off" <?php checked($js_defer, 'on'); ?>>
				</div>
				<div class="rs-gs-tc">
					<i style=""><?php _e("Defer the loading of the JavaScript libraries to maximize page loading speed.",'revslider'); ?></i>
				</div>
			</div>
			
			<div class="rs-global-setting">
				<div class="rs-gs-tc">
					<label><?php _e("Load all JavaScript libraries:", 'revslider'); ?></label>
				</div>
				<div class="rs-gs-tc">
					<input type="checkbox" id="load_all_javascript_1" name="load_all_javascript" class="tp-moderncheckbox" data-unchecked="off" <?php checked($load_all_javascript, 'on'); ?>>
				</div>
				<div class="rs-gs-tc">
					<i style=""><?php _e("Enabling this will load all JavaScript libraries of Slider Revolution. Disabling this will let Slider Revolution load only the libraries needed for the current Sliders on page. Enabling this option can solve CDN issues.",'revslider'); ?></i>
				</div>
			</div>
			
			<div class="rs-global-setting">
				<div class="rs-gs-tc">
					<label><?php _e("Enable Markup Export option:",'revslider'); ?></label>
				</div>
				<div class="rs-gs-tc">
					<input type="checkbox" id="show_dev_export_1" name="show_dev_export" class="tp-moderncheckbox" data-unchecked="off" <?php checked($show_dev_export, 'on'); ?>>
				</div>
				<div class="rs-gs-tc">
					<i style=""><?php _e("This will enable the option to export the Slider Markups to copy/paste it directly into websites.",'revslider'); ?></i>
				</div>
			</div>
			
			<div class="rs-global-setting">
				<div class="rs-gs-tc">
					<label><?php _e("Font Loading URL:",'revslider'); ?></label>
				</div>
				<div class="rs-gs-tc">
					<input id="change_font_loading" name="change_font_loading" type="text" class="regular-text" value="<?php echo $change_font_loading; ?>">
				</div>
				<div class="rs-gs-tc">
					<i style=""><?php _e("Insert something in it and it will be used instead of http://fonts.googleapis.com/css?family= (For example: http://fonts.useso.com/css?family= which will also work for chinese visitors)",'revslider'); ?></i>
				</div>
			</div>

			<div class="rs-global-setting">
				<div class="rs-gs-tc">
					<label><?php _e("Default Settings for Advanced Responsive Grid Sizes:",'revslider'); ?></label>
				</div>
				<div class="rs-gs-tc">
					<div>
						<?php _e('Desktop Grid Width', 'revslider'); ?>
						<input id="width" name="width" type="text" class="textbox-small" value="<?php echo $width; ?>">
					</div>
					<div>
						<?php _e('Notebook Grid Width', 'revslider'); ?>
						<input id="width_notebook" name="width_notebook" type="text" class="textbox-small" value="<?php echo $width_notebook; ?>">
					</div>
					<div>
						<?php _e('Tablet Grid Width', 'revslider'); ?>
						<input name="width_tablet" type="text" class="textbox-small" value="<?php echo $width_tablet; ?>">
					</div>
					<div>
						<?php _e('Mobile Grid Width', 'revslider'); ?>
						<input name="width_mobile" type="text" class="textbox-small" value="<?php echo $width_mobile; ?>">
					</div>
				</div>
				<div class="rs-gs-tc">
					<i style=""><?php _e("Define the default Grid Sizes for devices: Desktop, Tablet and Mobile",'revslider'); ?></i>
				</div>
			</div>
			
			<div class="rs-global-setting">
				<div class="rs-gs-tc">
					<label><?php _e("Enable Notifications:",'revslider'); ?></label>
				</div>
				<div class="rs-gs-tc">
					<input type="checkbox" id="" name="enable_newschannel" class="tp-moderncheckbox" data-unchecked="off" <?php checked($enable_newschannel, 'on'); ?>>
				</div>
				<div class="rs-gs-tc">
					<i style=""><?php _e("Enable/Disable ThemePunch Notifications in the Admin Notice bar.",'revslider'); ?></i>
				</div>
			</div>
			
			<div class="rs-global-setting">
				<div class="rs-gs-tc">
					<label><?php _e("Enable Logs:",'revslider'); ?></label>
				</div>
				<div class="rs-gs-tc">
					<input type="checkbox" id="enable_logs_1"name="enable_logs" class="tp-moderncheckbox" data-unchecked="off" <?php checked($enable_logs, 'on'); ?>>
				</div>
				<div class="rs-gs-tc">
					<i style=""><?php _e("Enable console logs for debugging.",'revslider'); ?></i>
				</div>
			</div>
			
			<div class="rs-global-setting">
				<div class="rs-gs-tc">
					<label><?php _e("Enable Missing Activation Area:",'revslider'); ?></label>
				</div>
				<div class="rs-gs-tc">
					<input type="checkbox" id="" name="force_activation_box" class="tp-moderncheckbox" data-unchecked="off" <?php checked($force_activation_box, 'on'); ?>>
				</div>
				<div class="rs-gs-tc">
					<i style=""><?php _e("Force the Activation Area to show up if the Theme disabled it.",'revslider'); ?></i>
				</div>
			</div>
			
			<div class="rs-global-setting">
				<div class="rs-gs-tc">
					<label><?php _e("Enable Blank Page Creation for Slider Packages:",'revslider'); ?></label>
				</div>
				<div class="rs-gs-tc">
					<input type="checkbox" id="" name="pack_page_creation" class="tp-moderncheckbox" data-unchecked="off" <?php checked($pack_page_creation, 'on'); ?>>
				</div>
				<div class="rs-gs-tc">
					<i style=""><?php _e("Enable option to automatically create a Blank Page if a Slider Pack is installed.",'revslider'); ?></i>
				</div>
			</div>
			
			<div class="rs-global-setting">
				<div class="rs-gs-tc">
					<label><?php _e("Enable Blank Page Creation for Single Sliders:",'revslider'); ?></label>
				</div>
				<div class="rs-gs-tc">
					<input type="checkbox" id="" value="on" name="single_page_creation" class="tp-moderncheckbox" data-unchecked="off" <?php checked($single_page_creation, 'on'); ?>>
				</div>
				<div class="rs-gs-tc">
					<i style=""><?php _e("Enable option to automatically create a Blank Page if a Single Slider is installed.",'revslider'); ?></i>
				</div>
			</div>

            <div class="rs-global-setting">
                <div class="rs-gs-tc">
                    <label><?php _e("Enable Dev Mode:",'revslider'); ?></label>
                </div>
                <div class="rs-gs-tc">
                    <input type="checkbox" id="" value="on" name="enable_dev_mode" class="tp-moderncheckbox" data-unchecked="off" <?php checked($enable_dev_mode, 'on'); ?>>
                </div>
                <div class="rs-gs-tc">
                    <i style=""><?php _e("Set environment mode to development. It displays errors in this mode.",'revslider'); ?></i>
                </div>
            </div>

            <div class="rs-global-setting">
                <div class="rs-gs-tc">
                    <label><?php _e("Set Logging Level:",'revslider'); ?></label>
                </div>
                <div class="rs-gs-tc">
                    <select id="logging_level" name="logging_level">
                        <option <?php selected($logging_level, '0'); ?> value="0"><?php _e("Disables logging",'revslider'); ?></option>
                        <option <?php selected($logging_level, '1'); ?> value="1"><?php _e("Error Messages",'revslider'); ?></option>
                        <option <?php selected($logging_level, '2'); ?> value="2"><?php _e("Debug Messages",'revslider'); ?></option>
                        <option <?php selected($logging_level, '3'); ?> value="3"><?php _e("Informational Messages",'revslider'); ?></option>
                        <option <?php selected($logging_level, '4'); ?> value="4"><?php _e("All Messages",'revslider'); ?></option>
                    </select>
                </div>
                <div class="rs-gs-tc">
                    <i style=""><?php _e("Sets level of logging to be logged to /application/logs",'revslider'); ?></i>
                </div>
            </div>

            <div class="rs-global-setting">
                <div class="rs-gs-tc">
                    <label><?php _e("Force Use of PclZip Library:",'revslider'); ?></label>
                </div>
                <div class="rs-gs-tc">
                    <input type="checkbox" id="" value="on" name="force_pclzip" class="tp-moderncheckbox" data-unchecked="off" <?php checked($force_pclzip, 'on'); ?>>
                </div>
                <div class="rs-gs-tc">
                    <i style=""><?php _e("Use PclZip, instead of ZipArchive. Can help in case of problems with import and update features.",'revslider'); ?></i>
                </div>
            </div>

            <div class="rs-global-setting">
                <div class="rs-gs-tc">
                    <label><?php _e("Run Slider Revolution database creation:",'revslider'); ?></label>
                </div>
                <div class="rs-gs-tc">
                    <a id="trigger_database_creation" class="button-primary revblue" original-title="" href="javascript:void(0);"><?php _e('Go!', 'revslider'); ?></a>
                </div>
                <div class="rs-gs-tc">
                    <i style=""><?php _e("Force creation of Slider Revolution database structure to fix table issues that may occur for example at the Slider creation process.",'revslider'); ?></i>
                </div>
            </div>

		</form>
	</div>
	<p>
		<a id="button_save_general_settings" class="button-primary revgreen" original-title=""><?php _e('Save Settings', 'revslider'); ?></a>
	</p>
	<span id="loader_general_settings" class="loader_round mleft_10" style="display: none;"></span>

</div>
