<?php
/* Smarty version 3.1.32, created on 2021-05-10 19:42:44
  from 'E:\Ampps\www\phpenter\themes\classic\profile.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_60998cb499b520_10609453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd47f9a6db7c056af4bd6a117eb1f39780997c86b' => 
    array (
      0 => 'E:\\Ampps\\www\\phpenter\\themes\\classic\\profile.php',
      1 => 1566757898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:themes/".((string)$_smarty_tpl->tpl_vars[\'themes\']->value)."/maindir.php' => 1,
    'file:themes/".((string)$_smarty_tpl->tpl_vars[\'themes\']->value)."/footer.php' => 1,
  ),
),false)) {
function content_60998cb499b520_10609453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Ampps\\www\\phpenter\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'E:\\Ampps\\www\\phpenter\\libs\\plugins\\modifier.timeAgo.php','function'=>'smarty_modifier_timeAgo',),2=>array('file'=>'E:\\Ampps\\www\\phpenter\\libs\\plugins\\function.paginate_prev.php','function'=>'smarty_function_paginate_prev',),3=>array('file'=>'E:\\Ampps\\www\\phpenter\\libs\\plugins\\function.paginate_next.php','function'=>'smarty_function_paginate_next',),4=>array('file'=>'E:\\Ampps\\www\\phpenter\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if ($_smarty_tpl->tpl_vars['profile']->value == true) {?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="ROBOTS" content="All" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<link href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['themes']->value;?>
/styles/images/favicon.ico" type="image/x-icon" rel="shortcut icon" />
<?php if ($_smarty_tpl->tpl_vars['frontext']->value == 'rtl') {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['themes']->value;?>
/styles/rtl/bootstrap.min.css" />
<?php } else { ?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['themes']->value;?>
/styles/bootstrap.min.css" />
<?php }?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['themes']->value;?>
/styles/font-awesome.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['themes']->value;?>
/styles/basic.css" />
<link rel="alternate" type="application/atom+xml" title="<?php echo $_smarty_tpl->tpl_vars['sitetitle']->value;?>
 - RSS" href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/rss.php" />
<?php
$__section_profile_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['profile']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_profile_0_total = $__section_profile_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_profile'] = new Smarty_Variable(array());
if ($__section_profile_0_total !== 0) {
for ($__section_profile_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_profile']->value['index'] = 0; $__section_profile_0_iteration <= $__section_profile_0_total; $__section_profile_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_profile']->value['index']++){
if ($_smarty_tpl->tpl_vars['profile']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_profile']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_profile']->value['index'] : null)]['thumbs'] == true) {?>
<link href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/maxthumb/<?php echo $_smarty_tpl->tpl_vars['profile']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_profile']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_profile']->value['index'] : null)]['thumbs'];?>
" type="image/x-icon" rel="shortcut icon" />
<?php } else { ?>
<link href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['themes']->value;?>
/styles/images/favicon.ico" type="image/x-icon" rel="shortcut icon" />
<?php }?>
<title><?php echo $_smarty_tpl->tpl_vars['profile']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_profile']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_profile']->value['index'] : null)]['username'];?>
 - <?php echo $_smarty_tpl->tpl_vars['sitetitle']->value;?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['profile']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_profile']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_profile']->value['index'] : null)]['username'];?>
, <?php echo $_smarty_tpl->tpl_vars['metadesc']->value;?>
" />
<?php
}
}
?>
</head> 
<body>
<?php $_smarty_tpl->_subTemplateRender("file:themes/".((string)$_smarty_tpl->tpl_vars['themes']->value)."/maindir.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="container minheight">
<?php if ($_smarty_tpl->tpl_vars['adsoffon']->value == 2) {?>
<div class="row mt-2">
<div class="col-md-12 text-center">
<?php echo $_smarty_tpl->tpl_vars['senseup']->value;?>

</div>
</div>
<?php }?>
<div class="row mt-4">
<div class="col-md-8">
<div class="row mt-1">
<div class="col-md-12 mb-3">
<?php if ($_smarty_tpl->tpl_vars['fullname']->value == false) {?>
<h4><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value[175];?>
</h4>
<?php } else { ?>
<h4><?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value[175];?>
</h4>
<?php }?>
</div>
</div>
<div class="row mt-1 row-eq-height">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newser']->value, 'le');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['le']->value) {
?>
<div class="col-md-4 mb-3">
<div class="firstblock">
<?php if ($_smarty_tpl->tpl_vars['rewritemod']->value == 1) {?><a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/news/<?php echo $_smarty_tpl->tpl_vars['le']->value['univer'];?>
/<?php echo $_smarty_tpl->tpl_vars['le']->value['idblog'];?>
/<?php echo $_smarty_tpl->tpl_vars['le']->value['helper'];?>
.html">
<?php if ($_smarty_tpl->tpl_vars['le']->value['image'] != 0) {?>
<img src="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/minthumb/<?php echo $_smarty_tpl->tpl_vars['le']->value['image'];?>
" width="222" height="135" alt="<?php echo $_smarty_tpl->tpl_vars['le']->value['title'];?>
" />
<?php } else { ?>
<img src="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['themes']->value;?>
/styles/images/noimage.png" width="222" height="135" alt="<?php echo $_smarty_tpl->tpl_vars['le']->value['title'];?>
" />
<?php }?>
</a><?php }
if ($_smarty_tpl->tpl_vars['rewritemod']->value == 2) {?><a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/news.php?name=<?php echo $_smarty_tpl->tpl_vars['le']->value['univer'];?>
&amp;cat=<?php echo $_smarty_tpl->tpl_vars['le']->value['idblog'];?>
">
<?php if ($_smarty_tpl->tpl_vars['le']->value['image'] != 0) {?>
<img src="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/minthumb/<?php echo $_smarty_tpl->tpl_vars['le']->value['image'];?>
" width="222" height="135" alt="<?php echo $_smarty_tpl->tpl_vars['le']->value['title'];?>
" />
<?php } else { ?>
<img src="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['themes']->value;?>
/styles/images/noimage.png" width="222" height="135" alt="<?php echo $_smarty_tpl->tpl_vars['le']->value['title'];?>
" />
<?php }?>
</a>
<?php }?>
<div class="p-3">
<?php if ($_smarty_tpl->tpl_vars['rewritemod']->value == 1) {?><h5><a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/news/<?php echo $_smarty_tpl->tpl_vars['le']->value['univer'];?>
/<?php echo $_smarty_tpl->tpl_vars['le']->value['idblog'];?>
/<?php echo $_smarty_tpl->tpl_vars['le']->value['helper'];?>
.html"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['le']->value['title'],70);?>
</a></h5><?php }
if ($_smarty_tpl->tpl_vars['rewritemod']->value == 2) {?><h5><a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/news.php?name=<?php echo $_smarty_tpl->tpl_vars['le']->value['univer'];?>
&amp;cat=<?php echo $_smarty_tpl->tpl_vars['le']->value['idblog'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['le']->value['title'],70);?>
</a></h5><?php }?>
<span class="firstline"><?php echo smarty_modifier_timeAgo($_smarty_tpl->tpl_vars['le']->value['date']);?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value[116];?>
</span>
</div>
</div>
</div>
<?php
}
} else {
?>
<div class="alert alert-primary m-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value[290];?>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div class="row mt-5 text-center">
<div class="col-md-12 mb-5 text-center">
<nav aria-label="Page navigation">
<ul class="pagination text-center">
<li class="page-item"><?php echo smarty_function_paginate_prev(array(),$_smarty_tpl);?>
</li>
<li class="page-item"><span class="page-link"><?php echo $_smarty_tpl->tpl_vars['lang']->value[120];?>
 <?php echo $_smarty_tpl->tpl_vars['paginate']->value['first'];?>
 - <?php echo $_smarty_tpl->tpl_vars['paginate']->value['last'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value[121];?>
 <?php echo $_smarty_tpl->tpl_vars['paginate']->value['total'];?>
</span></li>
<li class="page-item"><?php echo smarty_function_paginate_next(array(),$_smarty_tpl);?>
</li>
</ul>
</nav>
</div>
</div>
</div>
<div class="col-md-4">
<div class="row mt-1 mb-3">
<div class="col-md-12">
<div class="menuliner"><?php echo $_smarty_tpl->tpl_vars['lang']->value[133];?>
</div>
</div>
</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
<div class="topright">
<div class="row mb-3">
<div class="col-sm-2">
<?php if ($_smarty_tpl->tpl_vars['m']->value['thumbs'] != false) {?>
<span class="gallery">
<a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['m']->value['thumbs'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/maxthumb/<?php echo $_smarty_tpl->tpl_vars['m']->value['thumbs'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['m']->value['username'];?>
" height="50" width="50" /></a>
</span>
<?php } else { ?>
<img src="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['themes']->value;?>
/styles/images/noimage.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['m']->value['username'];?>
" height="50" width="50" />
<?php }?>
</div>
<div class="col-sm-10">
<?php if ($_smarty_tpl->tpl_vars['m']->value['fullname'] == false) {
if ($_smarty_tpl->tpl_vars['rewritemod']->value == 1) {?><h5><a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/profile/<?php echo $_smarty_tpl->tpl_vars['m']->value['usid'];?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value['username'];?>
</a></h5><?php }
if ($_smarty_tpl->tpl_vars['rewritemod']->value == 2) {?><h5><a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['m']->value['usid'];?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value['username'];?>
</a></h5><?php }
} else {
if ($_smarty_tpl->tpl_vars['rewritemod']->value == 1) {?><h5><a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/profile/<?php echo $_smarty_tpl->tpl_vars['m']->value['usid'];?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value['fullname'];?>
</a></h5><?php }
if ($_smarty_tpl->tpl_vars['rewritemod']->value == 2) {?><h5><a href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['m']->value['usid'];?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value['fullname'];?>
</a></h5><?php }
}
echo $_smarty_tpl->tpl_vars['lang']->value[161];?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value['date'],"%a, %b %e, %Y");?>

<br />
<?php echo $_smarty_tpl->tpl_vars['lang']->value[162];?>
 <?php if ($_smarty_tpl->tpl_vars['m']->value['lastime'] == '0000-00-00 00:00:00') {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value['date'],"%a, %b %e, %Y");
} else {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value['lastime'],"%a, %b %e, %Y");
}?>
<br />
<?php if ($_smarty_tpl->tpl_vars['m']->value['biosi'] == true) {
echo $_smarty_tpl->tpl_vars['m']->value['biosi'];
} else {
echo $_smarty_tpl->tpl_vars['lang']->value[163];
}?>
</div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['adsoffon']->value == '2') {?>
<div class="row mt-4 mb-3">
<div class="col-md-12">
<div class="menuliner"><?php echo $_smarty_tpl->tpl_vars['lang']->value[246];?>
</div>
</div>
</div>
<div class="row mt-4 mb-3 text-center">
<div class="col-md-12">
<?php echo $_smarty_tpl->tpl_vars['sensedown']->value;?>

</div>
</div>
<?php }?>
</div>
</div>
</div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/scripts/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/scripts/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
/*!* baguetteBox.js* @author  feimosi* @version 1.11.0* @url https://github.com/feimosi/baguetteBox.js*/
!function(e,t){"use strict";"function"==typeof define&&define.amd?define(t):"object"==typeof exports?module.exports=t():e.baguetteBox=t()}(this,function(){"use strict";var r,s,l,u,n,o='<svg width="44" height="60"><polyline points="30 10 10 30 30 50" stroke="rgba(255,255,255,0.5)" stroke-width="4"stroke-linecap="butt" fill="none" stroke-linejoin="round"/></svg>',i='<svg width="44" height="60"><polyline points="14 10 34 30 14 50" stroke="rgba(255,255,255,0.5)" stroke-width="4"stroke-linecap="butt" fill="none" stroke-linejoin="round"/></svg>',a='<svg width="30" height="30"><g stroke="rgb(160,160,160)" stroke-width="4"><line x1="5" y1="5" x2="25" y2="25"/><line x1="5" y1="25" x2="25" y2="5"/></g></svg>',d={},c={captions:!0,buttons:"auto",fullScreen:!1,noScrollbars:!1,bodyClass:"baguetteBox-open",titleTag:!1,async:!1,preload:2,animation:"slideIn",afterShow:null,afterHide:null,onChange:null,overlayBackgroundColor:"rgba(0,0,0,.8)"},f={},g=[],p=0,b=!1,m={},v=!1,h=/.+\.(gif|jpe?g|png|webp)/i,y={},w=[],t=null,k=function(e){-1!==e.target.id.indexOf("baguette-img")&&Y()},x=function(e){e.stopPropagation?e.stopPropagation():e.cancelBubble=!0,X()},C=function(e){e.stopPropagation?e.stopPropagation():e.cancelBubble=!0,q()},E=function(e){e.stopPropagation?e.stopPropagation():e.cancelBubble=!0,Y()},B=function(e){m.count++,1<m.count&&(m.multitouch=!0),m.startX=e.changedTouches[0].pageX,m.startY=e.changedTouches[0].pageY},T=function(e){if(!v&&!m.multitouch){e.preventDefault?e.preventDefault():e.returnValue=!1;var t=e.touches[0]||e.changedTouches[0];40<t.pageX-m.startX?(v=!0,X()):t.pageX-m.startX<-40?(v=!0,q()):100<m.startY-t.pageY&&Y()}},N=function(){m.count--,m.count<=0&&(m.multitouch=!1),v=!1},L=function(){N()},A=function(e){"block"===r.style.display&&r.contains&&!r.contains(e.target)&&(e.stopPropagation(),I())};function P(e){if(y.hasOwnProperty(e)){var t=y[e].galleries;[].forEach.call(t,function(e){[].forEach.call(e,function(e){U(e.imageElement,"click",e.eventHandler)}),g===e&&(g=[])}),delete y[e]}}function S(e){switch(e.keyCode){case 37:X();break;case 39:q();break;case 27:Y();break;case 36:!function(e){e&&e.preventDefault();D(0)}(e);break;case 35:!function(e){e&&e.preventDefault();D(g.length-1)}(e)}}function F(e,t){if(g!==e){for(g=e,function(e){e=e||{};for(var t in c)d[t]=c[t],void 0!==e[t]&&(d[t]=e[t]);s.style.transition=s.style.webkitTransition="fadeIn"===d.animation?"opacity .4s ease":"slideIn"===d.animation?"":"none","auto"===d.buttons&&("ontouchstart"in window||1===g.length)&&(d.buttons=!1);l.style.display=u.style.display=d.buttons?"":"none";try{r.style.backgroundColor=d.overlayBackgroundColor}catch(e){}}(t);s.firstChild;)s.removeChild(s.firstChild);for(var n,o=[],i=[],a=w.length=0;a<e.length;a++)(n=G("div")).className="full-image",n.id="baguette-img-"+a,w.push(n),o.push("baguetteBox-figure-"+a),i.push("baguetteBox-figcaption-"+a),s.appendChild(w[a]);r.setAttribute("aria-labelledby",o.join(" ")),r.setAttribute("aria-describedby",i.join(" "))}}function H(e){d.noScrollbars&&(document.documentElement.style.overflowY="hidden",document.body.style.overflowY="scroll"),"block"!==r.style.display&&(V(document,"keydown",S),m={count:0,startX:null,startY:null},j(p=e,function(){R(p),z(p)}),O(),r.style.display="block",d.fullScreen&&(r.requestFullscreen?r.requestFullscreen():r.webkitRequestFullscreen?r.webkitRequestFullscreen():r.mozRequestFullScreen&&r.mozRequestFullScreen()),setTimeout(function(){r.className="visible",d.bodyClass&&document.body.classList&&document.body.classList.add(d.bodyClass),d.afterShow&&d.afterShow()},50),d.onChange&&d.onChange(p,w.length),t=document.activeElement,I(),b=!0)}function I(){d.buttons?l.focus():n.focus()}function Y(){d.noScrollbars&&(document.documentElement.style.overflowY="auto",document.body.style.overflowY="auto"),"none"!==r.style.display&&(U(document,"keydown",S),r.className="",setTimeout(function(){r.style.display="none",document.fullscreen&&(document.exitFullscreen?document.exitFullscreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitExitFullscreen&&document.webkitExitFullscreen()),d.bodyClass&&document.body.classList&&document.body.classList.remove(d.bodyClass),d.afterHide&&d.afterHide(),t&&t.focus(),b=!1},500))}function j(t,n){var e=w[t],o=g[t];if(void 0!==e&&void 0!==o)if(e.getElementsByTagName("img")[0])n&&n();else{var i=o.imageElement,a=i.getElementsByTagName("img")[0],r="function"==typeof d.captions?d.captions.call(g,i):i.getAttribute("data-caption")||i.title,s=function(e){var t=e.href;if(e.dataset){var n=[];for(var o in e.dataset)"at-"!==o.substring(0,3)||isNaN(o.substring(3))||(n[o.replace("at-","")]=e.dataset[o]);for(var i=Object.keys(n).sort(function(e,t){return parseInt(e,10)<parseInt(t,10)?-1:1}),a=window.innerWidth*window.devicePixelRatio,r=0;r<i.length-1&&i[r]<a;)r++;t=n[i[r]]||t}return t}(i),l=G("figure");if(l.id="baguetteBox-figure-"+t,l.innerHTML='<div class="baguetteBox-spinner"><div class="baguetteBox-double-bounce1"></div><div class="baguetteBox-double-bounce2"></div></div>',d.captions&&r){var u=G("figcaption");u.id="baguetteBox-figcaption-"+t,u.innerHTML=r,l.appendChild(u)}e.appendChild(l);var c=G("img");c.onload=function(){var e=document.querySelector("#baguette-img-"+t+" .baguetteBox-spinner");l.removeChild(e),!d.async&&n&&n()},c.setAttribute("src",s),c.alt=a&&a.alt||"",d.titleTag&&r&&(c.title=r),l.appendChild(c),d.async&&n&&n()}}function q(){return D(p+1)}function X(){return D(p-1)}function D(e,t){return!b&&0<=e&&e<t.length?(F(t,d),H(e),!0):e<0?(d.animation&&M("left"),!1):e>=w.length?(d.animation&&M("right"),!1):(j(p=e,function(){R(p),z(p)}),O(),d.onChange&&d.onChange(p,w.length),!0)}function M(e){s.className="bounce-from-"+e,setTimeout(function(){s.className=""},400)}function O(){var e=100*-p+"%";"fadeIn"===d.animation?(s.style.opacity=0,setTimeout(function(){f.transforms?s.style.transform=s.style.webkitTransform="translate3d("+e+",0,0)":s.style.left=e,s.style.opacity=1},400)):f.transforms?s.style.transform=s.style.webkitTransform="translate3d("+e+",0,0)":s.style.left=e}function R(e){e-p>=d.preload||j(e+1,function(){R(e+1)})}function z(e){p-e>=d.preload||j(e-1,function(){z(e-1)})}function V(e,t,n,o){e.addEventListener?e.addEventListener(t,n,o):e.attachEvent("on"+t,function(e){(e=e||window.event).target=e.target||e.srcElement,n(e)})}function U(e,t,n,o){e.removeEventListener?e.removeEventListener(t,n,o):e.detachEvent("on"+t,n)}function W(e){return document.getElementById(e)}function G(e){return document.createElement(e)}return[].forEach||(Array.prototype.forEach=function(e,t){for(var n=0;n<this.length;n++)e.call(t,this[n],n,this)}),[].filter||(Array.prototype.filter=function(e,t,n,o,i){for(n=this,o=[],i=0;i<n.length;i++)e.call(t,n[i],i,n)&&o.push(n[i]);return o}),{run:function(e,t){return f.transforms=function(){var e=G("div");return void 0!==e.style.perspective||void 0!==e.style.webkitPerspective}(),f.svg=function(){var e=G("div");return e.innerHTML="<svg/>","http://www.w3.org/2000/svg"===(e.firstChild&&e.firstChild.namespaceURI)}(),f.passiveEvents=function(){var e=!1;try{var t=Object.defineProperty({},"passive",{get:function(){e=!0}});window.addEventListener("test",null,t)}catch(e){}return e}(),function(){if(r=W("baguetteBox-overlay"))return s=W("baguetteBox-slider"),l=W("previous-button"),u=W("next-button"),n=W("close-button");(r=G("div")).setAttribute("role","dialog"),r.id="baguetteBox-overlay",document.getElementsByTagName("body")[0].appendChild(r),(s=G("div")).id="baguetteBox-slider",r.appendChild(s),(l=G("button")).setAttribute("type","button"),l.id="previous-button",l.setAttribute("aria-label","Previous"),l.innerHTML=f.svg?o:"&lt;",r.appendChild(l),(u=G("button")).setAttribute("type","button"),u.id="next-button",u.setAttribute("aria-label","Next"),u.innerHTML=f.svg?i:"&gt;",r.appendChild(u),(n=G("button")).setAttribute("type","button"),n.id="close-button",n.setAttribute("aria-label","Close"),n.innerHTML=f.svg?a:"&times;",r.appendChild(n),l.className=u.className=n.className="baguetteBox-button",function(){var e=f.passiveEvents?{passive:!0}:null;V(r,"click",k),V(l,"click",x),V(u,"click",C),V(n,"click",E),V(s,"contextmenu",L),V(r,"touchstart",B,e),V(r,"touchmove",T,e),V(r,"touchend",N),V(document,"focus",A,!0)}()}(),P(e),function(e,a){var t=document.querySelectorAll(e),n={galleries:[],nodeList:t};return y[e]=n,[].forEach.call(t,function(e){a&&a.filter&&(h=a.filter);var t=[];if(t="A"===e.tagName?[e]:e.getElementsByTagName("a"),0!==(t=[].filter.call(t,function(e){if(-1===e.className.indexOf(a&&a.ignoreClass))return h.test(e.href)})).length){var i=[];[].forEach.call(t,function(e,t){function n(e){e.preventDefault?e.preventDefault():e.returnValue=!1,F(i,a),H(t)}var o={eventHandler:n,imageElement:e};V(e,"click",n),i.push(o)}),n.galleries.push(i)}}),n.galleries}(e,t)},show:D,showNext:q,showPrevious:X,hide:Y,destroy:function(){!function(){var e=f.passiveEvents?{passive:!0}:null;U(r,"click",k),U(l,"click",x),U(u,"click",C),U(n,"click",E),U(s,"contextmenu",L),U(r,"touchstart",B,e),U(r,"touchmove",T,e),U(r,"touchend",N),U(document,"focus",A,!0)}(),function(){for(var e in y)y.hasOwnProperty(e)&&P(e)}(),U(document,"keydown",S),document.getElementsByTagName("body")[0].removeChild(document.getElementById("baguetteBox-overlay")),y={},g=[],p=0}}});
$(function(){
$('#coolMenu').find('> li').hover(function(){
$(this).find('ul')
.removeClass('noJS')
.stop(true, true).toggle('fast');
});
});
$(function(){
baguetteBox.run('.gallery');
});
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:themes/".((string)$_smarty_tpl->tpl_vars['themes']->value)."/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
