<?php
class buscar{
    public static function buscar($bodega,$producto){
        include_once("Conexion.php");
        $objeto=new Conexion();
        $respuesta=$objeto->Conectar();
        if(strtolower($producto)=='bodega'){
            $select ="SELECT *  from producto WHERE id_bod =(SELECT id_bod from bodega WHERE nombre='$bodega')";
        }else{
            $select ="SELECT *  from producto WHERE codigo='$bodega'";
        }
        
        $resultado=$respuesta->prepare($select);
        $resultado->execute();
        $datos=$resultado->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($datos);
    }
}
?>