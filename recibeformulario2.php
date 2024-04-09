<?php 
header("Content-Type: text/html;charset=utf-8");

if(! empty($_GET)){
    //se enviaron parametros por el método _GET
    $iddelmovimiento=(isset($_GET["idmovimiento"])?$_GET["idmovimiento"]:"ninguno");
    $tipomovimiento =(isset($_GET["tipmovimiento"])?$_GET["tipmovimiento"]:"");
    $numerofactmovimiento =(isset($_GET["numfactmovimiento"])?$_GET["numfactmovimiento"]:"");
    $totalmovimiento=(isset($_GET["tolmovimiento"])?$_GET["tolmovimiento"]:"");
    $totalivamovimiento=(isset($_GET["tolivamovimiento"])?$_GET["tolivamovimiento"]:"");
    $nombreempresas=(isset($_GET["nombreempresa"])?$_GET["nombreempresa"]:"");
    http_response_code(200);

    echo $iddelmovimiento.",".$tipomovimiento.",".$numerofactmovimiento.",".$totalmovimiento.",".$totalivamovimiento.","
    .$nombreempresas;
}else{
    http_response_code(400);
    echo "sin datos recibidos";
}
exit();
?>