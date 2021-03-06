<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
 
$component = new OssnComponents;
$modes = array(
		'off',
		'on'
	);
$mobile_rssbar = input('mobile_rssbar');
$input = input('rss');
$vars = array(
		'mobile_rssbar' => $mobile_rssbar,
		'rss_html' => $input
		);
if(in_array($mobile_rssbar, $modes)) {
	if($component->setSettings('RssFeed', $vars)){
			ossn_trigger_message(ossn_print('ossn:admin:settings:saved'));
			redirect(REF);
	}
}
ossn_trigger_message(ossn_print('ossn:admin:settings:save:error'), 'error');
redirect(REF);