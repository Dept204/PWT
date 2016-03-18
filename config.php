<?php
#ERROR REPORTING
error_reporting(E_ERROR);
##############################################
# VARIABLES DEL SISTEMA ######################
##############################################
define('ZONA_HORARIA'			,"Mexico/General"); //de acuerdo a date_default_timezone_set
define('PATHAPP'				,'/Users/luislao/Sites/prograweb/ferreweb/PWT/'); //slash al final
define('LIB'					,'lib/'); //slash al final
define('TEMPLATES'				,'templates'); // carpeta templates de smarty
define('TEMPLATES_C'			,'templates_c'); // carpeta templates_c de smarty
define('CACHE'					,'cache'); //carpeta cache de smarty
define('CONFIGS'				,'configs'); //carpeta cache de smarty
#MOTOR DE BASE DE DATOS
define('DB_DBMS'				,'mysql'); //motor
define('DB_HOST'				,'luislaodebian.com'); //host
define('DB_NAME'				,'ferreweb'); //nombre de la base de datos
define('DB_USER'				,'gerente'); //usuario
define('DB_PASS'				,'123'); //password

?>