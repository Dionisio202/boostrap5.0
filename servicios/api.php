<?php
$opc=$_SERVER['REQUEST_METHOD'];
include_once("selecionar.php");
include_once("update.php");
switch($opc){

    case "GET" :
        $var=$_GET['nombre'];
        $tipo=$_GET['tipo'];
        buscar::buscar($var,$tipo);
        break;

        case "PUT":
            parse_str(file_get_contents("php://input"),$data);
            update::actualizar($data);
            break;
}
?>