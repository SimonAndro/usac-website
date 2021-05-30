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
            	<img src="<?php echo ossn_theme_url();?>images/logo.png" />
            </div>	
            <div class="description">
            	<?php echo ossn_print('home:top:heading', array(ossn_site_settings('site_name'))); ?>
            </div>
            <div class="buttons">
            </div>
           	 <ul  class="some-icons">
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
	   <div class="tab">
	   		<button class="tablinks" onclick="openTab(event, 'Login')">Login</button>
  			<button class="tablinks" onclick="openTab(event, 'Signup')">Signup</button>
		</div>
		<div id="Signup" class="tabcontent active">
    		<?php 
				$contents = ossn_view_form('signup', array(
        						'id' => 'ossn-home-signup',
        					'action' => ossn_site_url('action/user/register')
	   	 		));
				$heading = "<p>".ossn_print('its:free')."</p>";
				echo ossn_plugin_view('widget/view', array(
							'title' => ossn_print('create:account'),
							'contents' => $heading.$contents,
				));
			?>	       			
       </div>   
		<div id="Login" class="tabcontent">
	   		<?php 
				$contents = ossn_view_form('login2', array(
            			'id' => 'ossn-login',
           				'action' => ossn_site_url('action/user/login'),
        		));
				echo ossn_plugin_view('widget/view', array(
							'title' => ossn_print('site:login'),
							'contents' => $contents,
				));
				?>	  
		</div>
			<script>
				function openTab(evt, TabName) {
  				var i, tabcontent, tablinks;
  				tabcontent = document.getElementsByClassName("tabcontent");
  					for (i = 0; i < tabcontent.length; i++) {
    					tabcontent[i].style.display = "none";
  					}
  				tablinks = document.getElementsByClassName("tablinks");
  					for (i = 0; i < tablinks.length; i++) {
    					tablinks[i].className = tablinks[i].className.replace(" active", "");
 			 		}
  				document.getElementById(TabName).style.display = "block";
  				evt.currentTarget.className += " active";
				}
				document.getElementsByClassName('tablinks')[1].click()
			</script> 
</div>	