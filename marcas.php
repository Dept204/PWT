<?php
include('sistema.php');
$marcas = $web->mostrartabla("select marca,count(id_producto) as productos
							  from marca m join producto p using(id_marca)
							  group by 1 order by marca
							");
$web->smarty->assign('marcas',$marcas);
$web->smarty->display('marcas.html');
?>