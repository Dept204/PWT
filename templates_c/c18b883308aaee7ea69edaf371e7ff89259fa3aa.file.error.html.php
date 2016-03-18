<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-14 15:05:05
         compiled from "./templates/error.html" */ ?>
<?php /*%%SmartyHeaderCode:133886519856e6f6eb5c78a4-35650435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c18b883308aaee7ea69edaf371e7ff89259fa3aa' => 
    array (
      0 => './templates/error.html',
      1 => 1457989475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133886519856e6f6eb5c78a4-35650435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e6f6eb5e4c02_80350456',
  'variables' => 
  array (
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6f6eb5e4c02_80350456')) {function content_56e6f6eb5e4c02_80350456($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
