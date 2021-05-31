<?php
/* Smarty version 3.1.32, created on 2021-05-30 11:59:17
  from 'E:\Ampps\www\usac-website\newsportal\themes\classic\rss.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_60b37e15b6ff88_61959901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09c54426df9b3dffaf63b9f8a3770a03eadd0b2b' => 
    array (
      0 => 'E:\\Ampps\\www\\usac-website\\newsportal\\themes\\classic\\rss.php',
      1 => 1622354401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b37e15b6ff88_61959901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Ampps\\www\\usac-website\\newsportal\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'E:\\Ampps\\www\\usac-website\\newsportal\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'E:\\Ampps\\www\\usac-website\\newsportal\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?><rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
<title><?php echo $_smarty_tpl->tpl_vars['sitetitle']->value;?>
</title>
<description><![CDATA[<?php echo $_smarty_tpl->tpl_vars['metadesc']->value;?>
]]></description>
<link><?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
</link>
<?php
$__section_newser_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['newser']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_newser_0_total = $__section_newser_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_newser'] = new Smarty_Variable(array());
if ($__section_newser_0_total !== 0) {
for ($__section_newser_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index'] = 0; $__section_newser_0_iteration <= $__section_newser_0_total; $__section_newser_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index']++){
?>
<item>
<title><?php echo smarty_modifier_replace(smarty_modifier_replace(stripslashes(preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['newser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index'] : null)]['title']))),"'",''),'"','');?>
 - <?php echo $_smarty_tpl->tpl_vars['sitetitle']->value;?>
</title>
<description><?php if ($_smarty_tpl->tpl_vars['newser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index'] : null)]['image'] != 0) {?><![CDATA[<img src="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/minthumb/<?php echo $_smarty_tpl->tpl_vars['newser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index'] : null)]['image'];?>
" border="0" align="left" alt="" title="" /><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['newser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index'] : null)]['longdesc'])),280);?>
]]><?php } else {
echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['newser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index'] : null)]['longdesc'])),280);
}?></description>
<?php if ($_smarty_tpl->tpl_vars['rewritemod']->value == 1) {?>
<link><?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/news/<?php echo $_smarty_tpl->tpl_vars['newser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index'] : null)]['univer'];?>
/<?php echo $_smarty_tpl->tpl_vars['newser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index'] : null)]['idblog'];?>
/<?php echo $_smarty_tpl->tpl_vars['newser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index'] : null)]['helper'];?>
.html</link>
<guid><?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/news/<?php echo $_smarty_tpl->tpl_vars['newser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index'] : null)]['univer'];?>
/<?php echo $_smarty_tpl->tpl_vars['newser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index'] : null)]['idblog'];?>
/<?php echo $_smarty_tpl->tpl_vars['newser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index'] : null)]['helper'];?>
.html</guid>
<?php }
if ($_smarty_tpl->tpl_vars['rewritemod']->value == 2) {?>
<link><?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/news.php?name=<?php echo $_smarty_tpl->tpl_vars['newser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index'] : null)]['univer'];?>
&amp;cat=<?php echo $_smarty_tpl->tpl_vars['newser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index'] : null)]['idblog'];?>
</link>
<guid><?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/news.php?name=<?php echo $_smarty_tpl->tpl_vars['newser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index'] : null)]['univer'];?>
&amp;cat=<?php echo $_smarty_tpl->tpl_vars['newser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index'] : null)]['idblog'];?>
</guid>
<?php }?>
<pubDate><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['newser']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newser']->value['index'] : null)]['date'],"%a, %e %b %Y %H:%M:%S");?>
 GMT</pubDate>
</item>
<?php
}
}
?>
</channel>
</rss><?php }
}
