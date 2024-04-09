<?php 
header("Content-Type: text/html;charset=utf-8");

if(! empty($_GET)){
    //se enviaron parametros por el método _GET
    $condicionpago =(isset($_GET["condpago"])?$_GET["condpago"]:"");
    $volumendeproducto =(isset($_GET["volventas"])?$_GET["volventas"]:"");
    $nombredeproveedor =(isset($_GET["nomproveedor"])?$_GET["nomproveedor"]:"");
    $correodeproveedor=(isset($_GET["emailproveedor"])?$_GET["emailproveedor"]:"");
    $productosolicitado=(isset($_GET["prosoliproveddor"])?$_GET["prosoliproveddor"]:"");
    $costoporunidad=(isset($_GET["costproveedor"])?$_GET["costproveedor"]:"");
    http_response_code(200);

    echo $condicionpago.",".$volumendeproducto.",".$nombredeproveedor.",".$correodeproveedor.",".$productosolicitado.","
    .$costoporunidad;
}else{
    http_response_code(400);
    echo "sin datos recibidos";
}
exit();
?>