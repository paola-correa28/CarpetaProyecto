<?php 
header("Content-Type: text/html;charset=utf-8");

if(! empty($_GET)){
    //se enviaron parametros por el método _GET
    $Movimiento=(isset($_GET["movimientoprodu"])?$_GET["movimientoprodu"]:"ninguno");
    $IDdelproducto=(isset($_GET["idproducto"])?$_GET["idproducto"]:"");
    $Nombredelproducto=(isset($_GET["nomproducto"])?$_GET["nomproducto"]:"");
    $Caracteristicasdelproducto=(isset($_GET["carproducto"])?$_GET["carproducto"]:"");
    $Marcadelproducto=(isset($_GET["marproducto"])?$_GET["marproducto"]:"");
    $Preciodelproducto=(isset($_GET["preproducto"])?$_GET["preproducto"]:"");
    $Lotedelproducto=(isset($_GET["lotproducto"])?$_GET["lotproducto"]:"");
    $Cantidadtotaldelproducto=(isset($_GET["maxproducto"])?$_GET["maxproducto"]:"");
    $proveedor=(isset($_GET["proveproducto"])?$_GET["proveproducto"]:"");
    $fechadevencimiento=(isset($_GET["feproducto"])?$_GET["feproducto"]:"");
    http_response_code(200);

    echo $movimiento.",".$IDdelproducto.",".$Nombredelproducto.",".$Caracteristicasdelproducto.",".$Marcadelproducto.","
    .$Preciodelproducto.",".$Lotedelproducto.",".$Cantidadtotaldelproducto.",".$proveedor.",".$fechadevencimiento;
}else{
    http_response_code(400);
    echo "sin datos recibidos";
}
exit();
?>