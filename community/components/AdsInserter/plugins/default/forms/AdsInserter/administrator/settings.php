<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$reduced_placement_setting = '';
$aboutpage_ad_setting = '';
$blogpage_ad_setting = '';
$component = new OssnComponents;
$settings = $component->getComSettings('AdsInserter');
if($settings) {
	$reduced_placement_setting = $settings->reduced_placement;
	$aboutpage_ad_setting = $settings->aboutpage_ad;
	$blogpage_ad_setting = $settings->blogpage_ad;
	$wide_screen_insert_setting = $settings->wide_screen_insert;
	$hide_column_ads_setting = $settings->hide_column_ads;
}
?> 

<br />
<br />
<input type="checkbox" name="reduced_placement" value='checked' <?php echo $reduced_placement_setting; ?>> <?php echo ossn_print('com:adsinserter:reduce:placements'); ?>
<br />
<br />
<input type="checkbox" name="aboutpage_ad" value='checked' <?php echo $aboutpage_ad_setting; ?>> <?php echo ossn_print('com:adsinserter:aboutpage:ad'); ?>
<br />
<br />
<input type="checkbox" name="blogpage_ad" value='checked' <?php echo $blogpage_ad_setting; ?>> <?php echo ossn_print('com:adsinserter:blogpage:ad'); ?>
<br />
<br />
<input type="checkbox" name="wide_screen_insert" value='checked' <?php echo $wide_screen_insert_setting; ?>> <?php echo ossn_print('com:adsinserter:widescreen:insert'); ?>
<br />
<br />
<input type="checkbox" name="hide_column_ads" value='checked' <?php echo $hide_column_ads_setting; ?>> <?php echo ossn_print('com:adsinserter:hide:column:ads'); ?>
<br />
<br />
<input type="submit" value="<?php echo ossn_print('save');?>" class="btn btn-success"/>
