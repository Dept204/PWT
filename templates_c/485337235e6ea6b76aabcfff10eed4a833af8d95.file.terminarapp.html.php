<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-15 08:18:12
         compiled from "./templates/terminarapp.html" */ ?>
<?php /*%%SmartyHeaderCode:45908165956e72a4ba35eb7-83610342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '485337235e6ea6b76aabcfff10eed4a833af8d95' => 
    array (
      0 => './templates/terminarapp.html',
      1 => 1458051480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45908165956e72a4ba35eb7-83610342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e72a4ba60354_16093344',
  'variables' => 
  array (
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e72a4ba60354_16093344')) {function content_56e72a4ba60354_16093344($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header_terminarapp.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

<?php echo $_smarty_tpl->getSubTemplate ('footer_terminarapp.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
