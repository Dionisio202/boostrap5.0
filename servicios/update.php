<?php
class update{
    public static function actualizar($datos){
 include_once("Conexion.php");
 $nombreB=$datos['bodega'];
 $cantidad=$datos['cantidad'];
 $producto=$datos['producto'];
 $objeto=new Conexion();
 $respuesta=$objeto->Conectar();
 $select ="UPDATE producto set cantidad=$cantidad WHERE id_bod=(SELECT id_bod FROM bodega WHERE  id_bod='$nombreB') and codigo='$producto'";
 $resultado=$respuesta->prepare($select);
 $resultado->execute();
 echo json_encode($resultado);
    }
}
?>
