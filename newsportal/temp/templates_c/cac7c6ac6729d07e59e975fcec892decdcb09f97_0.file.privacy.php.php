<?php
/* Smarty version 3.1.32, created on 2021-05-30 03:13:27
  from 'E:\Ampps\www\usac-website\newsportal\themes\classic\privacy.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_60b302d7c80d73_50802129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cac7c6ac6729d07e59e975fcec892decdcb09f97' => 
    array (
      0 => 'E:\\Ampps\\www\\usac-website\\newsportal\\themes\\classic\\privacy.php',
      1 => 1566755534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:themes/".((string)$_smarty_tpl->tpl_vars[\'themes\']->value)."/maindir.php' => 1,
    'file:themes/".((string)$_smarty_tpl->tpl_vars[\'themes\']->value)."/footer.php' => 1,
  ),
),false)) {
function content_60b302d7c80d73_50802129 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Ampps\\www\\usac-website\\newsportal\\libs\\plugins\\modifier.CloseTags.php','function'=>'smarty_modifier_CloseTags',),));
?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="ROBOTS" content="All" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metadesc']->value;?>
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
<title><?php echo $_smarty_tpl->tpl_vars['lang']->value[247];?>
 <?php echo $_smarty_tpl->tpl_vars['sitetitle']->value;?>
</title>
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
<div class="col-md-12">
<h4><?php echo $_smarty_tpl->tpl_vars['lang']->value[247];?>
 <?php echo $_smarty_tpl->tpl_vars['sitetitle']->value;?>
</h4>
</div>
</div>
<div class="row mt-4">
<div class="col-md-12">
<?php echo smarty_modifier_CloseTags(stripslashes(htmlspecialchars_decode($_smarty_tpl->tpl_vars['siteprivacy']->value)));?>

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
$(function(){
$('#coolMenu').find('> li').hover(function(){
$(this).find('ul')
.removeClass('noJS')
.stop(true, true).toggle('fast');
});
});
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:themes/".((string)$_smarty_tpl->tpl_vars['themes']->value)."/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
