<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-16 13:20:38
         compiled from "./templates/marcas.html" */ ?>
<?php /*%%SmartyHeaderCode:180223595456e82b2e7869d9-08690720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd27cc30ecb21fc8150d56c5611001a6d512b3629' => 
    array (
      0 => './templates/marcas.html',
      1 => 1458155649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180223595456e82b2e7869d9-08690720',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e82b2e78df03_16392038',
  'variables' => 
  array (
    'marcas' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e82b2e78df03_16392038')) {function content_56e82b2e78df03_16392038($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<h1>Marcas Disponibles</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium et illum perspiciatis delectus, odit atque nulla, impedit, dolor voluptates, aliquam beatae tempora ad blanditiis ipsam culpa eaque laborum accusamus iure.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum blanditiis repellat dolorem, repudiandae pariatur quod nam ex laudantium in ratione accusantium iusto aliquam nobis ipsam ipsum illum, praesentium? Eaque, deserunt?</p>
<p><?php echo $_smarty_tpl->tpl_vars['marcas']->value;?>
</p>
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
