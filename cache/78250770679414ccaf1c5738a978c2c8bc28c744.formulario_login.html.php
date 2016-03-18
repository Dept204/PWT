<?php /*%%SmartyHeaderCode:113029727156e6eeca141b57-22859242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78250770679414ccaf1c5738a978c2c8bc28c744' => 
    array (
      0 => '/Users/luislao/Sites/prograweb/ferreweb/templates/formulario_login.html',
      1 => 1457975279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113029727156e6eeca141b57-22859242',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e6f16c08ae60_99838846',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6f16c08ae60_99838846')) {function content_56e6f16c08ae60_99838846($_smarty_tpl) {?><form method="POST" action="login.php">
	<label>Email:</label> <input type="text" name="datos[email]" /><br />
	<label>Contraseña:</label> <input type="password" name="datos[contrasena]" />
	<input type="submit" name="enviar" value="Ingresar al sistema" />
</form><?php }} ?>
