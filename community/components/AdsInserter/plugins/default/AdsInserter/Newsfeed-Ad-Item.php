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
?>
<div class="ossn-ad-item">
	<div class="row">
		<div class="col-md-12">
			<div class="ad-title"><?php echo $params['item']->title;?></div>
			<img class="ads-inserter-newsfeed-ad-image" src="<?php echo ossn_ads_image_url($params['item']->guid); ?>" />
			<div class="ads-inserter-newsfeed-ad-description"><?php echo $params['item']->description;?></div>
			<div class="ad-link"><a target="_blank" href="<?php echo $params['item']->site_url;?>"><?php echo $params['item']->site_url;?></a></div>
		</div>
	</div>
</div>
