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
define('__RIGHT_COLUMN_FOCUSIZER__', ossn_route()->com . 'RightColumnFocusizer/');
function com_RightColumnFocusizer_init() {
	ossn_extend_view('js/opensource.socialnetwork', 'js/RightColumnFocusizer');
	ossn_extend_view('css/ossn.default', 'css/RightColumnFocusizer');
	if(com_is_active('OssnAutoPagination')) {
		ossn_add_hook('newsfeed', "sidebar:right", 'com_RightColumnFocusizer_sidebar_footer', 1000);
		ossn_add_hook('profile', 'modules', 'com_RightColumnFocusizer_sidebar_footer', 1000);
		ossn_add_hook('group', 'widgets', 'com_RightColumnFocusizer_sidebar_footer', 1000);
		ossn_add_hook('theme', 'sidebar:right', 'com_RightColumnFocusizer_sidebar_footer', 1000);
	}
}

function com_RightColumnFocusizer_sidebar_footer($hook, $tye, $return){
	$return[] = "<footer class='sidebar-footer'><div class='sidebar-footer-content' style='display: none'><div class='ossn-footer-menu'>" . str_replace('menu-footer-powered', 'sidebar-footer-powered', ossn_plugin_view('menus/sidebar_footer')) . "</div></div></footer>";
	return $return;
}

ossn_register_callback('ossn', 'init', 'com_RightColumnFocusizer_init');
