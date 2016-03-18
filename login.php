<?php
include("sistema.php");
if(isset($_REQUEST['datos']))
	$web->login($_REQUEST['datos']['email'],$_REQUEST['datos']['contrasena']);
else
	$web->smarty->display('formulario_login.html');

?>
