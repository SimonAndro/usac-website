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
?>
<div class="row ossn-page-contents">
	<div class="col-md-6 home-left-contents">
		<div class="logo">
			<?php if(ossn_site_settings('cache') == true){?>
			<img src="<?php echo ossn_theme_url();?>images/logo.png" />
			<?php } else { ?>
			<img src="<?php echo ossn_theme_url();?>images/logo.png?v=<?php echo time();?>" />
			<?php } ?>
		</div>
		<div class="description">
			<?php echo ossn_print('home:top:heading', array(ossn_site_settings('site_name'))); ?>
		</div>
		<div class="buttons">
			<a href="<?php echo ossn_site_url('login');?>"
				class="btn btn-primary"><?php echo ossn_print('site:login'); ?></a>
			<a href="<?php echo ossn_site_url('resetlogin');?>"
				class="btn btn-warning"><?php echo ossn_print('reset:login'); ?></a>
		</div>
		<ul class="some-icons">
			<li><i class="fa fa-users"></i></li>
			<li><i class="fa fa-comments-o"></i></li>
			<li><i class="fa fa-envelope"></i></li>
			<li><i class="fa fa-globe"></i></li>
			<li><i class="fa fa-picture-o"></i></li>
			<li><i class="fa fa-video-camera"></i></li>
			<li><i class="fa fa-map-marker"></i></li>
			<li><i class="fa fa-calendar"></i></li>
		</ul>
	</div>
	<div class="col-md-6">
			<!-- <?php 
			$contents = ossn_view_form('signup', array(
        					'id' => 'ossn-home-signup',
        				'action' => ossn_site_url('action/user/register')
	   	 	));
			$heading = "<p>".ossn_print('its:free')."</p>";
			echo ossn_plugin_view('widget/view', array(
						'title' => ossn_print('create:account'),
						'contents' => $heading.$contents,
			));
			?> -->
		<style>
			.card {
				/* Add shadows to create the "card" effect */
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				transition: 0.3s;
			}
			.card-container{
				width:100%;
				background-color:#fff;
				padding: 20px;
			}
		</style>
		<div class="card">
			<div class="card-container">
				The USAC Social Community is accesible to registered members of USAC.
				If you have no account, Register as USAC Member to access the social community.
			</div>
		</div>

		<a href="./../register.php" type="button" class="btn btn-primary btn-lg btn-block" style="margin-top:10px;">Member Registration</a>
	</div>
</div>