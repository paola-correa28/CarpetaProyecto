<?php 
header("Content-Type: text/html;charset=utf-8");

if(! empty($_GET)){
    //se enviaron parametros por el método _GET
    $idempleado =(isset($_GET["idempleado"])?$_GET["idempleado"]:"");
    $nombreempleado =(isset($_GET["nomempleado"])?$_GET["nomempleado"]:"");
    $correoempleado =(isset($_GET["emailempleado"])?$_GET["emailempleado"]:"");
    $teclempleado=(isset($_GET["telefono"])?$_GET["telefono"]:"");
    $turno=(isset($_GET["turno"])?$_GET["turno"]:"");
    $genero=(isset($_GET["genero"])?$_GET["genero"]:"");
    http_response_code(200);

    echo $idempleado.",".$nombreempleado.",".$correoempleado.",".$teclempleado.",".$turno.",".$genero;
}else{
    http_response_code(400);
    echo "sin datos recibidos";
}
exit();
?>