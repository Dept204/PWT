<?php
include('sistema.php');
echo $web->mostrartabla("select marca as Marca, count(id_producto) as Cantidad from marca m join producto p using(id_marca) group by 1 order by marca");
?>