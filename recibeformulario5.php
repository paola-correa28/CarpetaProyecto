<?php 
header("Content-Type: text/html;charset=utf-8");

if(! empty($_GET)){
    //se enviaron parametros por el método _GET
    $iddelmovimientodeventa =(isset($_GET["iddelmovimientodeventa"])?$_GET["iddelmovimientodeventa"]:"");
    $tipomovimientoventa =(isset($_GET["tipmovimientoventa"])?$_GET["tipmovimientoventa"]:"");
    $numerofactventa =(isset($_GET["numfactmovi"])?$_GET["numfactmovi"]:"");
    $totalcompra=(isset($_GET["tolcom"])?$_GET["tolcom"]:"");
    $productoscomprados=(isset($_GET["procom"])?$_GET["procom"]:"");
    http_response_code(200);

    echo $iddelmovimientodeventa.",".$tipomovimientoventa.",".$numerofactventa.",".$totalcompra.",".$productoscomprados;
}else{
    http_response_code(400);
    echo "sin datos recibidos";
}
exit();
?>