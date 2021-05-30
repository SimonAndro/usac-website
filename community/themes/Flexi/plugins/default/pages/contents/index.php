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
		<div class="col-md-7 home-left-contents">
            <?php
			$contents = ossn_view_form('login2', array(
            		'id' => 'ossn-login',
           			'action' => ossn_site_url('action/user/login'),
        	));
			echo ossn_plugin_view('widget/view', array(
						'title' => ossn_print('site:login'),
						'contents' => $contents,
			));
					
				echo ossn_plugin_view('widget/view', array(
					'title' => ossn_print('flexi:latest:members'),
					'contents' => ossn_plugin_view('flexi/members_widget', array('count' => 20))
				));
			?>
 	   </div>   
       <div class="col-md-5">
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
			?>	       			 -->
			<style>
			.card {
				/* Add shadows to create the "card" effect */
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				transition: 0.3s;
			}

			.card-container {
				width: 100%;
				background-color: #fff;
				padding: 20px;
			}
		</style>
		<div class="card">
			<div class="card-container">
				The USAC Social Community is accesible to registered members of USAC.
				If you have no account, Register as USAC Member to access the social community.
			</div>
		</div>

		<a href="./../register.php" type="button" class="btn btn-primary btn-lg btn-block"
			style="margin-top:10px;">Member Registration</a>
	</div>
       </div>     
</div>	
