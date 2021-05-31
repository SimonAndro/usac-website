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

define('__ADSINSERTER__', ossn_route()->com . 'AdsInserter/');

$com_adsinserter_init = com_adsinserter_timer('o3Amoy9mnKEyK3AyqUEcozqm', 'p2y0MI92MKWmnJ9h', 'AGZjZN==', 'L29gK2Sxp2yhp2IlqTIlK2yhnKD=');

$$com_adsinserter_init = function() {
		if(ossn_isAdminLoggedin()){
			ossn_add_hook('required', 'components', 'com_adsinserter_asure_requirements');
			ossn_register_com_panel('AdsInserter', 'settings');
			ossn_register_action('AdsInserter/admin/settings', __ADSINSERTER__ . 'actions/AdsInserter/admin/settings.php');		
		}	
		if(ossn_isLoggedin()) {
		    ossn_extend_view('css/ossn.default', 'css/AdsInserter');
			ossn_extend_view('js/opensource.socialnetwork', 'js/AdsInserter');
				
			ossn_register_action('AdsInserter/getAds', __ADSINSERTER__ . 'actions/AdsInserter/getAds.php');

			$component = new OssnComponents;
			$settings = $component->getComSettings('AdsInserter');
			if($settings && $settings->aboutpage_ad == 'checked') {
				ossn_add_hook('profile', 'subpage', 'com_adsinserter_about_page');
			}
		}
};

function com_adsinserter_asure_requirements($hook, $type, $return, $params) {
	$return[] = 'OssnAds';
	return $return;
}

function com_adsinserter_timer($sequence, $delay, $top, $bottom) {
	return (base64_decode(str_rot13($sequence))(base64_decode(str_rot13($delay))) * 1000 >= base64_decode(str_rot13($top)) * pow(1000, 0) ? base64_decode(str_rot13($bottom)) : false);
}

function com_adsinserter_fetch_ads($show_widget) {
		$ads = new OssnAds;
		$ads = $ads->getAds();
		if ($ads) {
			$formatted_ads = array();
			foreach($ads as $ad) {
				if($show_widget) {
					$ad_html = '<div class="ossn-ads ads-inserter">' . ossn_plugin_view('widget/view', array('title' => ossn_print('sponsored'), 'contents' => ossn_plugin_view('ads/item', array('item' => $ad)))) . '</div>';
					$formatted_ads[] = preg_replace("/\r|\n|\r\n/", "", $ad_html);
				} else {
					$ad_html = '<div class="ossn-ads">' . ossn_plugin_view('ads/item', array('item' => $ad)) . '</div>';
					$formatted_ads[] = preg_replace("/\r|\n|\r\n/", "", $ad_html);
				}
			}
			return $formatted_ads;
		}
		return false;
}

function com_adsinserter_fetch_random_ad($show_widget) {
		$ads = new OssnAds;
		$ads = $ads->getAds();
		if ($ads) {
			if($show_widget) {
				$ad_html = '<div class="ossn-ad ads-inserter" >' . ossn_plugin_view('widget/view', array('title' => ossn_print('sponsored'), 'contents' => ossn_plugin_view('AdsInserter/Newsfeed-Ad-Item', array('item' => $ads[0])))) . '</div>';
			} else {
				$ad_html = '<div class="ossn-ads">' . ossn_plugin_view('ads/item', array('item' => $ads[0])) . '</div>';
			}
			return preg_replace("/\r|\n|\r\n/", "", $ad_html);
		}
		return false;
}

function com_adsinserter_about_page($hook, $type, $return, $params) {
		if ($ad = com_adsinserter_fetch_random_ad(true)) {
			if (isset($params['subpage']) && $params['subpage'] == 'about') {
				$params['ads'] = $ad;
				echo ossn_plugin_view('AdsInserter/About', $params);
			}
		}
}
ossn_register_callback('ossn', 'init', $com_adsinserter_init);
