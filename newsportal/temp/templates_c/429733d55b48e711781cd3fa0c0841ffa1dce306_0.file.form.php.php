<?php
/* Smarty version 3.1.32, created on 2021-05-10 19:37:27
  from 'E:\Ampps\www\phpenter\themes\classic\form.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_60998b7709d8a8_86045223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '429733d55b48e711781cd3fa0c0841ffa1dce306' => 
    array (
      0 => 'E:\\Ampps\\www\\phpenter\\themes\\classic\\form.php',
      1 => 1566482707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60998b7709d8a8_86045223 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="incform">
<form name="cform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/comment.php">
<input type="hidden" name="comrev" value="<?php echo $_smarty_tpl->tpl_vars['incname']->value;?>
" />
<input type="hidden" name="main" value="0" />
<input type="hidden" name="helper" value="<?php echo $_smarty_tpl->tpl_vars['helper']->value;?>
" />
<input type="hidden" name="idblog" value="<?php echo $_smarty_tpl->tpl_vars['idblog']->value;?>
" />
<div class="row mt-3">
<div class="col-md-12">
<?php echo $_smarty_tpl->tpl_vars['lang']->value[129];?>

</div>
</div>
<div class="row">
<div class="col-md-12">
<textarea name="comment" rows="6" class="form-control" required="required"></textarea>
</div>
</div>
<div class="row mt-3">
<div class="col-md-12">
<input type="submit" class="btn btn-danger" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value[130];?>
" />
</div>
</div>
</form>
</div><?php }
}
