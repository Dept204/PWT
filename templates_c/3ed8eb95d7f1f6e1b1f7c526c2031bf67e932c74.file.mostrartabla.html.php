<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-16 13:20:38
         compiled from "./templates/mostrartabla.html" */ ?>
<?php /*%%SmartyHeaderCode:71768900056e6f742221a31-90641969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ed8eb95d7f1f6e1b1f7c526c2031bf67e932c74' => 
    array (
      0 => './templates/mostrartabla.html',
      1 => 1458155703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71768900056e6f742221a31-90641969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e6f742338847_34477704',
  'variables' => 
  array (
    'nombrescolumnas' => 0,
    'datos' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6f742338847_34477704')) {function content_56e6f742338847_34477704($_smarty_tpl) {?>
    <table class="table table-striped">
	    <tr>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['campos'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['campos']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['name'] = 'campos';
$_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nombrescolumnas']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['campos']['total']);
?>
			        <th><?php echo $_smarty_tpl->tpl_vars['nombrescolumnas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['campos']['index']];?>
</th>
			<?php endfor; endif; ?>
	    </tr>
		 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['registro'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['registro']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['name'] = 'registro';
$_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datos']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['registro']['total']);
?> 
		    <tr> 
		    <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['registro']['index']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['dato']->key;
?> 
		       <td><?php echo $_smarty_tpl->tpl_vars['dato']->value;?>
</td> 
		    <?php } ?> 
		    </tr> 
		 <?php endfor; endif; ?> 
	</table>
<?php }} ?>
