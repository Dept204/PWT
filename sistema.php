<?php
//includes a librerias
include('config.php');
define('PATHLIB',PATHAPP . LIB);
date_default_timezone_set(ZONA_HORARIA);
include(PATHLIB . 'adodb/adodb.inc.php');
//include(PATHLIB . 'adodb/adodb-exceptions.inc.php'); 
include(PATHLIB . 'smarty/Smarty.class.php');

//clases del sistema
class Conexion{
	function Conectar(){
		$this->server = DB_DBMS;
		$this->host = DB_HOST;
		$this->userdb = DB_USER;
		$this->passdb = DB_PASS;
		$this->database = DB_NAME;
		$this->DB = ADONewConnection($this->server);
		if(!$this->DB->PConnect($this->host,$this->userdb,
								$this->passdb,$this->database))
				throw new Exception("No se pudo iniciar la aplicación");
	}
}

class Sistema extends Conexion{
	//variables
	var $rs = '';
	var $query = '';
 	public $smarty;

 	//constructor de la clase
 	function __construct(){
 		try {
			parent::Conectar();
			$this->smarty = new Smarty();
		}
	    catch (exception $e) { 
               Sistema::terminarapp($e->getMessage());
        }
 		
 	}

 	//consultas
	public function query($query){
		$this->query = $query;
		$this->rs = $this->DB->Execute($this->query);
		if($this->DB->ErrorMsg()){
				$this->error($this->DB->ErrorMsg());
		}
	}

	//plantillas
	public function smarty(){
		$this->smarty->setTemplateDir(PATHAPP . TEMPLATES);
		$this->smarty->setCompileDir(PATHAPP . TEMPLATES_C);
		$this->smarty->setCacheDir(PATHAPP . CACHE);
		$this->smarty->setConfigDir(PATHAPP . CONFIGS);
		$this->smarty->debugging = false;
		$this->smarty->caching = true;
		$this->smarty->cache_lifetime = 0;
	}

	//mostrar tabla
	public function mostrartabla($query){
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$datos = $this->DB->GetAll($query);
		$nombrescolumnas = array_keys($datos[0]);
		$this->smarty->assign('nombrescolumnas', $nombrescolumnas);
		$this->smarty->assign('datos', $datos);
		return $this->smarty->fetch('mostrartabla.html');
	}

	public function error($mensaje){
		$this->smarty->assign('mensaje', $mensaje);
		return $this->smarty->fetch('error.html');
	}

	public function terminarapp($mensaje){
		$this->smarty = new Smarty();
		$this->smarty->assign('mensaje', $mensaje);
		$this->smarty->display('terminarapp.html');
		die();
	}

	public function login($email,$contrasena){
		$contrasena = md5($contrasena);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		    $this->error("La dirección de correo es invalida");
		}
		$query = "select * from usuario 
			      where email ='$email' and contrasena='$contrasena'";
		$this->query($query);
		if($this->rs->_numOfRows){
			//luislao del futuro falta programar el login
			echo "Login correcto";
		}else{
			$this->error("Usuario/contraseña invalida");
		}

	}


}
//instanciamos web
$web = new Sistema;
?>