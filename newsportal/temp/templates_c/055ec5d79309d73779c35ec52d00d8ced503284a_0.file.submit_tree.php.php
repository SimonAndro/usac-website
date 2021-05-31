<?php
/* Smarty version 3.1.32, created on 2021-05-30 11:31:53
  from 'E:\Ampps\www\usac-website\newsportal\themes\classic\submit_tree.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_60b377a9134a59_80238222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '055ec5d79309d73779c35ec52d00d8ced503284a' => 
    array (
      0 => 'E:\\Ampps\\www\\usac-website\\newsportal\\themes\\classic\\submit_tree.php',
      1 => 1566482717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b377a9134a59_80238222 (Smarty_Internal_Template $_smarty_tpl) {
?><select name="idblog" id="firstfield" class="form-control" data-validation="length" data-validation-length="5-100">
<option value="">----------</option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categori']->value, 'caty');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['caty']->value) {
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['caty']->value['catid'];?>
|<?php echo $_smarty_tpl->tpl_vars['caty']->value['name'];?>
|<?php echo $_smarty_tpl->tpl_vars['caty']->value['seoname'];?>
"> <?php echo stripslashes($_smarty_tpl->tpl_vars['caty']->value['name']);?>
</option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcat']->value, 'inc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inc']->value) {
?> 
<?php if ($_smarty_tpl->tpl_vars['inc']->value['cord'] != 0 && $_smarty_tpl->tpl_vars['caty']->value['catid'] == $_smarty_tpl->tpl_vars['inc']->value['parent']) {?>
<option value="<?php echo $_smarty_tpl->tpl_vars['inc']->value['catid'];?>
|<?php echo $_smarty_tpl->tpl_vars['inc']->value['name'];?>
|<?php echo $_smarty_tpl->tpl_vars['inc']->value['seoname'];?>
">&nbsp;&nbsp;<?php echo stripslashes($_smarty_tpl->tpl_vars['inc']->value['name']);?>
</option>
<?php }?> 
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>





<?php }
}
