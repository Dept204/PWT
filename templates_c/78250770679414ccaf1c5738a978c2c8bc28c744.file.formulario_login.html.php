<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-14 11:31:35
         compiled from "./templates/formulario_login.html" */ ?>
<?php /*%%SmartyHeaderCode:44000879356e6f577bb2915-93408309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78250770679414ccaf1c5738a978c2c8bc28c744' => 
    array (
      0 => './templates/formulario_login.html',
      1 => 1457975279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44000879356e6f577bb2915-93408309',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e6f577bcffa8_98960820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e6f577bcffa8_98960820')) {function content_56e6f577bcffa8_98960820($_smarty_tpl) {?>
<form method="POST" action="login.php">
	<label>Email:</label> <input type="text" name="datos[email]" /><br />
	<label>Contraseña:</label> <input type="password" name="datos[contrasena]" />
	<input type="submit" name="enviar" value="Ingresar al sistema" />
</form><?php }} ?>
