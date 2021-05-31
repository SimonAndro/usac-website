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
 
define('__FROSTY_FLAKES__', ossn_route()->com . 'FrostyFlakes/');
function com_frostyflakes_init() {
	ossn_extend_view('js/opensource.socialnetwork', 'js/frostyflakes');
}
ossn_register_callback('ossn', 'init', 'com_frostyflakes_init');
